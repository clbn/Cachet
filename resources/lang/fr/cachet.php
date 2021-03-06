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
    // Components
    'components' => [
        'status' => [
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerer Ausfall',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Aucun incident signalé.',
        'past'          => 'Incidents antérieurs',
        'previous_week' => 'Semaine précédente',
        'next_week'     => 'Semaine suivante',
        'none'          => 'Aucun incident signalé.',
        'scheduled'     => 'Geplante Wartungen',
        'scheduled_at'  => ', geplant :timestamp',
        'status'        => [
            0 => 'Geplant', // TODO: Hopefully remove this.
            1 => 'Untersuchungen laufen',
            2 => 'Identifiziert',
            3 => 'Unter Beobachtung',
            4 => 'Behoben',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel neu generieren',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonnez-vous pour obtenir les dernières mises à jour.',
        'button'    => 'Abonnieren',
        'email'     => [
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'unsubscribe'        => 'Désinscription des mises à jour par courriel.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'            => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.\n:link\nDanke, :app_name",
                'html-preheader' => 'Bitte bestätigen Sie Ihre E-Mail-Abonnement zu :app_name Status-Aktualisierungen.',
                'html'           => '<p>Bestätigen Sie bitte Ihr E-Mail-Abonnement für :app_name Statusaktualisierungen.</p><p><a href=":link">:link</a></p><p>Danke, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Neue Wartung wurde für :app_name geplant.\nDanke, :app_name",
                'html-preheader' => 'Neue Wartung wurde für :app_name geplant.',
                'html'           => '<p>Neue Wartung wurde für :app_name geplant.</p>',
            ],
            'incident' => [
                'text'           => "Ein neuer Vorfall wurde auf :app_name berichtet.\nDanke, :app_name",
                'html-preheader' => 'Ein neuer Vorfall wurde über :app_name berichtet.',
                'html'           => '<p>Ein neuer Vorfall wurde über :app_name berichtet.</p> <p>Danke, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Vous avez été invité à la page de statut de l'équipe :app_name , veuillez suivre le lien suivant pour vous inscire \n:link\nMerci, :app_name",
                'html-preheader' => 'Vous avez été invité à rejoindre l\'équipe :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Inscription',
        'username' => 'Nom d\'utilisateur',
        'email'    => 'Adresse email',
        'password' => 'Mot de passe ',
        'success'  => 'Votre compte a été créé.',
        'failure'  => 'Un problème est survenu lors de votre inscription.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates?',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll receive emails for this component too.',
            'button' => 'Abonnieren',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page est propulsé par <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'À propos du site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
