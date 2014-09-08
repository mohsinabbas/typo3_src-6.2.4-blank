<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "dp_kickstart".
 *
 * Auto generated 01-09-2014 19:26
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'The dotpulse Kickstart Package',
	'description' => 'Kickstart your TYPO3 Projects with an initial Setup to develop great Websites.',
	'category' => 'distribution',
	'version' => '0.0.3',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 1,
	'author' => 'dotpulse AG',
	'author_email' => '',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-6.2.99',
			'realurl' => '1.12.8-1.12.99',
			'ws_less' => '1.3.0-1.3.99',
			'vhs' => '1.8.3-1.8.99',
			'dp_kickstart_theme' => '6.2.0-6.2.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

