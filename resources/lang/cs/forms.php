<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'E-mail',
        'username'         => 'Uživatelské jméno',
        'password'         => 'Heslo',
        'site_name'        => 'Název webu',
        'site_domain'      => 'Doména webu',
        'site_timezone'    => 'Vyberte vaše časové pásmo',
        'site_locale'      => 'Vyberte svůj jazyk',
        'enable_google2fa' => 'Povolit dvoufaktorové ověřování Google',
        'cache_driver'     => 'Ovladač cache',
        'session_driver'   => 'Ovladač sezení',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'E-mail',
        'password'      => 'Heslo',
        '2fauth'        => 'Ověřovací kód',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => 'Neplatný token',
        'cookies'       => 'Pro přihlášení je třeba povolit soubory cookie.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Jméno',
        'status'             => 'Stav',
        'component'          => 'Komponenta',
        'message'            => 'Zpráva',
        'message-help'       => 'Můžete také použít Markdown.',
        'scheduled_at'       => 'Na kdy naplánovat údržbu/výpadek?',
        'incident_time'      => 'Kdy k incidentu došlo?',
        'notify_subscribers' => 'Notify Subscribers?',
        'visibility'         => 'Viditelnost incidentu',
        'public'             => 'Viditelné veřejnosti',
        'logged_in_only'     => 'Only visible to logged in users',
        'templates'          => [
            'name'     => 'Jméno',
            'template' => 'Šablona',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Jméno',
        'status'      => 'Stav',
        'group'       => 'Skupina',
        'description' => 'Popis',
        'link'        => 'Odkaz',
        'tags'        => 'Štítky',
        'tags-help'   => 'Oddělené čárkou.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'      => 'Jméno',
            'collapsed' => 'Collapse the group by default?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Jméno',
        'suffix'           => 'Přípona',
        'description'      => 'Popis',
        'description-help' => 'Můžete také použít Markdown.',
        'display-chart'    => 'Zobrazovat graf na stavové stránce?',
        'default-value'    => 'Default Value',
        'calc_type'        => 'Calculation of Metrics',
        'type_sum'         => 'Celkem',
        'type_avg'         => 'Průměr',
        'places'           => 'Decimal Places',
        'default_view'     => 'Default View',

        'points' => [
            'value' => 'Hodnota',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Název webu',
            'site-url'               => 'URL adresa webu',
            'display-graphs'         => 'Zobrazit grafy na stavové stránce?',
            'about-this-page'        => 'O této stránce',
            'days-of-incidents'      => 'Kolik dní incidentů zobrazovat?',
            'banner'                 => 'Obrázek banneru',
            'banner-help'            => 'Doručuje se nenahrávat soubory větší než 930 pixelů na šířku.',
            'subscribers'            => 'Umožnit lidem, aby se přihlašovali k odběru e-mailových upozornění?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics code',
            'analytics_gosquared'    => 'GoSquared Analytics code',
            'analytics_piwik_url'    => 'URL of your Piwik instance (without http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'          => 'Site Timezone',
            'site-locale'            => 'Site Language',
            'date-format'            => 'Date Format',
            'incident-date-format'   => 'Incident Timestamp Format',
        ],
        'security' => [
            'allowed-domains'      => 'Allowed Domains',
            'allowed-domains-help' => 'Oddělené čárkami. Výše uvedené domény jsou ve výchozím nastavení automaticky povoleny.',
        ],
        'stylesheet' => [
            'custom-css' => 'Vlastní šablona stylů',
        ],
        'theme' => [
            'background-color'        => 'Barva pozadí',
            'background-fills'        => 'Background Fills (Components, Incidents, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Barva textu',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (Used for errors)',
            'blues'                   => 'Blue (Used for information)',
            'greens'                  => 'Green (Used for success)',
            'yellows'                 => 'Yellow (Used for alerts)',
            'oranges'                 => 'Orange (Used for notices)',
            'metrics'                 => 'Metrics Fill',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Uživatelské jméno',
        'email'          => 'E-mail',
        'password'       => 'Heslo',
        'api-token'      => 'API Token',
        'api-token-help' => 'Přegenerování vašeho API tokenu zabrání současným aplikacím přistupovat ke Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'User Level',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
        ],
        '2fa' => [
            'help' => 'Zapnutí dvoufaktorového ověřování zvýší zabezpečení vašeho účtu. Budete muset stáhnout <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> nebo podobnou aplikaci pro mobilní zařízení. Po přihlášení budete vyzváni k zadání tokenu vygenerovaného aplikací.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Přidat',
    'save'   => 'Uložit',
    'update' => 'Aktualizovat',
    'create' => 'Vytvořit',
    'edit'   => 'Upravit',
    'delete' => 'Smazat',
    'submit' => 'Potvrdit',
    'cancel' => 'Zrušit',
    'remove' => 'Smazat',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* Volitelné',
];
