<?php

use Ipandmore\IpmCline\Controller\ClineController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

// Prevent script from being called directly
defined('TYPO3') or die();

// encapsulate all locally defined variables
(static function() {
    ExtensionUtility::configurePlugin(
        'Ipandmore.IpmCline',
        'Cline',
        [
            ClineController::class => 'show',
        ],
        // non-cacheable actions
        [
            ClineController::class => '',
        ]
    );
})();