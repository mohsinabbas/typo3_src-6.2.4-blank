<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VList.' . $_EXTKEY,
	'Simplelist',
	array(
		'SimpleList' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'SimpleList' => 'create, update, delete',
		
	)
);
