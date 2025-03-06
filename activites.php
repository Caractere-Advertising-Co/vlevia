<?php
/*
Template Name: Activites
*/

get_header();

$surtitre = get_field('surtitre_introduction');
$titre = get_field('titre');

$intro = get_field('introduction');
$texte_droite = get_field('texte_droite');

$img1 = get_field('image_gauche');
$img2 = get_field('image_droite');

$ctaIntro = get_field('cta_introduction');

$bg_header = get_field('bg_header');

if(!$bg_header):
    $bg_url = get_template_directory_uri(  ).'/assets/img/bg-default.jpg';
else :
    $bg_header = get_field('bg_header');
    $bg_url = $bg_header['url'];
endif;

$titreDec = get_field('decouverte');
$cta = get_field('cta');

$titResp = get_field('titre_responsable');
$txtResp = get_field('texte_responsable');
$ctaResp = get_field('cta_responsable');

$imgResp = get_field('image_responsable');
$imgResp_2 = get_field('image_2_responsable');

$surtitreAct = get_field('surtitre_activites');
$titleActivites = get_field('titre_activites');

$surAct2 = get_field('surtitre_activites_2');
$imgAct2 = get_field('image_activites_2');
$imgAct2 = get_field('image_activites_2');
$titAct2 = get_field('titre_activites_2');
$txtAct2 = get_field('texte_activites_2');
$ctaAct2 = get_field('cta_activites_2');

$surAct3 = get_field('surtitre_activites_3');
$imgAct3 = get_field('image_activites_3');
$imgAct3 = get_field('image_activites_3');
$titAct3 = get_field('titre_activites_3');
$txtAct3 = get_field('texte_activites_3');
$ctaAct3 = get_field('cta_activites_3');

$surLiv = get_field('surtitre_livraison');
$imgLiv = get_field('image_livraison');
$imgLiv_2 = get_field('image_livraison_2');
$titLiv = get_field('titre_livraison');
$txtLiv = get_field('texte_livraison');
$ctaLiv = get_field('cta_livraison');

$citDark = get_field('citation-dark');


$bgActu = get_field('bg_actu','options');

?>

<header id="header-simple-page">
    <?php get_template_part('templates-parts/separator/separator-svg');?>
</header>

<section id="acteur-majeur">
    <div class="container">
        <div class="content">
            <span class="subtitle"><?php if($surtitre): echo $surtitre;endif;?></span>
            <?php if($titre): echo $titre; endif;?>
        </div>
    </div>

    <div class="container columns">
        <div class="colg">
            <?php if($intro): echo $intro; endif;?>
            <?php if($img1): ?>
                <div class="block-img">
                    <img src="<?php echo $img1['url'];?>" alt="<?php echo $img1['name'];?>" />
                </div>
            <?php endif;?>
        </div>
        <div class="cold">
            <?php if($img2): ?>
                <div class="block-img">
                    <img src="<?php echo $img2['url'];?>" alt="<?php echo $img2['name'];?>" />
                </div>
            <?php endif;?>
            <?php if($texte_droite): echo '<div class="txtRight">'.$texte_droite.'</div>'; endif;?>
        </div>
    </div>

    <div class="container">
        <?php if($ctaIntro): echo '<a href="'.$ctaIntro['url'].'" class="cta">'.$ctaIntro['title'].'</a>'; endif;?>
    </div>
</section>

<section id="activites">
    <div class="container">
        <?php
            echo '<h3 class="surtitre">'.$surtitreAct.'</h3>';
            echo $titleActivites;
        ?>
    </div>

    <div class="fullwidth panels">
        <?php if(have_rows('activites')):
            while(have_rows('activites')): the_row();
                $link = get_sub_field('lien');
                $title = get_sub_field('titre');
                $img = get_sub_field('arriere-plan');
            ?>
                <div class="panel" style="background:url('<?php echo $img['url'];?>');">
                    <h4 class="title"><?php echo $title;?></h4>
                    <a href="<?php echo $link['url'];?>">
                        <img src="<?php echo get_bloginfo( 'url'). '/wp-content/themes/vlevia/assets/arrow_right_bottom-8.png';?>" alt="arrow" />
                    </a>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
