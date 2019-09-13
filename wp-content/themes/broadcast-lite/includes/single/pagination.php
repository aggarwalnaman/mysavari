<?php
    $prev_link = get_previous_posts_link();
    $next_link = get_next_posts_link();
?>
<?php if (wp_link_pages(array('echo'=>false))) { ?>
    <div class="cp-pagination l-inner l-cf">
        <?php 
            wp_link_pages( array(
                'before'      => '<div class="cp-pagination__wrapper">',
                'after'       => '</div>',
                'link_before' => '<span class="cp-pagination__page">',
                'link_after'  => '</span>',
            ) );
        ?>
    </div>
<?php } ?>