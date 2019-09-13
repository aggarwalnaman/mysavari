<?php
    $logo = get_theme_mod('bc_logo');
    $logoCheck = get_theme_mod('bc_logo_check');
?>
<?php if (!empty($logo)) { ?>
    <div class="cp-masthead__logo <?php echo (($logoCheck) ? 'cp-masthead__logo--border' : ''); ?>">
        <img src="<?php echo ((!empty($logo)) ? esc_url($logo) : esc_url(get_template_directory_uri()).'/img/300x300.png'); ?>">
    </div>
<?php } ?>