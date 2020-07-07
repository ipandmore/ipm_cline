<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function () {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ipandmore.IpmCline',
            'Cline',
            array(
                'Cline' => 'show',
            ),
            // non-cacheable actions
            array()
        );
    }
);
