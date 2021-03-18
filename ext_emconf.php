<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'IPM C-Line',
	'description' => 'Add copyright lines to your TYPO3 project. With the "today"-Feature you must never rewrite the year (e.g. 2019 to 2020) at New Year.',
	'category' => 'plugin',
	'author' => 'ip&more GmbH',
	'author_email' => 'developer@ipandmore.de',
	'author_company' => 'ip&more GmbH',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.4.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
