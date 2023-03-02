<?php get_header(); ?>

    <main>
        <?php 
            get_template_part('/libs/home/hero');
            get_template_part('/libs/home/homeProducts');
            get_template_part('/libs/home/primaryCategories');
            get_template_part('/libs/home/homeAbout');
            
            get_template_part('/libs/home/logoCarousel');
            get_template_part('/libs/advantages');
        ?>

    </main>

<?php get_footer(); ?>