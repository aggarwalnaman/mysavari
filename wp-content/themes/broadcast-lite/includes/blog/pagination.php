<?php
    $big = 999999999;
    $args = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
    );
?>
    <div class="cp-pagination l-inner l-cf">
        <div class="cp-pagination__wrapper">
            <?php echo wp_kses_post(paginate_links( $args )); ?>
        </div>
    </div>