<?php 

/* Savoif Faire */

$imgSF          = get_field('galerie-gle-separator','options');
$surtitreSF     = get_field('surtitre-savoirfaire','options');
$titreSF        = get_field('titre-savoirfaire','options');
$textSF         = get_field('texte-savoirfaire','options');

?>

<section id="savoir-faire">
    <div class="container columns">
        <div class="col col-1">
            <?php if($imgSF): echo '<div class="block-img"><img src="'.$imgSF[0]['url'].'" alt="'.$imgSF[0]['name'].'"/></div>'; endif;?>
        </div>
        <div class="col col-2">
            <?php if($surtitreSF): echo '<h3 class="surtitre">'.$surtitreSF.'</h3>'; endif;?>
            <?php if($titreSF): echo $titreSF; endif;?>
            <?php if($textSF): echo $textSF; endif;?>
        </div>
        <div class="col col-3">
            <?php if($imgSF): echo '<div class="block-img"><img src="'.$imgSF[1]['url'].'" alt="'.$imgSF[1]['name'].'"/></div>'; endif;?>
        </div>
    </div>
</section>