<?php
    $bcSettings = get_option('bc-companion-settings');
    $username = $bcSettings['field_1_1'];
?>
<div class="cp-header__title">
    <?php if ($username) { ?>
        <span class="cp-header__indicator l-indicator"></span>
        <span class="cp-header__username">
            <?php echo esc_html($username); ?>
        </span>
    <?php } ?>
</div>