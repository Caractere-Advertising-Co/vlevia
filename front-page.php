<?php
/* Template Name: accueil */

get_header();

$cta  = get_field('liens');
$cta2 = get_field('cta_2');

/* Section Valeurs */
$txtVal         = get_field('texte_valeurs');
$ctaVal         = get_field('cta_valeurs');

$imgVal_1       = get_field('image_1');
$imgVal_2       = get_field('image_2');
$videoVal       = get_field('video');

/* Big Text */
$bigText        = get_field('big_text');

/* Menu section dark */

$galerie        = get_field('galerie-menu');

/* Footer */
$bgActu         = get_field('bg_actu','options');

?>

<section id="hero-container" >
    <div class="swiper swiper-hero">
        <div class="swiper-wrapper">
            <?php if(have_rows('slides')):
                while(have_rows('slides')) : the_row();
                    $bgHeader = get_sub_field('background-hero');?>
                    <div class="swiper-slide" <?php if($bgHeader): echo 'style="background-image:url(\''.$bgHeader["url"].'\');"'; endif;?>></div>
                <?php endwhile;
            endif;?>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <div class="content">
        <?php echo get_field('titre');?>
            <div class="block-cta">
                <?php if($cta):?><a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a><?php endif;?>
                <?php if($cta2):?><a href="<?php echo $cta2['url'];?>" class="cta-border"><?php echo $cta2['title'];?></a><?php endif;?>
            </div>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-introduction');?>


<section id="grid-category-product">
    <div class="container columns">
        <?php if(have_rows('grid-category')):
            while(have_rows('grid-category')): the_row();
                $img   = get_sub_field('img_cat');
                $link  = get_sub_field('link_cat');?>

                <a href="<?php echo $link['url'];?>" class="card-category">
                    <img src="<?php echo $img['url'];?>" alt="<?php echo $img['name'];?>" />
                    <div class="title_cat">
                        <h4><?php echo $link['title'];?></h4>
                    </div>
                </a>
            <?php endwhile;
            endif;?>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-citation' );?>

<section id="grid-illustration-category">
    <div class="container columns">
        <?php if(have_rows('grid-illustration')):
            while(have_rows('grid-illustration')): the_row();
                $img   = get_sub_field('img_ilu');
                $link  = get_sub_field('link_ilu');?>

                <a href="<?php echo $link['url'];?>" class="card-category">
                    <img src="<?php echo $img['url'];?>" alt="<?php echo $img['name'];?>" />
                    <div class="title_ilu">
                        <p><?php echo $link['title'];?></p>
                    </div>
                </a>
            <?php endwhile;
        endif;?>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-savoirfaire' );?>

<section id="menu-section-dark">
    <div class="container columns menu-list">
        <?php if(have_rows('categories_menu')):
            while(have_rows('categories_menu')): the_row();
                $link = get_sub_field('lien');
                $img  = get_sub_field('image-lien');
            ?>
                <a class="item-cat-menu" href="<?php echo $link['url'];?>"><?php echo $link['title'];?>
                    <?php if($img): echo '<div class="hover-img-cat"><img src="'.$img['url'].'" alt="" /></div>'; endif;?>
                </a>
            <?php endwhile;
        endif;?>
    </div>
</section>

<section id="galerie-menu">
    <div class="container galerie">
        <?php if($galerie):?>
            <div class="swiper swiper-galerie">
                <div class="swiper-wrapper">
                    <?php foreach($galerie as $g):?>
                        <div class="swiper-slide">
                            <img src="<?php echo $g['url'];?>" alt="<?php echo $g['title'];?>"/>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>

            <div class="swiper-button-prev swiper-galerie-button-prev"></div>
            <div class="swiper-button-next swiper-galerie-button-next"></div>

            <div class="swiper-scrollbar"></div>

        <?php endif;?>
    </div>
</section>

<section id="nos-valeurs">
    <div class="container columns">
        <div class="colg">
            <?php if($txtVal): echo $txtVal; endif;?>
            <?php if($ctaVal): echo '<a href="'.$ctaVal['url'].'" class="cta">'.$ctaVal['title'].'</a>'; endif;?>
            
            <?php if($imgVal_1):?>
                <div class="block-img">
                    <img src="<?php echo $imgVal_1['url'];?>" alt="<?php echo $imgVal_1['name'];?>"/>
                </div>
            <?php endif;?>
        </div>
        <div class="cold">
        <?php if($imgVal_2):?>
                <div class="block-img">
                    <img src="<?php echo $imgVal_2['url'];?>" alt="<?php echo $imgVal_2['name'];?>"/>
                </div>
            <?php endif;?>
        </div>
    </div>

    <div class="container content-video">
        <?php if($videoVal):?>
            <video controls><source src="<?php echo $videoVal['url'];?>" type="video/mp4" /></video>
        <?php endif;?>
    </div>
</section>

<section id="big-text" <?php if($bgActu): echo 'style="background-image:url(\''.$bgActu["url"].'\');"'; endif;?>>
    <?php if($bigText): ?>
        <div class="marquee-left">
            <h2><?php echo $bigText;?></h2>
        </div>
        <div class="marquee-right">
            <h3><?php echo $bigText;?></h3>
        </div>
    <?php endif;?>
</section>

<?php get_footer();?>