<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function ($extKey) {

        $pluginName = 'Cline';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'IPM C-Line');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript/Extended', 'IPM C-Line CSS');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            $extKey,
            $pluginName,
            'C-Line'
        );

        $pluginSignature = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extKey)) .'_' . strtolower($pluginName);

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
            mod.wizards.newContentElement.wizardItems.plugins.elements {
                Cline {
                    icon = EXT:' . $extKey . '/ext_icon.gif
                    title = IPM Cline
                    description = Add dynamic copyright lines.
                    tt_content_defValues.CType = list
                    tt_content_defValues.list_type = ' . $pluginSignature .  '
                }
            }
        ');

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForm/Cline.xml');
    }, 'ipm_cline'
);

