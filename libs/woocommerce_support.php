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




/**
 * @snippet       Show Categories Again @ Single Product Page - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WC 3.8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

	add_action( 'woocommerce_single_product_summary', 'show_categories_single_product', 0 );
	
	function show_categories_single_product() {
		global $product;
		?>
			<div class="product_meta">
				<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?> 
			</div>
		<?php
	}

	/**
	 * Remove WooCommerce breadcrumbs 
	 */
	add_action( 'init', 'remove_breadcrumbs' );
	
	function remove_breadcrumbs() {
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}


	//Woocommerce clear cart url
	add_action( 'init', 'woocommerce_clear_cart_url' );
	function woocommerce_clear_cart_url() {
		if ( isset( $_GET['clear-cart'] ) ) {
			WC()->cart->empty_cart();
		}
	}

	

?>