<?php
/*
Template Name: À propos
*/

get_header();

$surtitre = get_field('surtitre');
$titre = get_field('titre');

$bg_header = get_field('bg_header');

$imgTr = get_field('image-transition');
$contentTr = get_field('content-transition');
$ctaTr = get_field('cta-transition');

if(!$bg_header):
    $bg_url = get_template_directory_uri(  ).'/assets/img/bg-default.jpg';
else :
    $bg_header = get_field('bg_header');
    $bg_url = $bg_header['url'];
endif;

$titreDec = get_field('decouverte');
$cta = get_field('cta');

/* Valeurs */

$titreVal   = get_field('titre-valeur');
$intro      = get_field('intro-valeur');
$vals       = get_field('valeurs');
$bgVal      = get_field('bg_valeur');

/* Leader */

$surLead = get_field('surtitre-service');
$titLead = get_field('titre_service');
$imgLead = get_field('image_service');
$txtLead = get_field('texte_service');
$ctaLiP  = get_field('cta_service');

$ctaCtLip = get_field('cta-service-contact');
$statsLead = get_field('stats-service');

/* Generation */

$titGen = get_field('titre_generation');
$txtGen = get_field('texte_generation');
$galGen = get_field('galerie_generation');
$ctaGen = get_field('cta_generation');

/* Responsable */

$titResp = get_field('titre_responsable');
$txtResp = get_field('texte_responsable');
$ctaResp = get_field('cta_responsable');

$imgResp = get_field('image_responsable');
$imgResp_2 = get_field('image_2_responsable');

/* Livraison */

$surLiv = get_field('surtitre_livraison');
$imgLiv = get_field('image_livraison');
$imgLiv_2 = get_field('image_livraison_2');
$titLiv = get_field('titre_livraison');
$txtLiv = get_field('texte_livraison');
$ctaLiv = get_field('cta_livraison');
?>

<section id="header">
    <div class="container">
        <div class="content">
            <?php if($titre): echo $titre; endif;?>
        </div>
    </div>
</section>

<?php get_template_part( 'templates-parts/separator/separator-svg' );?>
<?php get_template_part( 'templates-parts/section-introduction' );?>

<section id="section-valeurs">
    <div class="container columns" id="intro-valeurs">
        <div class="colg"><?php if($titreVal): echo $titreVal;endif;?></div>
        <div class="cold"><?php if($intro): echo $intro;endif;?></div>
    </div>
    <div class="container columns" id="tabs-valeurs">
        <?php foreach($vals as $v):?>
            <div class="tiny-columns">
                <?php echo '<h3>'.$v['libelle'].'</h3>';?>
                <?php echo $v['description'];?>
                <?php if($v['cta']): echo '<a href="'.$v['cta']['url'].'" class="cta">'.$v['cta']['title'].'</a>'; endif;?>
            </div>
        <?php endforeach;?>
    </div>

    <?php if($bgVal):?>
        <div class="block-img section-background" style="url('<?php echo $bgVal['url'];?>');">    </div>
    <?php endif;?>
</section>

<section id="leader">
    <div class="container columns">
        <div class="col-g">
            <?php if($surLead): echo '<h3>'.$surLead.'</h3>'; endif;?>
            <?php if($titLead): echo $titLead; endif;?>
            <?php if($imgLead): echo '<div class="block-img"><img src="'.$imgLead['url'].'" alt="'.$imgLead['name'].'"/></div>'; endif;?>
        </div>

        <div class="col-d">
        <?php if($txtLead): echo $txtLead; endif;?>
        <?php if($ctaLiP): echo '<a href="'.$ctaLiP['url'].'" class="cta">'.$ctaLiP['title'].'</a>'; endif;?>
        </div>
    </div>
    <div class="container">
        <div class="columns statsBlock">
            <?php foreach($statsLead as $st):?>
                <div class="block-stat">
                    <?php echo '<p>'.$st['libelle'].'</p>';?>
                </div>
            <?php endforeach;?>
        </div>
        <?php if($ctaCtLip): echo '<a href="'.$ctaCtLip['url'].'" class="cta">'.$ctaCtLip['title'].'</a>'; endif;?>
    </div>
</section>

<section id="card-news">
    <div class="container columns">
        <div class="col-g">
            <div class="content">
                <?php if($titGen): echo $titGen;endif;?>
                <?php if($txtGen): echo $txtGen;endif;?>

                <?php if($ctaGen):
                    echo '<a href="'.$ctaGen['url'].'" class="cta">'.$ctaGen['title'].'</a>';
                endif;?>
            </div>
        </div>

        <div class="col-d">
            <div class="swiper swiper-generation">
                <div class="swiper-wrapper">
                    <?php if($galGen): foreach($galGen as $gGen):?>
                        <div class="swiper-slide">
                            <?php echo '<img src="'.$gGen['url'].'" alt="'.$gGen['name'].'" />';?>
                        </div>
                    <?php endforeach; endif;?>
                </div>
                <div class="swiper-button-prev swiper-gen-button-prev"></div>
                <div class="swiper-button-next swiper-gen-button-next"></div>
            </div>
        </div>
    </div>
</section>

<section id="croissance">
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

<?php get_template_part( 'templates-parts/section-savoirfaire' );?>

<section id="livraison">
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

<?php get_template_part( 'templates-parts/section-actualites' );?>

<?php get_footer();