</section>

<section id="portion-consommateur">
    <div class="container columns">
        <?php if($imgResp):?>
            <div class="block-img">
                <img src="<?php echo $imgResp['url'];?>" alt="<?php echo $imgResp['name'];?>"/>
            </div>
        <?php endif;?>
        
        <div class="texte">
            <?php if($titResp): echo $titResp;endif;?>
            <?php if($txtResp): echo $txtResp; endif;?>
            <?php if($ctaResp): echo '<a href="'.$ctaResp['url'].'" class="cta">'.$ctaResp['title'].'</a>'; endif;?>
        </div>
        
        <?php if($imgResp_2):?>
            <div class="block-img-2">
                <img src="<?php echo $imgResp_2['url'];?>" alt="<?php echo $imgResp_2['name'];?>"/>
            </div>
        <?php endif;?>
    </div>
</section>

<section id="viande-conditionnee">
    <div class="container columns">
        <div class="col-g">
            <?php if($imgAct2):?>
                <div class="block-img">
                    <img src="<?php echo $imgAct2['url'];?>" alt="<?php echo $imgAct2['name'];?>" />
                </div>
            <?php endif;?>
        </div>
        <div class="col-d">
            <?php if($surAct2): echo '<h3>'.$surAct2.'</h3>'; endif;?>
            <?php if($titAct2): echo $titAct2; endif;?>
            <?php if($txtAct2): echo $txtAct2; endif;?>

            <?php if($ctaAct2): echo '<a href="'.$ctaAct2['url'].'" class="cta">'.$ctaAct2['title'].'</a>'; endif;?>
        </div>
    </div>
</section>

<section id="viande-en-carcasse">
    <div class="container columns">
        <div class="col-g">
        <?php if($surAct3): echo '<h3>'.$surAct3.'</h3>'; endif;?>
            <?php if($titAct3): echo $titAct3; endif;?>
            <?php if($txtAct3): echo $txtAct3; endif;?>

            <?php if($ctaAct3): echo '<a href="'.$ctaAct3['url'].'" class="cta">'.$ctaAct3['title'].'</a>'; endif;?>
        </div>
        <div class="col-d">
            <?php if($imgAct3):?>
                <div class="block-img">
                    <img src="<?php echo $imgAct3['url'];?>" alt="<?php echo $imgAct3['name'];?>" />
                </div>
            <?php endif;?>
        </div>
    </div>
</section>

<section id="citation-dark">
    <div class="container">
        <?php if($citDark): echo $citDark; endif;?>
    </div>
</section>

<section id="transport-logistique">
    <div class="container columns">
        <div class="col-g">
            <?php if($imgLiv):?>
                <div class="block-img">
                    <img src="<?php echo $imgLiv['url'];?>" alt="<?php echo $imgLiv['name'];?>" />
                </div>
            <?php endif;?>
            <?php if($imgLiv_2):?>
                <div class="block-img floating-img">
                    <img src="<?php echo $imgLiv_2['url'];?>" alt="<?php echo $imgLiv_2['name'];?>" />
                </div>
            <?php endif;?>
        </div>
        <div class="col-d">
            <?php if($surLiv): echo '<h3>'.$surLiv.'</h3>'; endif;?>
            <?php if($titLiv): echo $titLiv; endif;?>
            <?php if($txtLiv): echo $txtLiv; endif;?>

            <?php if($ctaLiv): echo '<a href="'.$ctaLiv['url'].'" class="cta">'.$ctaLiv['title'].'</a>'; endif;?>
        </div>
    </div>
</section>

<section id="liste-actualites" <?php if($bgActu): echo 'style="background-image:url(\''.$bgActu["url"].'\');"'; endif;?>></section>

<?php get_footer();