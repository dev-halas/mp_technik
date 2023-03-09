<div class="container homeProducts animate fadeIn d-200">
    <div class="title--header">
        <span>POPULARNE</span> 
        <h2>produkty</h2>
    </div>
    <?php
        $homeLoopArgs = array(
            'post_type' => 'product',
            'posts_per_page' => 4
        );

        $homeLoop = new WP_Query( $homeLoopArgs );
        if ( $homeLoop->have_posts() ) { ?>
            <div class="homeProducts--wrapper">
            <?php 
                while ( $homeLoop->have_posts() ) : 

                    $homeLoop->the_post(); 
                    wc_get_template_part( 'content', 'product' ); 

                endwhile; 
            ?>
            </div>
        
        <?php
        } else {
            echo __( 'No products found' );
        }
        wp_reset_postdata();
    ?>
    <div class="homeProducts--more">
        <a href="#" class="buttonDark">Wszytkie produkty</a>
    </div>
</div>