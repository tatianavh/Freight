<?php 
//register resources

	function register_resources(){
	//register a menu
		register_nav_menu('main-menu','Main Menu');

	//register a slide
		$arg = array(
	      'labels' => array(
	        'name' => 'Slides',
	        'singular_name' => 'Slide',
	        'menu_name' => 'Slides'
	      ),
	      'public' => true,
	      'show_in_nav_menues' => true,
	    );
		register_post_type( 'slide', $arg);

	//register Features
		$arg = array(
	      'labels' => array(
	        'name' => 'Features',
	        'singular_name' => 'Feature',
	        'menu_name' => 'Features'
	      ),
	      'public' => true,
	      'show_in_nav_menues' => true,
	    );
		register_post_type( 'feature', $arg);

	//register About Us
		$arg = array(
	      'labels' => array(
	        'name' => 'AboutUs',
	        'singular_name' => 'AboutUs',
	        'menu_name' => 'About Us'
	      ),
	      'public' => true,
	      'show_in_nav_menues' => true,
	    );
		register_post_type( 'aboutus', $arg);


	//register Services
		$arg = array(
	      'labels' => array(
	        'name' => 'Services',
	        'singular_name' => 'Service',
	        'menu_name' => 'Services'
	      ),
	      'public' => true,
	      'show_in_nav_menues' => true,
	    );
		register_post_type( 'services', $arg);

	//register Portfolio
		$arg = array(
	      'labels' => array(
	        'name' => 'Projects',
	        'singular_name' => 'Project',
	        'menu_name' => 'Projects'
	      ),
	      'public' => true,
	      'show_in_nav_menues' => true,
	    );
		register_post_type( 'project', $arg);

	//register Contact Us
		$arg = array(
	      'labels' => array(
	        'name' => 'Contact',
	        'singular_name' => 'Contact',
	        'menu_name' => 'Contact'
	      ),
	      'public' => true,
	      'show_in_nav_menues' => true,
	    );
		register_post_type( 'contact', $arg);

	//register taxonomy
		$arg = array(
			'label' => 'Type',
			'rewrite' => array( 'slug' => 'type' ),
			'hierarchical' => true,
		);
		register_taxonomy('type','project',$arg);

	}
	add_action('init','register_resources');

//menu items hooks
	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,3);

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] = 'nav-link';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);




//CUSTOMISER BITS-----------
	//Set up Customiser Controls

	function mytheme_customize_register( $wp_customize ) {

	//All our sections, settings, and controls will be added here
		$wp_customize->add_section( 'section_themesettings' , array(
		    'title'      => 'Theme Settings',
		    'priority'   => 30,
		) );

		
	//THEME Color
		$wp_customize->add_setting( 'theme_color_setting' , array(
		    'default'   => '#fa8072',
		    'transport' => 'refresh',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_color', array(
				'label'      => 'Theme Colors',
				'section'    => 'section_themesettings',
				'settings'   => 'theme_color_setting',
		) ) );

	//TEXT input
		$wp_customize->add_setting( 'font_setting', array(
		  'capability' => 'edit_theme_options',
		  'default' => 'Lato',
		  // 'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( 'font_setting', array(
		  'type' => 'text',
		  'section' => 'section_themesettings', // Add a default or your own section
		  'label' => __( 'Theme Fonts' ),
		  'description' => __( 'This is a custom text box.' ),
		) );

	//IMAGE Upload
		$wp_customize->add_setting( 'logo_setting', array(
		  'transport' => 'refresh',
		  'default' => '',
		  // 'sanitize_callback' => 'esc_raw_url',
		) );

		$wp_customize->add_control(
	       new WP_Customize_Image_Control(
	           $wp_customize,
	           'logo_setting_control',
	           array(
	               'label'      => 'Upload a logo', 'theme_name',
	               'section'    => 'section_themesettings',
	               'settings'   => 'logo_setting',
	               // 'context'    => 'your_setting_context' 
	           )
	       )
	   );
	}

	add_action( 'customize_register', 'mytheme_customize_register' );

	function mytheme_customize_css()
	{
	    
	    ?>
	         <style type="text/css">
	             h1.heading-title, a.current-menu-item, a.project-staff-link {
	             	color: <?php echo get_theme_mod('theme_color_setting', 'salmon'); ?> !important; 
	         	}
	         	.btn-common, .btn-common:active, .btn-common:focus{ 
	             	border: 1px <?php echo get_theme_mod('theme_color_setting', 'salmon'); ?> solid !important; 
	         	}
	         	a.active{
	         		background-color: <?php echo get_theme_mod('theme_color_setting', 'salmon'); ?> !important;
	         	}

	         	.controls .active{
	         		background-color: <?php echo get_theme_mod('theme_color_setting', 'salmon'); ?> !important;
	         	}

	         	body,p,div{
	         		font-family: <?php echo get_theme_mod('font_setting', 'Lato'); ?> !important;
	         	}
	         </style>
	    <?php
	}
	add_action( 'wp_head', 'mytheme_customize_css');

	// Add Active class to Menu
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
	    if (in_array('current-menu-item', $classes) ){
	        $classes[] = 'menu-active ';
	    }
	    return $classes;
	}

	

 ?>