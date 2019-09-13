<?php
    $instagram = get_theme_mod('bc_instagram');
    $facebook = get_theme_mod('bc_facebook');
    $twitch = get_theme_mod('bc_twitch');
    $twitter = get_theme_mod('bc_twitter');
    $google = get_theme_mod('bc_google');
    $youtube = get_theme_mod('bc_youtube');
    $mixer = get_theme_mod('bc_mixer');
    $discord = get_theme_mod('bc_discord');    
    $tumblr = get_theme_mod('bc_tumblr');   
    $linkedin = get_theme_mod('bc_linkedin');    
    $pinterest = get_theme_mod('bc_pinterest');
?>
<div class="cp-footer__social">
    <?php if ($instagram != '') { ?><a href="<?php echo esc_url($instagram); ?>"><div class="icon-instagram"></div></a><?php }; ?>
    <?php if ($facebook != '') { ?><a href="<?php echo esc_url($facebook); ?>"><div class="icon-facebook"></div></a><?php }; ?>
    <?php if ($twitter != '') { ?><a href="<?php echo esc_url($twitter); ?>"><div class="icon-twitter"></div></a><?php }; ?>
    <?php if ($twitch != '') { ?><a href="<?php echo esc_url($twitch); ?>"><div class="icon-twitch"></div></a><?php }; ?>
    <?php if ($mixer != '') { ?><a href="<?php echo esc_url($mixer); ?>"><div class="icon-mixer"></div></a><?php }; ?>
    <?php if ($google != '') { ?><a href="<?php echo esc_url($google); ?>"><div class="icon-google-plus"></div></a><?php }; ?>
    <?php if ($youtube != '') { ?><a href="<?php echo esc_url($youtube); ?>"><div class="icon-youtube"></div></a><?php }; ?>
    <?php if ($discord != '') { ?><a href="<?php echo esc_url($discord); ?>"><div class="icon-discord"></div></a><?php }; ?>
    <?php if ($tumblr != '') { ?><a href="<?php echo esc_url($tumblr); ?>"><div class="icon-tumblr"></div></a><?php }; ?>
    <?php if ($linkedin != '') { ?><a href="<?php echo esc_url($linkedin); ?>"><div class="icon-linkedin2"></div></a><?php }; ?>
    <?php if ($pinterest != '') { ?><a href="<?php echo esc_url($pinterest); ?>"><div class="icon-pinterest2"></div></a><?php }; ?>
</div>