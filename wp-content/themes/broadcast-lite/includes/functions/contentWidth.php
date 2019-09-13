<?php
// Set the content width
function broadcast_content_width() {
    if ( ! isset( $content_width ) ) {
        $content_width = 1380;
    }
}

add_action( 'template_redirect', 'broadcast_content_width', 0 );