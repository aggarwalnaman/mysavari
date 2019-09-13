<?php
add_filter( 'body_class', 'countdown_class' );

function countdown_class( $classes ) {
    if (get_theme_mod('bc_schedule_check')) {
        $classes[] = 'countdown';
    } else {
        $classes[] = 'no-countdown';
    }
    return $classes;
};