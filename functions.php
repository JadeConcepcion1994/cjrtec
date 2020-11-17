<?php 


class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {

   function start_lvl(&$output, $depth = 0, $args = array()) {
    
    //In a child UL, add the 'dropdown-menu' class
    $indent = str_repeat( "\t", $depth );
    $output    .= "\n$indent<ul class=\"dropdown-menu\">\n";
    
  }
 
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    //Add class and attribute to LI element that contains a submenu UL.
    if ($args->has_children){
      $classes[]    = 'dropdown';
      $li_attributes .= 'data-dropdown="dropdown"';
    }
    $classes[] = 'menu-item-' . $item->ID;
    //If we are on the current page, add the active class to that menu item.
    $classes[] = ($item->current) ? 'active' : '';

    //Make sure you still add all of the WordPress classes.
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

    //Add attributes to link element.
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : ''; 

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= ($args->has_children) ? ' <b class="caret"></b> ' : ''; 
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  //Overwrite display_element function to add has_children attribute. Not needed in >= Wordpress 3.4
  function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
    
    if ( !$element )
      return;
    
    $id_field = $this->db_fields['id'];

    //display this element
    if ( is_array( $args[0] ) ) 
      $args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
    else if ( is_object( $args[0] ) ) 
      $args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
    $cb_args = array_merge( array(&$output, $element, $depth), $args);
    call_user_func_array(array(&$this, 'start_el'), $cb_args);

    $id = $element->$id_field;

    // descend only when the depth is right and there are childrens for this element
    if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

      foreach( $children_elements[ $id ] as $child ){

        if ( !isset($newlevel) ) {
          $newlevel = true;
          //start the child delimiter
          $cb_args = array_merge( array(&$output, $depth), $args);
          call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
        }
        $this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
      }
        unset( $children_elements[ $id ] );
    }

    if ( isset($newlevel) && $newlevel ){
      //end the child delimiter
      $cb_args = array_merge( array(&$output, $depth), $args);
      call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
    }

    //end this element
    $cb_args = array_merge( array(&$output, $element, $depth), $args);
    call_user_func_array(array(&$this, 'end_el'), $cb_args);
    
  }
  
}



function cjrtec_theme_support(){

//adds dynamic title tag support
add_theme_support('title-tag');	
add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'cjrtec_theme_support');



// register editor styles 
function my_add_editor_styles() {
	add_theme_support('editor-styles');

	add_editor_style([
		'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',
		'style.css',
		'css/editor.css',
	]);
}

add_action('after_setup_theme', 'my_add_editor_styles');



function cjrtec_menus(){
	$locations  = array(
		'primary' => "CJRTEC Primary Menus",
		'footer' => "CJRTEC Footer Menu"
	);

	register_nav_menus($locations);
}

add_action('init', 'cjrtec_menus');

