<?php
    $image = get_theme_mod('bc_featured_image');
    $countdown = get_theme_mod('bc_schedule_check');
?>
<section class="cp-masthead">
    <img src="<?php echo ((!empty($image)) ? esc_url($image) : esc_url(get_template_directory_uri()).'/img/1920x1080.png'); ?>">
    <div class="cp-masthead__wrapper">
    
    <?php get_template_part('includes/masthead/logo'); ?>
    
    <?php get_template_part('includes/masthead/countdown'); ?>

    <?php get_template_part('includes/masthead/cta'); ?>
    
    </div>
    <div class="cp-masthead__vignette"></div>
</section>