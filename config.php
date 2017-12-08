<?php

return [
    // Global settings
    '*' => [
        'emailAddress'            => 'hello@my-domain.co.uk',
        'port'                    => '25',
        // Valid options are 'sendmail', 'smtp', 'pop' or 'gmail'
        'protocol'                => 'smtp',
        'senderName'              => '<senderName>',
        'smtpAuth'                => 1,
        'smtpKeepAlive'           => 0,
        // Valid options are 'none', 'ssl' or 'tls'
        'smtpSecureTransportType' => 'none',
        'template'                => '',
        'timeout'                 => '30'
    ],

    'mailtrap' => [
        'username'                => '<username>',
        'password'                => '<password>',
        'host'                    => 'smtp.mailtrap.io',
        'port'                    => '465',
        'smtpSecureTransportType' => 'tls',
    ],

    'mailgun' => [
        'host'                    => 'smtp.mailgun.org',
        'username'                => 'postmaster@mg.my-domain.co.uk',
        'password'                => '<password>'
    ],

    'live' => [
        'emailAddress'            => 'hello@my-domain.co.uk',
        'username'                => 'hello@my-domain.co.uk',
        'password'                => '<password>',
        'host'                    => 'my-domain.co.uk'
    ]
];
