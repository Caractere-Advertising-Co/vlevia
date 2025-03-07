<?php

/*
Template Name: Jobs
Template Post Type: Jobs, Job, job, jobs
*/

get_header();

$titre        = get_field('titre');
$content      = get_field('contenu');

$image        = get_field('image'); 
$cta          = get_field('cta');

$titroffre    = get_field('titre_offre');
$contentOffre = get_field('contenu_offre');

$contact      = get_field('contact');

$titPos = get_field('titre_postuler');?>

<header id="header-simple-page">
    <?php get_template_part('templates-parts/separator/separator-svg');?>
</header>

<section id="simple-page">
    <div class="container">
        <div class="colg">
            <div class="intro from-bottom">
                <?php if($titre) : echo $titre;endif;?>
            </div>
        </div>
        <div class="cold">
            <div class="intro from-bottom"><?php if($content) : echo $content;endif;?></div>
        </div>
    </div>
</section>

<section id="section_bleue">
    <div class="container">
        <div class="cold from-right">
            <div class="title titlelvl2">
                <?php if($titroffre): echo $titroffre; endif;?>
            </div>
            <div class="content entry-content content-listing">
                <?php if($contentOffre): echo $contentOffre; endif;?> 
            </div>
        </div>
    </div>
</section>

<section id="outro">
    <div class="container">
        <div class="colg">
            <?php if($titPos): echo $titPos; endif;?>
           
        </div>
        
        <div class="cold">
            <?php if($contact): echo $contact; endif;?>
        </div>
    </div>
</section>

<?php get_footer();

