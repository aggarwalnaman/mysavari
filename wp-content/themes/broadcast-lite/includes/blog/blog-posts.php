<?php
    $args = array('post_type'=> 'post');
    $blog_query = new WP_Query( $args );
?>
<div class="cp-blog__posts cp-blog__posts--full-width">
    <div class="cp-blog__title">
        <h3><?php esc_html_e('Blog Posts', 'broadcast-lite'); ?></h3>
    </div>
    <div class="cp-blog__content">
        <?php
            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                    echo '<div class="cp-blog__post l-colour__primary-bg">';
                        echo '<div class="cp-blog__post-title" style="color:#7550ba">';
                            echo get_the_title();
                        echo '</div>';
                        echo '<div class="cp-blog__post-author">';
                            echo 'By '.get_the_author();
                        echo '</div>';
                        echo '<div class="cp-blog__post-content">';
                            the_excerpt();
                        echo '</div>';
                        echo '<div class="cp-blog__post-cta">';
                            echo '<a class="button" href="'.esc_url(get_the_permalink()).'">Read More</a>';
                        echo '</div>';
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
</div>