<?php
    $scheduleCheck = get_theme_mod('bc_schedule_check');
    $schedule = get_theme_mod('bc_schedule');
?>
<?php if ($scheduleCheck) { ?>
    <div class="cp-masthead__countdown">
        <div class="cp-masthead__countdown-title"><?php esc_html_e('Stream Starts In:', 'broadcast-lite'); ?></div>
        <div class="cp-masthead__countdown-wrapper"><?php echo esc_html($schedule); ?><?php echo esc_html(WpDateTimeZone::getWpTimezone()->getName()); ?></div>
    </div>
<?php } ?>