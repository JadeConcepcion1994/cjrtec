<?php 

function cjrtec_theme_support(){

//adds dynamic title tag support
add_theme_support('title-tag');	
add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'cjrtec_theme_support');

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
  wp_enqueue_style('cjrtec-aos', "https://unpkg.com/aos@next/dist/aos.css", array(), '', 'all');
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
  if (property_exists($args, 'list_item_class')) {
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

  $wp_customize->add_setting('cjrtec_second_box_edit', array(
    'default' => 'Second Box Content'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_second_box_control', array(
    'label' => 'Second Box Content',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_second_box_edit',
    'type' => 'textarea'
  )));


  $wp_customize->add_setting('cjrtec_top_home_image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cjrtec_top_home_image_control', array(
    'label' => 'Background Image',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_top_home_image',
    'height' => 700,
    'width' => 1000

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

  $wp_customize->add_setting('cjrtec_link_edit');

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cjrtec_link_control', array(
    'label' => 'Link',
    'section' => 'cjrtec_free_quote_section',
    'settings' => 'cjrtec_link_edit',
    'type' => 'dropdown-pages'
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
    'type' => 'dropdown-pages'
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
    'settings' => 'cjrtec_second_link_edit',
    'type' => 'dropdown-pages'
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
    'settings' => 'cjrtec_third_link_edit',
    'type' => 'dropdown-pages'
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
    'type' => 'dropdown-pages'
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



}
add_action('customize_register', 'cjrtec_home_content');



?>