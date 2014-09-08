<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'NewsVendor.' . $_EXTKEY,
	'Usernews',
	array(
		'UserNews' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'UserNews' => 'create, update, delete',
		
	)
);
