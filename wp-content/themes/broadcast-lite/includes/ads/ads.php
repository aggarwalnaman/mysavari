<?php
    $ad_1_image = get_theme_mod('bc_affiliate1_image');
    $ad_1_text = get_theme_mod('bc_affiliate1_link');
    $ad_2_image = get_theme_mod('bc_affiliate2_image');
    $ad_2_text = get_theme_mod('bc_affiliate2_link');
    $ad_3_image = get_theme_mod('bc_affiliate3_image');
    $ad_3_text = get_theme_mod('bc_affiliate3_link');
    $hide_ads = false;
    if (($ad_1_image == '') && ($ad_2_image == '') && ($ad_3_image == '')) {
        $hide_ads = true;
    }
?>
<section class="cp-affiliates <?php if ($hide_ads) echo 'cp-affiliates--hide'; ?> l-colour__tertiary-bg">
    <div class="cp-affiliates__inner l-inner l-cf">
        <div class="cp-affiliates__title h--main-title-wrapper">
            <h3 class="h--main-title"><?php esc_html_e('Affiliates', 'broadcast-lite'); ?></h3>
        </div>
        <div class="cp-affiliates__wrapper">
            <?php if ($ad_1_image != '') { ?>
                <a href="<?php echo esc_url($ad_1_text); ?>">
                    <img src="<?php echo esc_url($ad_1_image); ?>">
                </a>
            <?php } ?>
            <?php if ($ad_2_image != '') { ?>
                <a href="<?php echo esc_url($ad_2_text); ?>">
                    <img src="<?php echo esc_url($ad_2_image); ?>">
                </a>
            <?php } ?>
            <?php if ($ad_3_image != '') { ?>
                <a href="<?php echo esc_url($ad_3_text); ?>">
                    <img src="<?php echo esc_url($ad_3_image); ?>">
                </a>
            <?php } ?>
        </div>
    </div>
</section>