function cjrtec_register_styles(){
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('cjrtec-css',get_template_directory_uri() ."/style.css", array('cjrtec-bootstrap'), $version, 'all');
	wp_enqueue_style('cjrtec-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5.2', 'all');
  wp_enqueue_style('cjrtec-fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.9', 'all');
  wp_enqueue_style('cjrtec-font', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap', false);
  wp_enqueue_style('cjrtec-aos', "https://unpkg.com/aos@next/dist/aos.css", array(), '', 'all');
  wp_enqueue_style('cjrtec-pages-css', get_template_directory_uri() . "/css/cjrtec-pages.css", array(), false, 'all');
}

add_action('wp_enqueue_scripts', 'cjrtec_register_styles');



function cjrtec_register_scripts(){

  wp_enqueue_script('cjrtec-jquery', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true);
	wp_enqueue_script('cjrtec-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5.2', true);
  wp_enqueue_script('cjrtec-main', get_template_directory_uri(). "/main.js", array(),'1.0', true );
  wp_enqueue_script('cjrtec-aos', "https://unpkg.com/aos@next/dist/aos.js", array(), '', true);
}

add_action('wp_enqueue_scripts', 'cjrtec_register_scripts');



function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {

  if (property_exists($args, 'list_item_class')) { // Has error when there's no menu created in WordPress, will check later. - Leo
      $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);



function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);





//function to add settings on wordpress home
function cjrtec_home_content($wp_customize){

  //adding section to the wp
  $wp_customize->add_section('cjrtec_free_quote_section', array(
    'title' => 'Home Content Settings'
  ));

  //adding the settings inside the section
  $wp_customize->add_setting('cjrtec_free_quote_edit', array(
    'default' => 'Free Quotes Here'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_free_quote_control', array(
    'label' => 'Free Quote',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_free_quote_edit'
  )));


  //adding the settings inside the section
  $wp_customize->add_setting('cjrtec_address_content_edit', array(
    'default' => 'Address Content Here'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_address_content_control', array(
    'label' => 'Address Content',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_address_content_edit'
  )));

  //adding the settings inside the section
  $wp_customize->add_setting('cjrtec_image_header_edit', array(
    'default' => 'Header Content'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_image_header_control', array(
    'label' => 'Header Content',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_image_header_edit'
  )));

  //adding the settings inside the section
  $wp_customize->add_setting('cjrtec_first_box_edit', array(
    'default' => 'First Box Content'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_first_box_control', array(
    'label' => 'First Box Content',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_first_box_edit',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('cjrtec_first_box_link_edit', array(
    'default' => 'Link here'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_first_box_link_control', array(
    'label' => 'First Box Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_first_box_link_edit'
  )));


  $wp_customize->add_setting('cjrtec_second_box_edit', array(
    'default' => 'Second Box Content'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_second_box_control', array(
    'label' => 'Second Box Content',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_box_edit',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('cjrtec_second_box_link_edit', array(
    'default' => 'Link here'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_second_box_link_control', array(
    'label' => 'Second Box Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_box_link_edit'
  )));



