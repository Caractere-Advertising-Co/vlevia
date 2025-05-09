<?php

$thmb = get_the_post_thumbnail_url();
$titre = get_field('titre');
$intro = get_field('introduction');

?>

<div class="card_article">
    <div class="miniature">
        <img src="<?php echo $thmb;?>"/>
    </div>

    <div class="txt">
        <?php if($titre): echo '<h3>' .$titre. '</h3>'; endif;?>
        <?php if($intro): echo strlen($intro) > 100 ? '<p>' . substr(strip_tags($intro),0,100).'...</p>' : '<p>' . strip_tags($intro) . '</p>';endif;?>

        <a href="<?php echo the_permalink( );?>" class="cta-border">Lire</a>
    </div>
</div>
