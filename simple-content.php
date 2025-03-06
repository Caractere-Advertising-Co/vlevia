<?php
/*
Template Name: Simple-content
*/

get_header();?>

<header id="header-simple-page">
    <?php get_template_part('templates-parts/separator/separator-svg');?>
</header>


<section id="simple-content">
    <div class="container">
        <?php the_content();?>
    </div>
</section>


<?php get_footer();