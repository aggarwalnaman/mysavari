<div class="cp-blog__posts">
    <div class="cp-blog__title">
        <h3><?php echo esc_html(the_archive_title()); ?></h3>
    </div>
    <div class="cp-blog__content">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
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
            endif;
        ?>
    </div>
</div>