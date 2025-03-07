<?php
/*
Template Name: Contact
*/

get_header();

$titre = get_field('titre-header');

$form = get_field('formulaire');

/* Sites exploitation */

$titrExploi = get_field('titre_exploitation');
$sitesExploi = get_field('sites_exploitation');
$imgCarte = get_field('image_carte');
?>



<section id="header">
    <div class="container">
        <div class="content">
            <?php if($titre): echo $titre; endif;?>
        </div>
    </div>
</section>
<?php get_template_part('templates-parts/separator/separator-svg') ;?>

<section id="formulaire">
    <div class="container"><?php if($form): echo do_shortcode($form); endif;?></div>
</section>

<section id="sites-exploitations">
    <div class="container">
        <?php if($titrExploi): echo $titrExploi;endif;?>
    </div>

    <div class="container columns">
        <div class="col-g">
            <?php if($sitesExploi):
                foreach($sitesExploi as $sites):
                    echo '<div class="site">'.$sites['texte_site_exploitation'].'</div>';
                endforeach;
            endif;?>
        </div>

        <div class="block-img nomobile">
            <img src="<?php echo $imgCarte['url'];?>" alt="<?php echo $imgCarte['name'];?>"/>
            <?php foreach($sitesExploi as $sites):?>
                <span style="left:<?php echo $sites['coordonnees_left']['desktop'];?>px; top: <?php echo $sites['coordonnees_top']['desktop'];?>px;"></span>
            <?php endforeach;?>
        </div>

        <div class="block-img nodesktop">
            <img src="<?php echo $imgCarte['url'];?>" alt="<?php echo $imgCarte['name'];?>"/>
            <?php foreach($sitesExploi as $sites):?>
                <span style="left:<?php echo $sites['coordonnees_left']['mobile'];?>px; top: <?php echo $sites['coordonnees_top']['mobile'];?>px;"></span>
            <?php endforeach;?>
        </div>
    </div>
</section>

<?php 

get_template_part( 'templates-parts/section-citation' );
get_footer();
