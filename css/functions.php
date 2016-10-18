<?php
	function theme_name_scripts() {
		wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/bootstrap.min.css');
		wp_enqueue_style( 'style.css', get_stylesheet_uri());
		wp_enqueue_style( 'media.css', get_template_directory_uri() . '/media.css');

		wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/js/jquery.js');
		wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js');
		wp_enqueue_script( 'common.js', get_template_directory_uri() . '/js/common.js');
	}
		
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
		
	//мініатюра
	add_theme_support('post-thumbnail');
	
	//menu
	register_nav_menus( array(
		'header_menu' => 'Меню в шапці',
		'user_menu' => 'Меню користувача',
		'footer_menu' => 'Меню в підвалі'
	) );
		
		$args = array(
			'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			'id'            => 'unique-sidebar-id',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<li id="%1" class="widget %2">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>'
		);
	
		register_sidebar( $args );
	
?>