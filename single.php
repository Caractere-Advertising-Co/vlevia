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

<section id="transition-blog">
<div class="imgTr"><img src="<?php if($imgTr): echo $imgTr['url'];endif;?>" alt="<?php if($imgTr):echo $imgTr['title'];endif;?>"/></div>
    <div class="container columns">
        <div class="col-g"></div>
        <div class="col-d">
            <?php if($contentTr): echo $contentTr;endif;?>
            <?php if($ctaTr): echo '<a href="'.$ctaTr['url'].'" class="cta">'.$ctaTr['title'].'</a>';endif;?>
        </div>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-introduction' );?>


<?php get_footer();