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
    'post_type' => 'jobs'
);

$jobs = new WP_Query($args);

foreach($jobs as $job):
    $permalink = get_permalink( $job->ID );
    $title = get_the_title( $job->ID );?>
    
    <a href="<?php echo $permalink;?>">
        <div class="document_ddl">
            <?php echo '<p>'.$title.'</p>';?>Découvrir
        </div>
    </a>
<?php endforeach;?>

<?php get_template_part( 'templates-parts/contact'); ?>
<?php get_footer(); 