<?php
/* Template Name: accueil */

get_header();

$bgHeader       = get_field('background-hero');

/* Section Valeurs */
$txtVal         = get_field('texte_valeurs');
$ctaVal         = get_field('cta_valeurs');

$imgVal_1       = get_field('image_1');
$imgVal_2       = get_field('image_2');
$videoVal       = get_field('video');

/* Big Text */
$bigText        = get_field('big_text');

/* Menu section dark */

$menu           = get_field('categories_menu');
$galerie        = get_field('galerie-menu');
?>

<section id="hero-container" <?php if($bgHeader): echo 'style="background-image:url(\''.$bgHeader["url"].'\');"'; endif;?>>
    <div class="swiper swiper-hero">
        <div class="swiper-wrapper">
            <?php if(have_rows('slides')):
                while(have_rows('slides')) : the_row();?>
                    <?php $cta  = get_sub_field('liens');?>
                    <?php $cta2 = get_sub_field('cta_2');?>

                    <div class="swiper-slide">
                        <div class="content">
                            <?php echo get_sub_field('titre');?>
                            <div class="block-cta">
                                <?php if($cta):?><a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a><?php endif;?>
                                <?php if($cta2):?><a href="<?php echo $cta2['url'];?>" class="cta-border"><?php echo $cta2['title'];?></a><?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            endif;?>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</section>

<?php get_template_part( 'templates-parts/section-introduction');?>
<?php get_template_part( 'templates-parts/section-citation' );?>

<section id="nos-valeurs">
    <div class="container columns">
        <div class="colg">
            <?php if($txtVal): echo $txtVal; endif;?>
            <?php if($ctaVal): echo '<a href="'.$ctaVal['url'].'">'.$cta['title'].'</a>'; endif;?>
            
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

<section id="big-text">
    <?php if($bigText): ?>
        <div class="marquee-left">
            <h2><?php echo $bigText;?></h2>
        </div>
        <div class="marquee-right">
            <h3><?php echo $bigText;?></h3>
        </div>
    <?php endif;?>
</section>

<?php get_template_part( 'templates-parts/section-savoirfaire' );?>

<section id="menu-section-dark">
    <div class="container columns menu-list">
        <?php if(have_rows($menu)):
            while(have_rows($menu)): the_row();
                $link = get_sub_field('lien');
                
                var_dump($link);?>
                <a href="<?php echo $link['url'];?>"><?php echo $link['name'];?></a>
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

<?php get_template_part( 'templates-parts/section-actualites' );?>  

<?php get_footer();?>