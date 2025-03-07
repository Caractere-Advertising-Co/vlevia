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

$titrJobs = get_field('titre_listing_jobs');

?>

<header id="header">
    <div class="container">
        <div class="content">
            <?php if($titre): echo '<h1><strong>' . $titre . '</strong></h1>'; endif;?>
        </div>
    </div>
</header>

<?php get_template_part( 'templates-parts/separator/separator-svg' );?>
<?php get_template_part( 'templates-parts/section-introduction' );?>

<?php get_template_part( 'templates-parts/contact'); ?>
<?php get_footer(); 