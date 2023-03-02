<?php
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();
	$cart_url = wc_get_cart_url();
    $cartCount = WC()->cart->get_cart_contents_count();
?>

    <div class="basketSidebar--bg"></div>
    <div class="basketSidebar--sidebar">
        <div class="basketSidebar--inner">
            
            <div class="basketSidebar--products">
                <div class="basketSidebar--nav">
                    <span>Twój koszyk</span>
                    <div class="basketSidebar--close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><g data-name="Layer 2"><g data-name="close"><rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"/><path d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"/></g></g></svg>
                    </div>
                </div>

                <?php 
                foreach($items as $item => $values):
                    $_product =  wc_get_product( $values['data']->get_id() ); 
                    $price = get_post_meta($values['product_id'] , '_price', true);
                    $image = wp_get_attachment_url( $_product->get_image_id() );
                ?>
                <div class="basketSidebar--product">
                    <img class="basketSidebar--img" src="<?php echo $image; ?>" alt="<?php echo $_product->get_title(); ?>">
                    <div class="basketSidebar--details">
                        <a class="basketSidebar--name" href="<?php echo $_product->get_permalink(); ?>">
                            <?php echo $_product->get_title(); ?>
                        </a>
                        <div class="basketSidebar--price">
                            <?php echo $values['quantity'] ?> x <?php echo $price; ?> zł 
                        </div>
                    </div>
                    <a class="basketSidebar--deleteLink" href="<?php echo WC()->cart->get_remove_url( $item ) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 172.541 172.541" style="enable-background:new 0 0 172.541 172.541;" xml:space="preserve">
                            <g>
                                <path d="M166.797,25.078h-13.672h-29.971V0H49.388v25.078H19.417H5.744v15h14.806l10,132.463h111.443l10-132.463h14.805V25.078z    M64.388,15h43.766v10.078H64.388V15z M128.083,157.541H44.46L35.592,40.078h13.796h73.766h13.796L128.083,157.541z"/>
                                <rect x="80.271" y="65.693" width="12" height="66.232"/>
                                <rect x="57.271" y="65.693" width="12" height="66.232"/>
                                <rect x="103.271" y="65.693" width="12" height="66.232"/>
                            </g>
                        </svg>
                    </a>  
                </div>
                
                
                <?php endforeach; ?>
                <?php if($cartCount == 0): ?>
                    <h1>Brak produktów w koszyku</h1>
                <?php endif; ?>

            </div>
            <div class="basketSidebar--links">
                <a href="<?php echo esc_url($cart_url); ?>" class="button--blue">Zobacz koszyk</a>
                <a href="<?php echo esc_url(home_url('/')); ?>/zamowienie" class="buttonDark">Zamówienie</a>
            </div>
            
        </div>
        <?php echo do_shortcode('[fibosearch]'); ?>
	</div>
