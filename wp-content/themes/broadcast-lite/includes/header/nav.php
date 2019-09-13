<?php
    $bcSettings = get_option('bc-companion-settings');
    $username = $bcSettings['field_1_1'];
?>
<nav class="cp-nav l-colour__primary-bg">
    <?php if ($username) { ?>
    <div class="cp-nav__top">
        <div class="cp-nav__title">
            <span class="cp-nav__indicator l-indicator"></span>
            <span class="cp-nav__username">
                <?php echo esc_html($username); ?>
            </span>
        </div>
    </div>
    <div class="cp-nav__middle">
        <div class="cp-nav__offline">
            <span>Offline</span>
        </div>
        <div class="cp-nav__online">
            <div class="cp-nav__game-playing">
                <span class="cp-nav__game-playing--line-1">Online</span>
                <span class="cp-nav__game-playing--line-2">Fortnite</span>                
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="cp-nav__wrapper">
        <?php wp_nav_menu( array('theme_location' => 'main-navigation') ); ?>
    </div>
    <div class="cp-nav__bottom">
        <a href="#" class="button button--watch-now button--modal"><?php esc_html_e('Watch Now', 'broadcast-lite'); ?></a>
    </div>
    <a href="#" class="cp-nav__close--icon">
        <span class="icon-cross"></span>
    </a>
</nav>