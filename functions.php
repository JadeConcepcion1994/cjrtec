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

  //adding section to the wp customize option
  $wp_customize -> add_section(
    'cjrtec_homepage_settings_section', array(
      'title' => 'Home Content Settings'
    )
  );

  // Topbar Info Section
  $wp_customize -> add_setting(
    'topbar_address_content_edit', array(
      'default' => 'Company Address'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'topbar_address_content_control', array(
        'label' => 'Company Address',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'topbar_address_content_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'topbar_phone_number_edit', array(
      'default' => 'Phone Number'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'topbar_phone_number_control', array(
        'label' => 'Company Phone Number',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'topbar_phone_number_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'topbar_business_hour_open_edit', array(
      'default' => 'Business Hour Open'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'topbar_business_hour_open_control', array(
        'label' => 'Business Hour Open (e.g. 9:00AM)',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'topbar_business_hour_open_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'topbar_business_hour_close_edit', array(
      'default' => 'Business Hour Close'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'topbar_business_hour_close_control', array(
        'label' => 'Business Hour Close (e.g. 5:00PM)',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'topbar_business_hour_close_edit'
      )
    )
  );

  // Social Media Links
  // Facebook
  $wp_customize -> add_setting(
    'facebook_link_edit', array(
      'default' => 'https://www.facebook.com/'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'facebook_link_control', array(
        'label' => 'Facebook Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'facebook_link_edit'
      )
    )
  );

  // Twitter
  $wp_customize -> add_setting(
    'twitter_link_edit', array(
      'default' => 'https://twitter.com/'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'twitter_link_control', array(
        'label' => 'Twitter Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'twitter_link_edit'
      )
    )
  );

  // Youtube
  $wp_customize -> add_setting(
    'youtube_link_edit', array(
      'default' => 'https://www.youtube.com/'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'youtube_link_control', array(
        'label' => 'Youtube Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'youtube_link_edit'
      )
    )
  );

  // LinkedIn
  $wp_customize -> add_setting(
    'linkedin_link_edit', array(
      'default' => 'https://www.linkedin.com/'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'linkedin_link_control', array(
        'label' => 'LinkedIn Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'linkedin_link_edit'
      )
    )
  );

  // Instagram
  // 
  $wp_customize -> add_setting(
    'instagram_link_edit', array(
      'default' => 'https://www.instagram.com/'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'instagram_link_control', array(
        'label' => 'Instagram Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'instagram_link_edit'
      )
    )
  );






  // Navbar Registration CTA Title
  $wp_customize -> add_setting(
    'navbar_registration_cta_title_edit', array(
      'default' => 'Registration CTA Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'navbar_registration_cta_title_control', array(
        'label' => 'Registration CTA Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'navbar_registration_cta_title_edit'
      )
    )
  );

  // Navbar Registration CTA Link
  $wp_customize -> add_setting(
    'navbar_registration_cta_link_edit', array(
      'default' => 'Registration CTA Link'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'navbar_registration_cta_link_control', array(
        'label' => 'Registration CTA Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'navbar_registration_cta_link_edit'
      )
    )
  );


  // //adding the settings inside the section
  // $wp_customize->add_setting('cjrtec_address_content_edit', array(
  //   'default' => 'Address Content Here'
  // ));

  // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_address_content_control', array(
  //   'label' => 'Address Content',
  //   'section' => 'cjrtec_homepage_settings_section',
  //   'settings' => 'cjrtec_address_content_edit'
  // )));


  // Header Content
  $wp_customize -> add_setting(
    'cjrtec_image_header_edit', array(
      'default' => 'Header Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_image_header_control', array(
        'label' => 'Header Content',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_image_header_edit'
      )
    )
  );

  // // adding the settings inside the section
  // $wp_customize -> add_setting(
  //   'cjrtec_first_box_edit', array(
  //     'default' => 'First Box Contact Number'
  //   )
  // );

  // $wp_customize -> add_control(
  //   new WP_Customize_Control(
  //     $wp_customize, 'cjrtec_first_box_control', array(
  //       'label' => 'First Box Content',
  //       'section' => 'cjrtec_homepage_settings_section',
  //       'settings' => 'cjrtec_first_box_edit',
  //     )
  //   )
  // );

  $wp_customize -> add_setting(
    'cjrtec_first_box_link_edit', array(
      'default' => 'Contact Page Link here'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_first_box_link_control', array(
        'label' => 'First Box Link (Add Contact Page Link Below)',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_first_box_link_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_second_box_edit', array(
      'default' => 'Second Box Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_second_box_control', array(
        'label' => 'Second Box Content',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_box_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_second_box_link_edit', array(
      'default' => 'Free Quotes Page Link here'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_second_box_link_control', array(
        'label' => 'Second Box Link (Add Free Quotes Page Link Below)',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_box_link_edit'
      )
    )
  );

  //carousel images content
  $wp_customize -> add_setting('cjrtec_1st_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_1st_carousel_control', array(
        'label' => '1st Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_1st_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_2nd_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_2nd_carousel_control', array(
        'label' => '2nd Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_2nd_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_3rd_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_3rd_carousel_control', array(
        'label' => '3rd Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_3rd_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_4th_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_4th_carousel_control', array(
        'label' => '4th Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_4th_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_5th_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_5th_carousel_control', array(
        'label' => '5th Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_5th_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_6th_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_6th_carousel_control', array(
        'label' => '6th Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_6th_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_7th_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_7th_carousel_control', array(
        'label' => '7th Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_7th_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_8th_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_8th_carousel_control', array(
        'label' => '8th Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_8th_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_9th_carousel_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_9th_carousel_control', array(
        'label' => '9th Slide Carousel Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_9th_carousel_image',
        'height' => 1000,
        'width' => 1500
      )
    )
  );

  //second row content
  $wp_customize -> add_setting(
    'cjrtec_header_second_edit', array(
      'default' => 'Second Header Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_header_second_control', array(
        'label' => 'Second Header Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_header_second_edit'
      )
    )
  );

  // $wp_customize->add_setting('cjrtec_par_box_edit', array(
  //   'default' => 'Paragraph Box Content'
  // ));

  // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_par_box_control', array(
  //   'label' => 'Paragraph Content',
  //   'section' => 'cjrtec_homepage_settings_section',
  //   'settings' => 'cjrtec_par_box_edit',
  //   'type' => 'textarea'
  // )));

  $wp_customize -> add_setting(
    'cjrtec_paragraph_content_edit', array(
      'default' => 'Second Header Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_paragraph_content_control', array(
        'label' => 'Second Header Content',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_paragraph_content_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_link_title_edit', array(
      'default' => 'Second Header CTA Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_link_title_control', array(
        'label' => 'Second Header CTA Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_link_title_edit'
      )
    )
  );

  // $wp_customize->add_setting('cjrtec_link_edit');

  // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_link_control', array(
  //   'label' => 'Link',
  //   'section' => 'cjrtec_homepage_settings_section',
  //   'settings' => 'cjrtec_link_edit',
  //   'type' => 'dropdown-pages'
  // )));

  $wp_customize -> add_setting(
    'cjrtec_link_edit', array(
      'default' => 'Second Header CTA Link'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_link_control', array(
        'label' => 'Second Header CTA Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_link_edit',
      )
    )
  );

  $wp_customize -> add_setting('cjrtec_second_row_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_second_row_control', array(
        'label' => 'Second Header Right Column Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_row_image',
        'height' => 700,
        'width' => 1000
      )
    )
  );

  // Info Counter Section
  $wp_customize -> add_setting(
    'info_counter_years_edit', array(
      'default' => '0'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'info_counter_years_control', array(
        'label' => 'Info Counter Years of Experience',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'info_counter_years_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'info_counter_projects_edit', array(
      'default' => '0'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'info_counter_projects_control', array(
        'label' => 'Info Counter Successful Projects',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'info_counter_projects_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'info_counter_professionals_edit', array(
      'default' => '0'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'info_counter_professionals_control', array(
        'label' => 'Info Counter Professional Experts',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'info_counter_professionals_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'info_counter_customers_edit', array(
      'default' => '0'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'info_counter_customers_control', array(
        'label' => 'Info Counter Happy Customers',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'info_counter_customers_edit'
      )
    )
  );

  //cards main header
  $wp_customize -> add_setting(
    'cjrtec_cards_title_edit', array(
      'default' => 'Best Sellers Heading Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_cards_title_control', array(
        'label' => 'Best Sellers Heading Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_cards_title_edit'
      )
    )
  );

  //first card
  $wp_customize -> add_setting('cjrtec_first_card_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_first_card_control', array(
        'label' => 'Bestseller Product 1 Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_first_card_image',
        'height' => 700,
        'width' => 1000
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_first_title_edit', array(
      'default' => 'Bestseller Product 1 Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_first_title_control', array(
        'label' => 'Bestseller Product 1 Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_first_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_first_paragraph_edit', array(
      'default' => 'Bestseller Product 1 Description'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_par_box_control', array(
        'label' => 'Bestseller Product 1 Description',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_first_paragraph_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_first_link_title_edit', array(
      'default' => 'Best Seller Product 1 CTA Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_first_link_title_control', array(
        'label' => 'Best Seller Product 1 CTA Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_first_link_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_first_link_edit', array(
      'default' => 'Best Seller Product 1 CTA Link'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_first_link_control', array(
        'label' => 'Best Seller Product 1 CTA Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_first_link_edit',
      )
    )
  );

  //second card
  $wp_customize -> add_setting('cjrtec_second_card_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_second_card_control', array(
        'label' => 'Bestseller Product 2 Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_card_image',
        'height' => 700,
        'width' => 1000
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_second_title_edit', array(
      'default' => 'Bestseller Product 2 Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_second_title_control', array(
        'label' => 'Bestseller Product 2 Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_second_paragraph_edit', array(
      'default' => 'Bestseller Product 2 Description'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_par2_box_control', array(
        'label' => 'Bestseller Product 2 Description',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_paragraph_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_second_link_title_edit', array(
      'default' => 'Bestseller Product 2 CTA Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_second_link_title_control', array(
        'label' => 'Bestseller Product 2 CTA Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_link_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_second_link_edit', array(
      'default' => 'Bestseller Product 2 CTA Link'
    ));

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_second_link_control', array(
        'label' => 'Bestseller Product 2 CTA Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_second_link_edit'
      )
    )
  );

  //third card
  $wp_customize -> add_setting('cjrtec_third_card_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_third_card_control', array(
        'label' => 'Bestseller Product 3 Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_third_card_image',
        'height' => 700,
        'width' => 1000
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_third_title_edit', array(
      'default' => 'Bestseller Product 3 Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_third_title_control', array(
        'label' => 'Bestseller Product 3 Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_third_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_third_paragraph_edit', array(
      'default' => 'Bestseller Product 3 Description'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_par3_box_control', array(
        'label' => 'Bestseller Product 3 Description',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_third_paragraph_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_third_link_title_edit', array(
      'default' => 'Bestseller Product 3 CTA Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_third_link_title_control', array(
        'label' => 'Bestseller Product 3 CTA Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_third_link_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_third_link_edit', array(
      'default' => 'Bestseller Product 3 CTA Link'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_third_link_control', array(
        'label' => 'Bestseller Product 3 CTA Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_third_link_edit'
      )
    )
  );

   //fourth card
  $wp_customize -> add_setting('cjrtec_fourth_card_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_fourth_card_control', array(
        'label' => 'Bestseller Product 4 Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_fourth_card_image',
        'height' => 700,
        'width' => 1000
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_fourth_title_edit', array(
      'default' => 'Bestseller Product 4 Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_fourth_title_control', array(
        'label' => 'Bestseller Product 4 Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_fourth_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_fourth_paragraph_edit', array(
      'default' => 'Bestseller Product 4 Description'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_par4_box_control', array(
        'label' => 'Bestseller Product 4 Description',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_fourth_paragraph_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_fourth_link_title_edit', array(
      'default' => 'Bestseller Product 4 CTA Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_fourth_link_title_control', array(
        'label' => 'Bestseller Product 4 CTA Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_fourth_link_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_fourth_link_edit', array(
      'default' => 'Bestseller Product 4 CTA Link'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_fourth_link_control', array(
        'label' => 'Bestseller Product 4 CTA Link',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_fourth_link_edit',
      )
    )
  );

  // WhY CHOOSE SECTION
  $wp_customize -> add_setting('cjrtec_lower_main_image');

  $wp_customize -> add_control(
    new WP_Customize_Cropped_Image_Control(
      $wp_customize, 'cjrtec_lower_main_control', array(
        'label' => 'Why Choose Section Heading Image',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_lower_main_image',
        'height' => 700,
        'width' => 1000
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_lower_title_edit', array(
      'default' => 'Why Choose Section Heading Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_lower_title_control', array(
        'label' => 'Why Choose Section Heading Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_lower_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'why_choose_section_heading_content_edit', array(
      'default' => 'Why Choose Section Heading Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'why_choose_section_heading_content_control', array(
        'label' => 'Why Choose Section Heading Content',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'why_choose_section_heading_content_edit',
        'type' => 'textarea'
      )
    )
  );

  // $wp_customize -> add_setting(
  //   'cjrtec_c1_title_edit', array(
  //     'default' => 'Text Title'
  //   )
  // );

  // $wp_customize -> add_control(
  //   new WP_Customize_Control(
  //     $wp_customize, 'cjrtec_c1_title_control', array(
  //       'label' => 'Text Title Column 1',
  //       'section' => 'cjrtec_homepage_settings_section',
  //       'settings' => 'cjrtec_c1_title_edit'
  //     )
  //   )
  // );

  $wp_customize -> add_setting(
    'cjrtec_c1_title_edit', array(
      'default' => 'Column 1 - About Warranty Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_c1_title_control', array(
        'label' => 'Column 1 - About Warranty Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_c1_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'column_1_warranty_edit', array(
      'default' => 'Column 1 - About Warranty Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'column_1_warranty_control', array(
        'label' => 'Column 1 - About Warranty Content',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'column_1_warranty_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_c2_title_edit', array(
      'default' => 'Column 2 - About Buyback Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_c2_title_control', array(
        'label' => 'Column 2 - About Buyback Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_c2_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'column_2_buyback_edit', array(
      'default' => 'Column 2 - About Buyback Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'column_2_buyback_control', array(
        'label' => 'Column 2 - About Buyback Content',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'column_2_buyback_edit',
        'type' => 'textarea'
      )
    )
  );

  $wp_customize -> add_setting(
    'cjrtec_c3_title_edit', array(
      'default' => 'Column 3 - About Financing Title'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'cjrtec_c3_title_control', array(
        'label' => 'Column 3 - About Financing Title',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'cjrtec_c3_title_edit'
      )
    )
  );

  $wp_customize -> add_setting(
    'column_3_financing_edit', array(
      'default' => 'Column 3 - About Financing Content'
    )
  );

  $wp_customize -> add_control(
    new WP_Customize_Control(
      $wp_customize, 'column_3_financing_control', array(
        'label' => 'Column 3 - About Financing Content',
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'column_3_financing_edit',
        'type' => 'textarea'
      )
    )
  );

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
        'section' => 'cjrtec_homepage_settings_section',
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
        'section' => 'cjrtec_homepage_settings_section',
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
        'section' => 'cjrtec_homepage_settings_section',
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
        'section' => 'cjrtec_homepage_settings_section',
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
        'section' => 'cjrtec_homepage_settings_section',
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
        'section' => 'cjrtec_homepage_settings_section',
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
        'section' => 'cjrtec_homepage_settings_section',
        'settings' => 'get_help_cta_link_edit'
      )
    )
  );
}
add_action('customize_register', 'cjrtec_home_content');

?>