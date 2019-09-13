<?php
function broadcast_get_css() {
ob_start();

$bc_colour_theme = get_theme_mod( 'bc_colour_theme', 'dark' );
if ( ! empty( $bc_colour_theme ) ) {
    if ($bc_colour_theme == 'dark') {
        $primaryBgColour = '#202020';
        $secondaryBgColour = '#393939';
        $tertiaryBgColour = '#ECECEC';
        $textColour = '#EFEFEF';
    }
    if ($bc_colour_theme == 'light') {
        $primaryBgColour = '#ECECEC';
        $secondaryBgColour = '#F8F8F8';
        $tertiaryBgColour = '#FFF';
        $textColour = '#202020';
    }
  ?>
    .l-colour__primary-bg {
        background: <?php echo esc_attr($primaryBgColour); ?>;
    }
    .l-colour__secondary-bg {
        background: <?php echo esc_attr($secondaryBgColour); ?>;
    }
    .l-colour__tertiary-bg {
        background: <?php echo esc_attr($tertiaryBgColour); ?>;
    }
    body, button, input, select, textarea {
        color: <?php echo esc_attr($textColour); ?>;
    }
    cite, dl, ol, ul {
        color: <?php echo esc_attr($textColour); ?>;
    }
    table, address, pre {
        color: <?php echo esc_attr($textColour); ?>;
    }
    .comment-body {
        color: <?php echo esc_attr($textColour); ?>;
    }
    .h--main-title {
        color: <?php echo esc_attr($textColour); ?>;
    }
    .h--main-title:before {
        background: <?php echo esc_attr($textColour); ?>;
    }
    .cp-blog__title h3 {
        color: <?php echo esc_attr($textColour); ?>;
    }
    .cp-single__comments-title {
        color: <?php echo esc_attr($textColour); ?>;
    }
    .cp-single__comments-title:before {
        background: <?php echo esc_attr($textColour); ?>;
    }
    .cp-nav__close--icon span {
        color: <?php echo esc_attr($textColour); ?>;
    }    
    .cp-nav__wrapper>ul {
        border-color: <?php echo esc_attr($textColour); ?>;
    }
    #comment, #author, #email {
        border-color: <?php echo esc_attr($textColour); ?>;
    }
    @media only screen and (max-width: 767px) {
        .cp-masthead__countdown {
            background: <?php echo esc_attr($primaryBgColour); ?>;
        }
    }
  <?php
}

$css = ob_get_clean();
return $css;
}