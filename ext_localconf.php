<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Ipandmore.' . $_EXTKEY,
	'Cline',
	array(
		'Cline' => 'show',
	),
	// non-cacheable actions
	array(
	)
);
