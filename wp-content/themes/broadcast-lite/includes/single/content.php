<section class="cp-single l-colour__secondary-bg">
    <div class="cp-single__inner l-inner l-cf l-colour__primary-bg">
        <?php if (have_posts()) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <?php if ( '' !== get_the_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <div class="h--main-title-wrapper">
                    <h1 class="entry-title h--main-title"><?php the_title(); ?></h1>
                </div>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <?php get_template_part('includes/single/tags'); ?>
            </article>
        <?php endif; ?>
    </div>
    <?php get_template_part('includes/single/pagination'); ?>
    <div class="cp-single__comments l-inner l-cf l-colour__primary-bg">
        <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
    </div>
</section>