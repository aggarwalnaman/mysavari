jQuery(document).ready(function($) {
    $(document).on('click', '.bc-premium-notice', function( event ) {
        data = {
            action : 'bc_display_dismissible_admin_notice',
        };
 
    $.post(ajaxurl, data, function (response) {
            console.log(response, 'DONE!');
        });
    });
});