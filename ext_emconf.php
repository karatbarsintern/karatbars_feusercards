<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Karatbars FE_User Cards',
    'description' => 'Fork of HamburgerJungeJr/fe_user_cards 1.3.0 to display fe_user as cards but including composer support.',
    'category' => 'plugin',
    'author' => 'Oliver Kurzer',
    'author_company' => '',
    'author_email' => 'oliver.kurzer@karatbars.com',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '2.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.0.0-9.9.99',
            'fluid' => '8.0.0-8.9.99',
            'vhs' => '4.3.0-4.3.99'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'Karatbars\\KaratbarsFeusercards\\' => 'Classes'
        ]
    ],
];
