<?php 

$cttCol1           = get_field('contenu_colonne_1','options');
$liensCol2         = get_field('liens-gîtes_copier','options');

$cttCol2           = get_field('contenu_colonne_2','options');

$cttCol3           = get_field('contenu_colonne_3','options');
$cttCol4           = get_field('contenu_colonne_4','options');
$logo              = get_field('logo_footer','options');

$keywords          = get_field('keywords','options');
$copyright         = get_field('copyright','options');
?>

<footer>
    <div class="container">
        <div class="footer-top">
            <div class="col general-infos">                
                <?php if($logo):?>
                    <div class="logo-footer">
                        <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['title'];?>" />
                    </div>
                <?php endif;?>
                <?php if($cttCol1): echo $cttCol1; endif;?>
            </div>

            <div class="col col-2">
                <ul>
                    <?php if($cttCol2):
                        foreach($cttCol2 as $liCol):
                            echo '<li><a href="'. get_permalink($liCol->ID) .'">'.$liCol->post_title . '</a></li>';
                        endforeach;
                    endif;?>
                </ul>

                <?php 
                if($liensCol2):
                    echo '<ul>';
                    foreach($liensCol2 as $l):?>
                        <li><a href="<?php echo $l->guid;?>"><?php echo $l->post_title;?></a></li>
                    <?php endforeach;
                    echo '</ul>';
                endif;?>
            </div>

            <div class="col rs_footer"><?php if($cttCol3): echo $cttCol3;endif;?></div>
        </div>
    </div>
    <div class="footer_middle">
        <div class="container keywords">
            <?php if($keywords): echo $keywords; endif;?>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container columns desktop">
            <div class="colg"><?php if($copyright): echo $copyright; endif;?></div>
            <div class="cold"><?php wp_nav_menu(array('menu' => 'Menu footer'));?></div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>