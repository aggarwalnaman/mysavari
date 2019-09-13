<div class="cp-intro__content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php get_template_part('includes/intro/title'); ?>
         
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <div class="entry-content">

                <?php the_content(); ?>

            </div>

        </article>
          
    <?php endwhile; endif; ?>
    
    <span class="cf"></span>
    
</div>