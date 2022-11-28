<?php get_header(); ?>
    
<main style="margin-top: 50px">
    <div class="container">
        <?php the_post();?>
        <h1 style="margin-bottom: 20px"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</main>



<?php get_footer(); ?>