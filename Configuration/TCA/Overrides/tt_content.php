<?php
    defined('TYPO3_MODE') or die();
    $_EXTKEY = $GLOBALS['_EXTKEY'] = 'karatbars_feusercards';
    $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
    $pluginSignatureSimple = strtolower($extensionName) . '_simplefeusercard';
    $pluginSignatureSingle = strtolower($extensionName) . '_singlefeusercard';
    $pluginSignatureMultiple = strtolower($extensionName) . '_multiplefeusercards';

    $pluginTitleSimple = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_be.xlf:karatbars_feusercards.simple_karatbars_feusercard_title';
    $pluginTitleSingle = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_be.xlf:karatbars_feusercards.single_karatbars_feusercard_title';
    $pluginTitleMultiple = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_be.xlf:karatbars_feusercards.multiple_karatbars_feusercards_title';

    $pluginIcon = 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/Extension.png';
    $pluginType = 'list_type';

    // Register Simple plugin
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        [$pluginTitleSimple, $pluginSignatureSimple, $pluginIcon],
        $pluginType,
        $_EXTKEY
    );
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureSimple]='pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignatureSimple, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_simple_karatbars_feusercard.xml');

    // Register Single plugin
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        [$pluginTitleSingle, $pluginSignatureSingle, $pluginIcon],
        $pluginType,
        $_EXTKEY
    );
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureSingle]='pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignatureSingle, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_single_karatbars_feusercard.xml');

    // Register Multiple plugin
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        [$pluginTitleMultiple, $pluginSignatureMultiple, $pluginIcon],
        $pluginType,
        $_EXTKEY
    );
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureMultiple]='pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignatureMultiple, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_multiple_karatbars_feusercards.xml');