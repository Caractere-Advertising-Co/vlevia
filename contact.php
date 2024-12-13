<?php
/*
Template Name: Contact
*/

get_header();

$surtitre = get_field('surtitre-header');
$titre = get_field('titre-header');

$bg_header = get_field('background');

if(!$bg_header):
    $bg_url = get_template_directory_uri(  ).'/assets/img/bg-default.jpg';
else :
    $bg_header = get_field('background');
    $bg_url = $bg_header['url'];
endif;

$imgU = get_field('image-unique');
$contentUniq = get_field('content-unique');
$imgUd = get_field('image-droite-unique');
?>

<header id="header-simple-page" >
    <img src="<?php echo $bg_url;?>" alt="<?php echo $bg_header['title'];?>"/>

    <div class="container">
        <div class="content">
            <span class="subtitle"><?php if($surtitre): echo $surtitre;endif;?></span>
            <?php if($titre): echo $titre; endif;?>
        </div>
    </div>
</header>

<?php get_template_part( 'templates-parts/contact' );?>

<section class="carte-contact">
    <gmp-map center="50.70943069458008,5.8393425941467285" zoom="14" map-id="DEMO_MAP_ID">
        <gmp-advanced-marker position="50.70943069458008,5.8393425941467285" title="My location"></gmp-advanced-marker>
    </gmp-map>

</section>

<?php get_template_part( 'templates-parts/section-citation' );?>

<section id="experience-unique">
    <div class="columns">
        <div class="col-g">
            <div class="img-g from-left">
                <img src="<?php echo $imgU['url'];?>" alt="<?php echo $imgU['title'];?>"/>
            </div>
        </div>
        <div class="col-d">
            <span class="from-right"><?php echo $contentUniq;?></span>
            <div class="img-du from-bottom">
                <img src="<?php echo $imgUd['url'];?>" alt="<?php echo $imgUd['title'];?>" />
            </div>
        </div>
    </div>
</section>

<?php get_footer();
