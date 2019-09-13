<section class="cp-blog l-colour__secondary-bg">
    <div class="cp-blog__inner l-inner">
    
        <?php get_template_part('includes/blog/blog-posts', 'archive'); ?>
    
    </div>
    <?php 
        get_template_part('includes/blog/pagination');
        wp_reset_postdata();
    ?>
</section>