//carousel images content
  $wp_customize->add_setting('cjrtec_1st_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_1st_carousel_control', array(
    'label' => '1st Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_1st_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_2nd_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_2nd_carousel_control', array(
    'label' => '2nd Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_2nd_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_3rd_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_3rd_carousel_control', array(
    'label' => '3rd Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_3rd_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_4th_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_4th_carousel_control', array(
    'label' => '4th Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_4th_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_5th_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_5th_carousel_control', array(
    'label' => '5th Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_5th_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_6th_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_6th_carousel_control', array(
    'label' => '6th Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_6th_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_7th_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_7th_carousel_control', array(
    'label' => '7th Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_7th_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_8th_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_8th_carousel_control', array(
    'label' => '8th Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_8th_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));

  $wp_customize->add_setting('cjrtec_9th_carousel_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_9th_carousel_control', array(
    'label' => '9th Slide Carousel Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_9th_carousel_image',
    'height' => 1000,
    'width' => 1500

  )));



  //second row content

  $wp_customize->add_setting('cjrtec_header_second_edit', array(
    'default' => 'Header Content Second'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_header_second_control', array(
    'label' => 'Header Content Second',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_header_second_edit'
  )));

  // $wp_customize->add_setting('cjrtec_par_box_edit', array(
  //   'default' => 'Paragraph Box Content'
  // ));

  // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_par_box_control', array(
  //   'label' => 'Paragraph Content',
  //   'section' => 'cjrtec_free_quote_section',
  //   'settings' => 'cjrtec_par_box_edit',
  //   'type' => 'textarea'
  // )));

    $wp_customize->add_setting('cjrtec_paragraph_content_edit', array(
    'default' => 'Paragraph Content'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_paragraph_content_control', array(
    'label' => 'Paragraph Content',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_paragraph_content_edit',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('cjrtec_link_title_edit', array(
    'default' => 'Link Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_link_title_control', array(
    'label' => 'Link Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_link_title_edit'
  )));

  // $wp_customize->add_setting('cjrtec_link_edit');

  // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_link_control', array(
  //   'label' => 'Link',
  //   'section' => 'cjrtec_free_quote_section',
  //   'settings' => 'cjrtec_link_edit',
  //   'type' => 'dropdown-pages'
  // )));

  $wp_customize->add_setting('cjrtec_link_edit', array(
    'default' => 'Link here'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_link_control', array(
    'label' => 'Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_link_edit',
  )));

  $wp_customize->add_setting('cjrtec_second_row_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_second_row_control', array(
    'label' => 'Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_row_image',
    'height' => 700,
    'width' => 1000

  )));

  //cards main header
  $wp_customize->add_setting('cjrtec_cards_title_edit', array(
    'default' => 'Main Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_cards_title_control', array(
    'label' => 'Card Main Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_cards_title_edit'
  )));


  //first card
  $wp_customize->add_setting('cjrtec_first_card_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_first_card_control', array(
    'label' => 'First Card Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_first_card_image',
    'height' => 700,
    'width' => 1000

  )));

  $wp_customize->add_setting('cjrtec_first_title_edit', array(
    'default' => 'First Card Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_first_title_control', array(
    'label' => 'Card Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_first_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_first_paragraph_edit', array(
    'default' => 'First Card Paragraph'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_par_box_control', array(
    'label' => 'Card Paragraph',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_first_paragraph_edit',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('cjrtec_first_link_title_edit', array(
    'default' => 'First Link Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_first_link_title_control', array(
    'label' => 'Link Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_first_link_title_edit'
  )));


  $wp_customize->add_setting('cjrtec_first_link_edit');

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_first_link_control', array(
    'label' => 'First Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_first_link_edit',
  )));


//second card
  $wp_customize->add_setting('cjrtec_second_card_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_second_card_control', array(
    'label' => 'Second Card Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_card_image',
    'height' => 700,
    'width' => 1000

  )));

  $wp_customize->add_setting('cjrtec_second_title_edit', array(
    'default' => 'Second Card Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_second_title_control', array(
    'label' => 'Card Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_second_paragraph_edit', array(
    'default' => 'First Card Paragraph'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_par2_box_control', array(
    'label' => 'Card Paragraph',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_paragraph_edit',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('cjrtec_second_link_title_edit', array(
    'default' => 'Second Link Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_second_link_title_control', array(
    'label' => 'Link Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_link_title_edit'
  )));


  $wp_customize->add_setting('cjrtec_second_link_edit');

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_second_link_control', array(
    'label' => 'Second Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_link_edit'
  )));


  //third card
  $wp_customize->add_setting('cjrtec_third_card_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_third_card_control', array(
    'label' => 'Third Card Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_third_card_image',
    'height' => 700,
    'width' => 1000

  )));

  $wp_customize->add_setting('cjrtec_third_title_edit', array(
    'default' => 'Third Card Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_third_title_control', array(
    'label' => 'Card Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_third_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_third_paragraph_edit', array(
    'default' => 'Third Card Paragraph'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_par3_box_control', array(
    'label' => 'Card Paragraph',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_third_paragraph_edit',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('cjrtec_third_link_title_edit', array(
    'default' => 'Third Link Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_third_link_title_control', array(
    'label' => 'Link Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_third_link_title_edit'
  )));


  $wp_customize->add_setting('cjrtec_third_link_edit');

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_third_link_control', array(
    'label' => 'Third Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_third_link_edit'
  )));


   //fourth card
  $wp_customize->add_setting('cjrtec_fourth_card_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_fourth_card_control', array(
    'label' => 'Fourth Card Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_fourth_card_image',
    'height' => 700,
    'width' => 1000

  )));

  $wp_customize->add_setting('cjrtec_fourth_title_edit', array(
    'default' => 'Fourth Card Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_fourth_title_control', array(
    'label' => 'Card Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_fourth_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_fourth_paragraph_edit', array(
    'default' => 'Fourth Card Paragraph'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_par4_box_control', array(
    'label' => 'Card Paragraph',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_fourth_paragraph_edit',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('cjrtec_fourth_link_title_edit', array(
    'default' => 'Fourth Link Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_fourth_link_title_control', array(
    'label' => 'Link Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_fourth_link_title_edit'
  )));


  $wp_customize->add_setting('cjrtec_fourth_link_edit');

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_fourth_link_control', array(
    'label' => 'Fourth Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_fourth_link_edit',
  )));


  //image & text below cards
  $wp_customize->add_setting('cjrtec_lower_main_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_lower_main_control', array(
    'label' => 'Lower Main Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_lower_main_image',
    'height' => 700,
    'width' => 1000

  )));

  $wp_customize->add_setting('cjrtec_lower_title_edit', array(
    'default' => 'Text Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_lower_title_control', array(
    'label' => 'Image Text Title',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_lower_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_c1_title_edit', array(
    'default' => 'Text Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_c1_title_control', array(
    'label' => 'Text Title Column 1',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_c1_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_c1_title_edit', array(
    'default' => 'Text Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_c1_title_control', array(
    'label' => 'Text Title Column 1',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_c1_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_c2_title_edit', array(
    'default' => 'Text Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_c2_title_control', array(
    'label' => 'Text Title Column 2',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_c2_title_edit'
  )));

  $wp_customize->add_setting('cjrtec_c3_title_edit', array(
    'default' => 'Text Title'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_c3_title_control', array(
    'label' => 'Text Title Column 3',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_c3_title_edit'
  )));

  // GET HELP SECTION
  // Get Help Heading
  $wp_customize -> add_setting(
    'get_help_heading_edit', array(
      'default' => 'Get Help Heading Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'get_help_heading_control', array(
        'label' => 'Get Help Heading',
        'section' => 'cjrtec_free_quote_section',
        'settings' => 'get_help_heading_edit'
      )
    )
  );

  // Get Help Description
  $wp_customize -> add_setting(
    'get_help_description_edit', array(
      'default' => 'Get Help Description Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'get_help_description_control', array(
        'label' => 'Get Help Description Content',
        'section' => 'cjrtec_free_quote_section',
        'settings' => 'get_help_description_edit',
        'type' => 'textarea'
      )
    )
  );

  // Get Help Column 1
  $wp_customize -> add_setting(
    'get_help_column_1_edit', array(
      'default' => 'Get Help Column 1 Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'get_help_column_1_control', array(
        'label' => 'Get Help Column 1 Content',
        'section' => 'cjrtec_free_quote_section',
        'settings'=> 'get_help_column_1_edit',
        'type' => 'textarea'
      )
    )
  );

  // Get Help Column 2
  $wp_customize -> add_setting(
    'get_help_column_2_edit', array(
      'default' => 'Get Help Column 2 Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'get_help_column_2_control', array(
        'label' => 'Get Help Column 2 Content',
        'section' => 'cjrtec_free_quote_section',
        'settings'=> 'get_help_column_2_edit',
        'type' => 'textarea'
      )
    )
  );

  // Get Help Column 3
  $wp_customize -> add_setting(
    'get_help_column_3_edit', array(
      'default' => 'Get Help Column 3 Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'get_help_column_3_control', array(
        'label' => 'Get Help Column 3 Content',
        'section' => 'cjrtec_free_quote_section',
        'settings'=> 'get_help_column_3_edit',
        'type' => 'textarea'
      )
    )
  );

  // Get Help CTA Title
  $wp_customize -> add_setting(
    'get_help_cta_title_edit', array(
      'default' => 'Get Help CTA Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'get_help_cta_title_control', array(
        'label' => 'Get Help CTA Title',
        'section' => 'cjrtec_free_quote_section',
        'settings' => 'get_help_cta_title_edit',
      )
    )
  );

  // Get Help CTA Link
  $wp_customize -> add_setting(
    'get_help_cta_link_edit', array(
      'default' => 'Get Help CTA Link'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'get_help_cta_link_control', array(
        'label' => 'Get Help CTA Link',
        'section' => 'cjrtec_free_quote_section',
        'settings' => 'get_help_cta_link_edit'
      )
    )
  );
}
add_action('customize_register', 'cjrtec_home_content');

?>