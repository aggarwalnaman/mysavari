<?php
    $bcSettings = get_option('bc-companion-settings');
    $username = $bcSettings['field_1_1'];
?>
<div class="cp-header__middle">
    <?php if ($username) { ?>
        <div class="cp-header__offline">
            <span class="cp-header__middle--line-1"><?php esc_html_e('Offline', 'broadcast-lite'); ?></span>
        </div>
        <div class="cp-header__online">
            <div class="cp-header__game-playing">
                <span class="cp-header__middle--line-1">Online</span>
                <span class="cp-header__middle--line-2"></span>                
            </div>
            <div class="cp-header__viewers">
                <span class="cp-header__middle--line-1">Viewers</span>
                <span class="cp-header__middle--line-2"></span>                          
            </div>
        </div>
    <?php } ?>
</div>