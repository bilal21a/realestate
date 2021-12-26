$(document).ready(function () {
    $(document).on('change', '#type_id', event => {
        if ($('#type_id').children('option:selected').data('code') == 'rent') {
            $('#period').closest('.period-form-group').removeClass('hidden').fadeIn();
        } else {
            $('#period').closest('.period-form-group').addClass('hidden').fadeOut();
        }
    });

    $(document).on('change', '#never_expired', event => {
        if ($(event.currentTarget).is(':checked') === true) {
            $('#auto_renew').closest('.auto-renew-form-group').addClass('hidden').fadeOut();
        } else {
            $('#auto_renew').closest('.auto-renew-form-group').removeClass('hidden').fadeIn();
        }
    });
});

