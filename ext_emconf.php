<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'IPM C-Line',
	'description' => 'Add copyright lines to your TYPO3 project. With the "today"-Feature the plugin keeps track of the current date in the copyright line, so you won\'t have to update the date at New Year.',
	'category' => 'plugin',
	'author' => 'ip&more GmbH',
	'author_email' => 'developer@ipandmore.de',
	'author_company' => 'ip&more GmbH',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '3.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '11.0.0-11.5.99',
            'rte_ckeditor' => '11.0.0-11.5.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
