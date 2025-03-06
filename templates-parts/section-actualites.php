<?php

/* Actualités */

$titre      = get_field('titre-actus','options');
$intro      = get_field('intro-actus','options');
$bgActu     = get_field('bg_actu','options');
$ctaActus   = get_field('cta-actus','options');

?>

<section id="intro-actualites">
    <div class="container columns">
        <div class="colg"><?php if($titre): echo $titre;endif;?></div>
        <div class="cold"><?php if($intro): echo $intro;endif;?></div>
    </div>
</section>

<section id="liste-actualites" <?php if($bgActu): echo 'style="background-image:url(\''.$bgActu["url"].'\');"'; endif;?>>
    <div class="container columns">
        <div class="grid_articles">
            <?php 
            $args = array(
                "post_type" => "post",
                "posts_per_page" => 3
            );

            $news = new WP_Query($args);

            if($news->have_posts()):
                while($news->have_posts()): $news->the_post();
                    get_template_part('templates-parts/blog/card-blog');
                endwhile;
            endif;

            wp_reset_postdata();?>
        </div>
    </div>
    <div class="container">

        <?php if($ctaActus): echo '<a href="'.$ctaActus['url'].'" class="cta cta-actus">'.$ctaActus['title'].'</a>';endif;?>
    </div>
</section>