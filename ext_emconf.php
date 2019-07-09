<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FE_User Cards',
    'description' => 'An extension to display fe_user as cards.',
    'category' => 'plugin',
    'author' => 'HamburgerJungeJr',
    'author_company' => '',
    'author_email' => '',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.0.0-9.9.99',
            'fluid' => '8.0.0-8.9.99',
            'vhs' => '4.3.0-4.3.99'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'HamburgerJungeJr\\FeUserCards\\' => 'Classes'
        ]
    ],
];
