<?php 

    //Woocommerce SUPPORT for THEME
	function add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	
	add_action( 'after_setup_theme', 'add_woocommerce_support' );

	//add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

    

    // woocommerce sidebar register
	add_action( 'widgets_init', 'woocommerce_register_sidebars' );
	function woocommerce_register_sidebars() {
		/* Register the 'primary' sidebar. */
		register_sidebar(
			array(
				'id'            => 'woocommerce',
				'name'          => __( 'Woocommerce Sidebar' ),
				'description'   => __( 'A short description of the sidebar.' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}

	//reordering single product page 

	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );

	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 0 );


	/**
	 * Remove WooCommerce breadcrumbs 
	 */
	add_action( 'init', 'my_remove_breadcrumbs' );
	
	function my_remove_breadcrumbs() {
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}

	

	
	



?>