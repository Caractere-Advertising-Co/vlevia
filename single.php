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

<?php 

$args = array(
    'post_type' => 'job'
);

$jobs = new WP_Query($args);

foreach($jobs as $job):
    var_dump($job);
endforeach;?>

<?php get_template_part( 'templates-parts/contact'); ?>
<?php get_footer(); 