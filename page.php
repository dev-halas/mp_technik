<?php 
    get_header();
    the_post(); 
?>
    
<main style="margin-top: 50px">
    <div class="container">
        <?php if(is_cart()): ?>
            <div class="cartHeader">
                <h1>Twój koszyk</h1>
            </div>
        <?php else: ?>
            <h1 style="margin-bottom: 20px"><?php the_title(); ?> </h1>
        <?php endif; ?>

        
        <?php the_content(); ?>
    </div>
</main>



<?php get_footer(); ?>