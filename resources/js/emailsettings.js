$(document).ready(function() {
    $('.field.first').prepend('<p class="warning">' +
        'These settings are being overridden by the Email Settings plugin. Any changes to this form will have no effect. Please disable the plugin to use this form for your email settings.'
    +'</p><br/>');
});
