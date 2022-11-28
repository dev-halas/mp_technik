<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
	<?php 
		$price_netto = $product->get_price_html(); 
	 	$price_brutto = woocommerce_price($product->get_price_including_tax());
	?>
	<div class="productPrice--netto">
		<?php echo $price_netto; ?> <small>netto</small>
	</div>
	<div class="productPrice--brutto">
		<?php echo $price_brutto; ?> <small>brutto</small>
	</div>	
</p>

