<?php
defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['\\TYPO3\\CMS\\Core\\Utility\\CsvUtility'] = array(
    'className' => 'Karatbars\\KaratbarsFeusercards\\Xclass\\Utility\\CsvUtility'
);


call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Karatbars.KaratbarsFeusercards',
            'MultipleFeUserCards',
            [
                'FeUserCards' => 'multipleFeUserCards',
            ],
            // non-cacheable actions
            [
                'FeUsercards' => '',
            ]
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Karatbars.KaratbarsFeusercards',
            'SingleFeUserCard',
            [
                'FeUserCards' => 'singleFeUserCard',
            ],
            // non-cacheable actions
            [
                'FeUsercards' => '',
            ]
        );
    }
);