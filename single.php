<?php
/*
Template Name: Simple-page
Template Post Type: post, page
*/

get_header();

$surtitre = get_field('surtitre');
$titre = get_field('titre');

$imgTr = get_field('image-transition');
$contentTr = get_field('content-transition');
$ctaTr = get_field('cta-transition');

?>

<header id="header">
    <div class="container">
        <div class="content">
            <?php if($titre): echo $titre; endif;?>
        </div>
    </div>
</header>

<?php get_template_part( 'templates-parts/separator/separator-svg' );?>
<?php get_template_part( 'templates-parts/section-introduction' );?>


<section id="presa_jobs">
    <div class="container">
        <div class="content_service">
            <?php 

            $args = array(
                'post_type' => 'jobs',
                'post_status' => 'publish'
            );

            $query = new WP_Query($args);

            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                    $title = get_the_title();
                    $permalink = get_permalink( );

                    ?>
                <a href="<?php echo $permalink;?>">
                        <div class="document_ddl">
                            <?php echo '<p>'.$title.'</p>';?>
                            <img src="<?php echo get_bloginfo( 'url'). '/wp-content/themes/vlevia/assets/images/arrow_right_bottom-8.png';?>" alt="arrow" />
                        </div>
                    </a>
                <?php endwhile;
            endif;?>
        </div>
    </div>
</section>

<?php get_template_part( 'templates-parts/contact'); ?>
<?php get_footer(); 