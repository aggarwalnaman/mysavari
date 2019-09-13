<?php

global $pagenow;

function bc_premium_notice() {
    $display_status = get_option( 'bc-dismiss' );
    if ($display_status) {
        echo '<div class="notice bc-premium-notice is-dismissible"><p>'.esc_html__('Broadcast PRO users get advanced layout settings, advanced schedule settings, unlimited colour schemes, premium support and more! Upgrade to', 'broadcast-lite').' <a href="https://www.streamweasels.com/store/themes/broadcast-pro/?upgrade=true" target="_blank">'.esc_html__('PRO', 'broadcast-lite').'</a> '.esc_html__('for only £29.99', 'broadcast-lite').'</p></div>';
    }
}  

function bc_display_dismissible_admin_notice() {
    echo "Processing Ajax request...";
    update_option( 'bc-dismiss', false );
    wp_die();
}
    
function bc_create_custom_option() {
    update_option( 'bc-dismiss', true );
}

add_action( 'wp_ajax_bc_display_dismissible_admin_notice', 'bc_display_dismissible_admin_notice' );

add_action( 'after_switch_theme', 'bc_create_custom_option' );

add_action( 'admin_notices', 'bc_premium_notice' );