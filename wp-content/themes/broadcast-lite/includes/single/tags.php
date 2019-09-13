<?php 
    $categories = get_the_category_list();
    $tags = get_the_tag_list();
?>

<?php if ($categories || $tags) { ?>
    <footer class="entry-footer">
        <?php if ($categories) { ?>
            <div class="cp-single__meta">
                <span class="cp-single__meta-title"><?php esc_html_e('Categories:', 'broadcast-lite'); ?></span>
                <?php echo wp_kses_post(get_the_category_list()); ?>
            </div>
        <?php } ?>
        <?php if ($tags) { ?>
            <div class="cp-single__meta">
                <span class="cp-single__meta-title"><?php esc_html_e('Tags:', 'broadcast-lite'); ?></span>
                <?php echo wp_kses_post(get_the_tag_list('<ul class="post-tags"><li>','</li><li>','</li></ul>')); ?>
            </div>
        <?php } ?>
    </footer>
<?php } ?>