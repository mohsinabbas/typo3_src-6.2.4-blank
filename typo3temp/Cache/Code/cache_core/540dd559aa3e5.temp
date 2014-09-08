<?php
/**
 * Compiled ext_tables.php cache file
 */

global $T3_SERVICES, $T3_VAR, $TYPO3_CONF_VARS;
global $TBE_MODULES, $TBE_MODULES_EXT, $TCA;
global $PAGES_TYPES, $TBE_STYLES, $FILEICONS;
global $_EXTKEY;

/**
 * Extension: core
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/core/ext_tables.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/**
 * $GLOBALS['PAGES_TYPES'] defines the various types of pages (field: doktype) the system
 * can handle and what restrictions may apply to them.
 * Here you can set the icon and especially you can define which tables are
 * allowed on a certain pagetype (doktype)
 * NOTE: The 'default' entry in the $GLOBALS['PAGES_TYPES'] array is the 'base' for all
 * types, and for every type the entries simply overrides the entries in the 'default' type!
 */
$GLOBALS['PAGES_TYPES'] = array(
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_LINK => array(),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SHORTCUT => array(),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_BE_USER_SECTION => array(
		'type' => 'web',
		'allowedTables' => '*'
	),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_MOUNTPOINT => array(),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SPACER => array(
		'type' => 'sys'
	),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SYSFOLDER => array(
		//  Doktype 254 is a 'Folder' - a general purpose storage folder for whatever you like.
		// In CMS context it's NOT a viewable page. Can contain any element.
		'type' => 'sys',
		'allowedTables' => '*'
	),
	(string) \TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_RECYCLER => array(
		// Doktype 255 is a recycle-bin.
		'type' => 'sys',
		'allowedTables' => '*'
	),
	'default' => array(
		'type' => 'web',
		'allowedTables' => 'pages',
		'onlyAllowedTables' => '0'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_category');

/** @var \TYPO3\CMS\Core\Resource\Driver\DriverRegistry $registry */
$registry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Resource\\Driver\\DriverRegistry');
$registry->addDriversToTCA();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_file_reference');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_file_collection');

/**
 * $TBE_MODULES contains the structure of the backend modules as they are
 * arranged in main- and sub-modules. Every entry in this array represents a
 * menu item on either first (key) or second level (value from list) in the
 * left menu in the TYPO3 backend
 * For information about adding modules to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_MODULES'] = array(
	'web' => 'list',
	'file' => '',
	'user' => '',
	'tools' => '',
	'system' => '',
	'help' => ''
);


// Register the page tree core navigation component
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addCoreNavigationComponent('web', 'typo3-pagetree');


/**
 * $TBE_STYLES configures backend styles and colors; Basically this contains
 * all the values that can be used to create new skins for TYPO3.
 * For information about making skins to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_STYLES'] = array(
	'colorschemes' => array(
		'0' => '#E4E0DB,#CBC7C3,#EDE9E5'
	),
	'borderschemes' => array(
		'0' => array('border:solid 1px black;', 5)
	)
);


/**
 * Setting up $TCA_DESCR - Context Sensitive Help (CSH)
 * For information about using the CSH API in TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:lang/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_users', 'EXT:lang/locallang_csh_be_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_groups', 'EXT:lang/locallang_csh_be_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_filemounts', 'EXT:lang/locallang_csh_sysfilem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_language', 'EXT:lang/locallang_csh_syslang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_news', 'EXT:lang/locallang_csh_sysnews.xlf');
// General Core
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_csh_corebe', 'EXT:lang/locallang_csh_corebe.xlf');
// Extension manager
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_tools_em', 'EXT:lang/locallang_csh_em.xlf');
// Web > Info
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:lang/locallang_csh_web_info.xlf');
// Web > Func
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:lang/locallang_csh_web_func.xlf');
// Labels for TYPO3 4.5 and greater.
// These labels override the ones set above, while still falling back to the original labels
// if no translation is available.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:lang/locallang_csh_pages.xlf'][] = 'EXT:lang/4.5/locallang_csh_pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:lang/locallang_csh_corebe.xlf'][] = 'EXT:lang/4.5/locallang_csh_corebe.xlf';


/**
 * $FILEICONS defines icons for the various file-formats
 */
$GLOBALS['FILEICONS'] = array(
	'txt' => 'txt.gif',
	'pdf' => 'pdf.gif',
	'doc' => 'doc.gif',
	'ai' => 'ai.gif',
	'bmp' => 'bmp.gif',
	'tif' => 'tif.gif',
	'htm' => 'htm.gif',
	'html' => 'html.gif',
	'pcd' => 'pcd.gif',
	'gif' => 'gif.gif',
	'jpg' => 'jpg.gif',
	'jpeg' => 'jpg.gif',
	'mpg' => 'mpg.gif',
	'mpeg' => 'mpeg.gif',
	'exe' => 'exe.gif',
	'com' => 'exe.gif',
	'zip' => 'zip.gif',
	'tgz' => 'zip.gif',
	'gz' => 'zip.gif',
	'php3' => 'php3.gif',
	'php4' => 'php3.gif',
	'php5' => 'php3.gif',
	'php6' => 'php3.gif',
	'php' => 'php3.gif',
	'ppt' => 'ppt.gif',
	'ttf' => 'ttf.gif',
	'pcx' => 'pcx.gif',
	'png' => 'png.gif',
	'tga' => 'tga.gif',
	'class' => 'java.gif',
	'sxc' => 'sxc.gif',
	'sxw' => 'sxw.gif',
	'xls' => 'xls.gif',
	'swf' => 'swf.gif',
	'swa' => 'flash.gif',
	'dcr' => 'flash.gif',
	'wav' => 'wav.gif',
	'mp3' => 'mp3.gif',
	'avi' => 'avi.gif',
	'au' => 'au.gif',
	'mov' => 'mov.gif',
	'3ds' => '3ds.gif',
	'csv' => 'csv.gif',
	'ico' => 'ico.gif',
	'max' => 'max.gif',
	'ps' => 'ps.gif',
	'tmpl' => 'tmpl.gif',
	'fh3' => 'fh3.gif',
	'inc' => 'inc.gif',
	'mid' => 'mid.gif',
	'psd' => 'psd.gif',
	'xml' => 'xml.gif',
	'rtf' => 'rtf.gif',
	't3x' => 't3x.gif',
	't3d' => 't3d.gif',
	'cdr' => 'cdr.gif',
	'dtd' => 'dtd.gif',
	'sgml' => 'sgml.gif',
	'ani' => 'ani.gif',
	'css' => 'css.gif',
	'eps' => 'eps.gif',
	'js' => 'js.gif',
	'wrl' => 'wrl.gif',
	'default' => 'default.gif'
);


/**
 * Backend sprite icon-names
 */
$GLOBALS['TBE_STYLES']['spriteIconApi']['coreSpriteImageNames'] = array(
	'actions-document-close',
	'actions-document-duplicates-select',
	'actions-document-edit-access',
	'actions-document-export-csv',
	'actions-document-export-t3d',
	'actions-document-history-open',
	'actions-document-import-t3d',
	'actions-document-info',
	'actions-document-localize',
	'actions-document-move',
	'actions-document-new',
	'actions-document-open',
	'actions-document-open-read-only',
	'actions-document-paste-after',
	'actions-document-paste-into',
	'actions-document-save',
	'actions-document-save-close',
	'actions-document-save-new',
	'actions-document-save-view',
	'actions-document-select',
	'actions-document-synchronize',
	'actions-document-view',
	'actions-edit-add',
	'actions-edit-copy',
	'actions-edit-copy-release',
	'actions-edit-cut',
	'actions-edit-cut-release',
	'actions-edit-delete',
	'actions-edit-download',
	'actions-edit-hide',
	'actions-edit-insert-default',
	'actions-edit-localize-status-high',
	'actions-edit-localize-status-low',
	'actions-edit-merge-localization',
	'actions-edit-pick-date',
	'actions-edit-rename',
	'actions-edit-restore',
	'actions-edit-undelete-edit',
	'actions-edit-undo',
	'actions-edit-unhide',
	'actions-edit-upload',
	'actions-input-clear',
	'actions-insert-record',
	'actions-insert-reference',
	'actions-markstate',
	'actions-message-error-close',
	'actions-message-information-close',
	'actions-message-notice-close',
	'actions-message-ok-close',
	'actions-message-warning-close',
	'actions-move-down',
	'actions-move-left',
	'actions-move-move',
	'actions-move-right',
	'actions-move-to-bottom',
	'actions-move-to-top',
	'actions-move-up',
	'actions-page-move',
	'actions-page-new',
	'actions-page-open',
	'actions-selection-delete',
	'actions-system-backend-user-emulate',
	'actions-system-backend-user-switch',
	'actions-system-cache-clear',
	'actions-system-cache-clear-impact-high',
	'actions-system-cache-clear-impact-low',
	'actions-system-cache-clear-impact-medium',
	'actions-system-cache-clear-rte',
	'actions-system-extension-configure',
	'actions-system-extension-documentation',
	'actions-system-extension-download',
	'actions-system-extension-import',
	'actions-system-extension-install',
	'actions-system-extension-sqldump',
	'actions-system-extension-uninstall',
	'actions-system-extension-update',
	'actions-system-extension-update-disabled',
	'actions-system-help-open',
	'actions-system-list-open',
	'actions-system-options-view',
	'actions-system-pagemodule-open',
	'actions-system-refresh',
	'actions-system-shortcut-new',
	'actions-system-tree-search-open',
	'actions-system-typoscript-documentation',
	'actions-system-typoscript-documentation-open',
	'actions-template-new',
	'actions-unmarkstate',
	'actions-version-document-remove',
	'actions-version-page-open',
	'actions-version-swap-version',
	'actions-version-swap-workspace',
	'actions-version-workspace-preview',
	'actions-version-workspace-sendtostage',
	'actions-view-go-back',
	'actions-view-go-down',
	'actions-view-go-forward',
	'actions-view-go-up',
	'actions-view-list-collapse',
	'actions-view-list-expand',
	'actions-view-paging-first',
	'actions-view-paging-first-disabled',
	'actions-view-paging-last',
	'actions-view-paging-last-disabled',
	'actions-view-paging-next',
	'actions-view-paging-next-disabled',
	'actions-view-paging-previous',
	'actions-view-paging-previous-disabled',
	'actions-view-table-collapse',
	'actions-view-table-expand',
	'actions-window-open',
	'apps-clipboard-images',
	'apps-clipboard-list',
	'apps-filetree-folder-add',
	'apps-filetree-folder-default',
	'apps-filetree-folder-list',
	'apps-filetree-folder-locked',
	'apps-filetree-folder-media',
	'apps-filetree-folder-news',
	'apps-filetree-folder-opened',
	'apps-filetree-folder-recycler',
	'apps-filetree-folder-temp',
	'apps-filetree-folder-user',
	'apps-filetree-mount',
	'apps-filetree-root',
	'apps-irre-collapsed',
	'apps-irre-expanded',
	'apps-pagetree-backend-user',
	'apps-pagetree-backend-user-hideinmenu',
	'apps-pagetree-collapse',
	'apps-pagetree-drag-copy-above',
	'apps-pagetree-drag-copy-below',
	'apps-pagetree-drag-move-above',
	'apps-pagetree-drag-move-below',
	'apps-pagetree-drag-move-between',
	'apps-pagetree-drag-move-into',
	'apps-pagetree-drag-new-between',
	'apps-pagetree-drag-new-inside',
	'apps-pagetree-drag-place-denied',
	'apps-pagetree-expand',
	'apps-pagetree-folder-contains-approve',
	'apps-pagetree-folder-contains-board',
	'apps-pagetree-folder-contains-fe_users',
	'apps-pagetree-folder-contains-news',
	'apps-pagetree-folder-contains-shop',
	'apps-pagetree-folder-default',
	'apps-pagetree-page-advanced',
	'apps-pagetree-page-advanced-hideinmenu',
	'apps-pagetree-page-advanced-root',
	'apps-pagetree-page-backend-users',
	'apps-pagetree-page-backend-users-hideinmenu',
	'apps-pagetree-page-backend-users-root',
	'apps-pagetree-page-default',
	'apps-pagetree-page-domain',
	'apps-pagetree-page-frontend-user',
	'apps-pagetree-page-frontend-user-hideinmenu',
	'apps-pagetree-page-frontend-user-root',
	'apps-pagetree-page-frontend-users',
	'apps-pagetree-page-frontend-users-hideinmenu',
	'apps-pagetree-page-frontend-users-root',
	'apps-pagetree-page-mountpoint',
	'apps-pagetree-page-mountpoint-hideinmenu',
	'apps-pagetree-page-mountpoint-root',
	'apps-pagetree-page-no-icon-found',
	'apps-pagetree-page-no-icon-found-hideinmenu',
	'apps-pagetree-page-no-icon-found-root',
	'apps-pagetree-page-not-in-menu',
	'apps-pagetree-page-recycler',
	'apps-pagetree-page-shortcut',
	'apps-pagetree-page-shortcut-external',
	'apps-pagetree-page-shortcut-external-hideinmenu',
	'apps-pagetree-page-shortcut-external-root',
	'apps-pagetree-page-shortcut-hideinmenu',
	'apps-pagetree-page-shortcut-root',
	'apps-pagetree-root',
	'apps-pagetree-spacer',
	'apps-tcatree-select-recursive',
	'apps-toolbar-menu-actions',
	'apps-toolbar-menu-cache',
	'apps-toolbar-menu-opendocs',
	'apps-toolbar-menu-search',
	'apps-toolbar-menu-shortcut',
	'apps-toolbar-menu-workspace',
	'mimetypes-compressed',
	'mimetypes-excel',
	'mimetypes-media-audio',
	'mimetypes-media-flash',
	'mimetypes-media-image',
	'mimetypes-media-video',
	'mimetypes-other-other',
	'mimetypes-pdf',
	'mimetypes-powerpoint',
	'mimetypes-text-css',
	'mimetypes-text-csv',
	'mimetypes-text-html',
	'mimetypes-text-js',
	'mimetypes-text-php',
	'mimetypes-text-text',
	'mimetypes-word',
	'mimetypes-x-content-divider',
	'mimetypes-x-content-domain',
	'mimetypes-x-content-form',
	'mimetypes-x-content-form-search',
	'mimetypes-x-content-header',
	'mimetypes-x-content-html',
	'mimetypes-x-content-image',
	'mimetypes-x-content-link',
	'mimetypes-x-content-list-bullets',
	'mimetypes-x-content-list-files',
	'mimetypes-x-content-login',
	'mimetypes-x-content-menu',
	'mimetypes-x-content-multimedia',
	'mimetypes-x-content-page-language-overlay',
	'mimetypes-x-content-plugin',
	'mimetypes-x-content-script',
	'mimetypes-x-content-table',
	'mimetypes-x-content-template',
	'mimetypes-x-content-template-extension',
	'mimetypes-x-content-template-static',
	'mimetypes-x-content-text',
	'mimetypes-x-content-text-picture',
	'mimetypes-x-sys_action',
	'mimetypes-x-sys_category',
	'mimetypes-x-sys_language',
	'mimetypes-x-sys_news',
	'mimetypes-x-sys_workspace',
	'mimetypes-x_belayout',
	'status-dialog-error',
	'status-dialog-information',
	'status-dialog-notification',
	'status-dialog-ok',
	'status-dialog-warning',
	'status-overlay-access-restricted',
	'status-overlay-deleted',
	'status-overlay-hidden',
	'status-overlay-icon-missing',
	'status-overlay-includes-subpages',
	'status-overlay-locked',
	'status-overlay-scheduled',
	'status-overlay-scheduled-future-end',
	'status-overlay-translated',
	'status-status-checked',
	'status-status-current',
	'status-status-edit-read-only',
	'status-status-icon-missing',
	'status-status-locked',
	'status-status-permission-denied',
	'status-status-permission-granted',
	'status-status-readonly',
	'status-status-reference-hard',
	'status-status-reference-soft',
	'status-status-sorting-asc',
	'status-status-sorting-desc',
	'status-status-sorting-light-asc',
	'status-status-sorting-light-desc',
	'status-status-workspace-draft',
	'status-system-extension-required',
	'status-user-admin',
	'status-user-backend',
	'status-user-frontend',
	'status-user-group-backend',
	'status-user-group-frontend',
	'status-version-1',
	'status-version-2',
	'status-version-3',
	'status-version-4',
	'status-version-5',
	'status-version-6',
	'status-version-7',
	'status-version-8',
	'status-version-9',
	'status-version-10',
	'status-version-11',
	'status-version-12',
	'status-version-13',
	'status-version-14',
	'status-version-15',
	'status-version-16',
	'status-version-17',
	'status-version-18',
	'status-version-19',
	'status-version-20',
	'status-version-21',
	'status-version-22',
	'status-version-23',
	'status-version-24',
	'status-version-25',
	'status-version-26',
	'status-version-27',
	'status-version-28',
	'status-version-29',
	'status-version-30',
	'status-version-31',
	'status-version-32',
	'status-version-33',
	'status-version-34',
	'status-version-35',
	'status-version-36',
	'status-version-37',
	'status-version-38',
	'status-version-39',
	'status-version-40',
	'status-version-41',
	'status-version-42',
	'status-version-43',
	'status-version-44',
	'status-version-45',
	'status-version-46',
	'status-version-47',
	'status-version-48',
	'status-version-49',
	'status-version-50',
	'status-version-no-version',
	'status-warning-in-use',
	'status-warning-lock',
	'treeline-blank',
	'treeline-join',
	'treeline-joinbottom',
	'treeline-jointop',
	'treeline-line',
	'treeline-minus',
	'treeline-minusbottom',
	'treeline-minusonly',
	'treeline-minustop',
	'treeline-plus',
	'treeline-plusbottom',
	'treeline-plusonly',
	'treeline-stopper',
	'empty-icon'
);


$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayPriorities'] = array(
	'deleted',
	'hidden',
	'starttime',
	'endtime',
	'futureendtime',
	'fe_group',
	'protectedSection'
);


$GLOBALS['TBE_STYLES']['spriteIconApi']['spriteIconRecordOverlayNames'] = array(
	'hidden' => 'status-overlay-hidden',
	'fe_group' => 'status-overlay-access-restricted',
	'starttime' => 'status-overlay-scheduled',
	'endtime' => 'status-overlay-scheduled',
	'futureendtime' => 'status-overlay-scheduled-future-end',
	'readonly' => 'status-overlay-locked',
	'deleted' => 'status-overlay-deleted',
	'missing' => 'status-overlay-missing',
	'translated' => 'status-overlay-translated',
	'protectedSection' => 'status-overlay-includes-subpages'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: backend
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/backend/ext_tables.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	// Register record history module
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'record_history',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/RecordHistory/'
	);

	// Register edit wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_edit',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/EditWizard/'
	);

	// Register add wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_add',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/AddWizard/'
	);

	// Register list wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_list',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/ListWizard/'
	);

	// Register table wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_table',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/TableWizard/'
	);

	// Register forms wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_forms',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/FormsWizard/'
	);

	// Register rte wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_rte',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/RteWizard/'
	);

	// Register colorpicker wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_colorpicker',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/ColorpickerWizard/'
	);

	// Register backend_layout wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_backend_layout',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/BackendLayoutWizard/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: cshmanual
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/cshmanual/ext_tables.php
 */

$_EXTKEY = 'cshmanual';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'help',
		'cshmanual',
		'top',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extensionmanager
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/extensionmanager/ext_tables.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools',
		'extensionmanager', '', array(
			'List' => 'index,unresolvedDependencies,ter,showAllVersions,distributions',
			'Action' => 'toggleExtensionInstallationState,installExtensionWithoutSystemDependencyCheck,removeExtension,downloadExtensionZip,downloadExtensionData',
			'Configuration' => 'showConfigurationForm,save',
			'Download' => 'checkDependencies,installFromTer,installExtensionWithoutSystemDependencyCheck,installDistribution,updateExtension,updateCommentForUpdatableVersions',
			'UpdateScript' => 'show',
			'UpdateFromTer' => 'updateExtensionListFromTer',
			'UploadExtensionFile' => 'form,extract',
			'Distribution' => 'show'
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/module.png',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
		)
	);

	// Register extension status report system
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
		'TYPO3\\CMS\\Extensionmanager\\Report\\ExtensionStatus';
}

// Register specific icon for update script button
\TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons(
	array(
		'update-script' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/Icons/ExtensionUpdateScript.png'
	),
	$_EXTKEY
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: cms
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/cms/ext_tables.php
 */

$_EXTKEY = 'cms';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'layout', 'top', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'layout/');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:cms/locallang_csh_weblayout.xlf');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:cms/locallang_csh_webinfo.xlf');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_cms_webinfo_page', NULL, 'LLL:EXT:cms/locallang_tca.xlf:mod_tx_cms_webinfo_page');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction('web_info', 'tx_cms_webinfo_lang', NULL, 'LLL:EXT:cms/locallang_tca.xlf:mod_tx_cms_webinfo_lang');
}
// Add allowed records to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('pages_language_overlay,tt_content,sys_template,sys_domain,backend_layout');

if (!function_exists('user_sortPluginList')) {
	function user_sortPluginList(array &$parameters) {
		usort(
			$parameters['items'],
			function ($item1, $item2) {
				return strcasecmp($GLOBALS['LANG']->sL($item1[0]), $GLOBALS['LANG']->sL($item2[0]));
			}
		);
	}
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extbase
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/extbase/ext_tables.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// register Extbase dispatcher for modules
	$TBE_MODULES['_dispatcher'][] = 'TYPO3\\CMS\\Extbase\\Core\\ModuleRunnerInterface';
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['extbase'][] = 'TYPO3\\CMS\\Extbase\\Utility\\ExtbaseRequirementsCheckUtility';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Extbase\\Scheduler\\Task'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.name',
	'description' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.description',
	'additionalFields' => 'TYPO3\\CMS\\Extbase\\Scheduler\\FieldProvider'
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkFlexFormValue'][] = 'TYPO3\CMS\Extbase\Hook\DataHandler\CheckFlexFormValue';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: fluid
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/fluid/ext_tables.php
 */

$_EXTKEY = 'fluid';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fluid: (Optional) default ajax configuration');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: install
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/install/ext_tables.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Register report module additions
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'TYPO3\\CMS\\Install\\Report\\InstallStatusReport';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = 'TYPO3\\CMS\\Install\\Report\\EnvironmentStatusReport';

	// Register backend module
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'system',
		'install', '', array(
			'BackendModule' => 'index, showEnableInstallToolButton, enableInstallTool',
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/Icon/BackendModule.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/BackendModule.xlf',
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lang
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/lang/ext_tables.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
		// Registers a Backend Module
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'tools', // Make module a submodule of 'tools'
		'language', // Submodule key
		'after:extensionmanager', // Position
		array(
				// An array holding the controller-action-combinations that are accessible
			'Language' => 'index, updateLanguageSelection, updateTranslation'
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod_language.xlf',
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: recordlist
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/recordlist/ext_tables.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'web_list',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'web',
		'list',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
	);

	// Register element browser wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_element_browser',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/ElementBrowserWizard/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: saltedpasswords
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/saltedpasswords/ext_tables.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add context sensitive help (csh) for scheduler task
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_txsaltedpasswords', 'EXT:' . $_EXTKEY . '/locallang_csh_saltedpasswords.xlf');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sv
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/sv/ext_tables.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['sv']['services'] = array(
		'title' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_title',
		'description' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_description',
		'icon' => 'EXT:sv/Resources/Public/Images/tx_sv_report.png',
		'report' => 'TYPO3\\CMS\\Sv\\Report\\ServicesListReport'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: about
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/about/ext_tables.php
 */

$_EXTKEY = 'about';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'help',
		'about',
		'top',
		array('About' => 'index'),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:about/ext_icon.gif',
			'labels' => 'LLL:EXT:lang/locallang_mod_help_about.xlf'
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: aboutmodules
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/aboutmodules/ext_tables.php
 */

$_EXTKEY = 'aboutmodules';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'help',
		'aboutmodules',
		'after:about',
		array(
			'Modules' => 'index'
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:aboutmodules/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: belog
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/belog/ext_tables.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register backend modules, but not in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	// Module Web->Info->Log
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_info',
		'TYPO3\\CMS\\Belog\\Module\\BackendLogModuleBootstrap',
		NULL,
		'Log'
	);

	// Module Tools->Log
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'system',
		'log',
		'',
		array(
			'Tools' => 'index',
			'WebInfo' => 'index',
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:belog/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: beuser
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/beuser/ext_tables.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Module Admin > Backend Users
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'system',
		'tx_Beuser',
		'top',
		array(
			'BackendUser' => 'index, addToCompareList, removeFromCompareList, compare, online, terminateBackendUserSession'
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: context_help
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/context_help/ext_tables.php
 */

$_EXTKEY = 'context_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:context_help/locallang_csh_fe_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:context_help/locallang_csh_fe_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:context_help/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages_language_overlay', 'EXT:context_help/locallang_csh_pageslol.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('static_template', 'EXT:context_help/locallang_csh_statictpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_domain', 'EXT:context_help/locallang_csh_sysdomain.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:context_help/locallang_csh_sysfilestorage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:context_help/locallang_csh_systmpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:context_help/locallang_csh_ttcontent.xlf');
// Labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:context_help/locallang_csh_pages.xlf'][] = 'EXT:context_help/4.5/locallang_csh_pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:context_help/locallang_csh_ttcontent.xlf'][] = 'EXT:context_help/4.5/locallang_csh_ttcontent.xlf';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: documentation
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/documentation/ext_tables.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	// Registers a Backend Module
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'help',
		'documentation',
		'top',
		array(
			'Document' => 'list, download, fetch',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extra_page_cm_options
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/extra_page_cm_options/ext_tables.php
 */

$_EXTKEY = 'extra_page_cm_options';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
		'name' => 'TYPO3\\CMS\\ExtraPageCmOptions\\ExtraPageContextMenuOptions',
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: filelist
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/filelist/ext_tables.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'file',
		'list',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: form
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/form/ext_tables.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	// Register wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'wizard_form',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/FormWizard/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: func
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/func/ext_tables.php
 */

$_EXTKEY = 'func';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'web',
		'func',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: func_wizards
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/func_wizards/ext_tables.php
 */

$_EXTKEY = 'func_wizards';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_func',
		'TYPO3\\CMS\\FuncWizards\\Controller\\WebFunctionWizardsBaseController',
		NULL,
		'LLL:EXT:func_wizards/locallang.xlf:mod_wizards'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:func_wizards/locallang_csh.xlf');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: impexp
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/impexp/ext_tables.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
		'name' => 'TYPO3\\CMS\\Impexp\\Clickmenu',
	);
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['taskcenter']['impexp']['tx_impexp_task'] = array(
		'title' => 'LLL:EXT:impexp/locallang_csh.xlf:.alttitle',
		'description' => 'LLL:EXT:impexp/locallang_csh.xlf:.description',
		'icon' => 'EXT:impexp/export.gif'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_tx_impexp', 'EXT:impexp/locallang_csh.xlf');
	// CSH labels for TYPO3 4.5 and greater.  These labels override the ones set above, while still falling back to the original labels if no translation is available.
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:impexp/locallang_csh.xml'][] = 'EXT:impexp/locallang_csh_45.xlf';
	// Special context menu actions for the import/export module
	$importExportActions = '
		9000 = DIVIDER

		9100 = ITEM
		9100 {
			name = exportT3d
			label = LLL:EXT:impexp/app/locallang.xlf:export
			spriteIcon = actions-document-export-t3d
			callbackAction = exportT3d
		}

		9200 = ITEM
		9200 {
			name = importT3d
			label = LLL:EXT:impexp/app/locallang.xlf:import
			spriteIcon = actions-document-import-t3d
			callbackAction = importT3d
		}
	';
	// Context menu user default configuration
	$GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUserTSconfig'] .= '
		options.contextMenu.table {
			virtual_root.items {
				' . $importExportActions . '
			}

			pages_root.items {
				' . $importExportActions . '
			}

			pages.items.1000 {
				' . $importExportActions . '
			}
		}
	';
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath('xMOD_tximpexp', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'app/');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: info
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/info/ext_tables.php
 */

$_EXTKEY = 'info';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'web',
		'info',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: info_pagetsconfig
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/info_pagetsconfig/ext_tables.php
 */

$_EXTKEY = 'info_pagetsconfig';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_info',
		'TYPO3\CMS\InfoPagetsconfig\Controller\InfoPageTyposcriptConfigController',
		NULL,
		'LLL:EXT:info_pagetsconfig/locallang.xlf:mod_pagetsconfig'
	);
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:info_pagetsconfig/locallang_csh_webinfo.xlf');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: lowlevel
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/lowlevel/ext_tables.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'system',
		'dbint',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'dbint/'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'system',
		'config',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'config/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: perm
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/perm/ext_tables.php
 */

$_EXTKEY = 'perm';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'web',
		'perm',
		'',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod1/'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler('PermissionAjaxController::dispatch', 'TYPO3\\CMS\\Perm\\Controller\\PermissionAjaxController->dispatch');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: reports
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/reports/ext_tables.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'system',
		'txreportsM1',
		'',
		array(
			'Report' => 'index,detail'
		), array(
			'access' => 'admin',
			'icon' => 'EXT:' . $_EXTKEY . '/ext_icon.png',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf'
		)
	);
	$statusReport = array(
		'title' => 'LLL:EXT:reports/reports/locallang.xlf:status_report_title',
		'description' => 'LLL:EXT:reports/reports/locallang.xlf:status_report_description',
		'report' => 'TYPO3\\CMS\\Reports\\Report\\Status\\Status'
	);
	if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'])) {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array();
	}
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'], $statusReport);
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\Typo3Status';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\SystemStatus';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\SecurityStatus';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['configuration'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\ConfigurationStatus';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['fal'][] = 'TYPO3\\CMS\\Reports\\Report\\Status\\FalStatus';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: setup
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/setup/ext_tables.php
 */

$_EXTKEY = 'setup';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'user',
		'setup',
		'after:task',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod/'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
		'_MOD_user_setup',
		'EXT:setup/locallang_csh_mod.xlf'
	);

	$GLOBALS['TYPO3_USER_SETTINGS'] = array(
		'ctrl' => array(
			'dividers2tabs' => 1
		),
		'columns' => array(
			'realName' => array(
				'type' => 'text',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:beUser_realName',
				'table' => 'be_users',
				'csh' => 'beUser_realName'
			),
			'email' => array(
				'type' => 'text',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:beUser_email',
				'table' => 'be_users',
				'csh' => 'beUser_email'
			),
			'emailMeAtLogin' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:emailMeAtLogin',
				'csh' => 'emailMeAtLogin'
			),
			'password' => array(
				'type' => 'password',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:newPassword',
				'table' => 'be_users',
				'csh' => 'newPassword',
			),
			'password2' => array(
				'type' => 'password',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:newPasswordAgain',
				'table' => 'be_users',
				'csh' => 'newPasswordAgain',
			),
			'lang' => array(
				'type' => 'select',
				'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderLanguageSelect',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:language',
				'csh' => 'language'
			),
			'startModule' => array(
				'type' => 'select',
				'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderStartModuleSelect',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:startModule',
				'csh' => 'startModule'
			),
			'thumbnailsByDefault' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:showThumbs',
				'csh' => 'showThumbs'
			),
			'titleLen' => array(
				'type' => 'text',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:maxTitleLen',
				'csh' => 'maxTitleLen'
			),
			'edit_RTE' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:edit_RTE',
				'csh' => 'edit_RTE'
			),
			'edit_docModuleUpload' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:edit_docModuleUpload',
				'csh' => 'edit_docModuleUpload'
			),
			'showHiddenFilesAndFolders' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:showHiddenFilesAndFolders',
				'csh' => 'showHiddenFilesAndFolders'
			),
			'copyLevels' => array(
				'type' => 'text',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:copyLevels',
				'csh' => 'copyLevels'
			),
			'recursiveDelete' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:recursiveDelete',
				'csh' => 'recursiveDelete'
			),
			'simulate' => array(
				'type' => 'select',
				'itemsProcFunc' => 'TYPO3\\CMS\\Setup\\Controller\\SetupModuleController->renderSimulateUserSelect',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:simulate',
				'csh' => 'simuser'
			),
			'resetConfiguration' => array(
				'type' => 'button',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:resetConfiguration',
				'buttonlabel' => 'LLL:EXT:setup/mod/locallang.xlf:resetConfigurationShort',
				'csh' => 'reset',
				'onClick' => 'if (confirm(\'%s\')) { document.getElementById(\'setValuesToDefault\').value = 1; this.form.submit(); }',
				'onClickLabels' => array(
					'LLL:EXT:setup/mod/locallang.xlf:setToStandardQuestion'
				)
			),
			'clearSessionVars' => array(
				'type' => 'button',
				'access' => 'admin',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:clearSessionVars',
				'buttonlabel' => 'LLL:EXT:setup/mod/locallang.xlf:clearSessionVarsShort',
				'csh' => 'reset',
				'onClick' => 'if (confirm(\'%s\')) { document.getElementById(\'clearSessionVars\').value = 1; this.form.submit(); }',
				'onClickLabels' => array(
					'LLL:EXT:setup/mod/locallang.xlf:clearSessionVarsQuestion'
				)
			),
			'resizeTextareas' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:resizeTextareas',
				'csh' => 'resizeTextareas'
			),
			'resizeTextareas_Flexible' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:resizeTextareas_Flexible',
				'csh' => 'resizeTextareas_Flexible'
			),
			'resizeTextareas_MaxHeight' => array(
				'type' => 'text',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:flexibleTextareas_MaxHeight',
				'csh' => 'flexibleTextareas_MaxHeight'
			),
			'debugInWindow' => array(
				'type' => 'check',
				'label' => 'LLL:EXT:setup/mod/locallang.xlf:debugInWindow',
				'access' => 'admin'
			)
		),
		'showitem' => '--div--;LLL:EXT:setup/mod/locallang.xlf:personal_data,realName,email,emailMeAtLogin,password,password2,lang,
				--div--;LLL:EXT:setup/mod/locallang.xlf:opening,startModule,thumbnailsByDefault,titleLen,
				--div--;LLL:EXT:setup/mod/locallang.xlf:editFunctionsTab,edit_RTE,edit_docModuleUpload,showHiddenFilesAndFolders,resizeTextareas,resizeTextareas_Flexible,resizeTextareas_MaxHeight,copyLevels,recursiveDelete,resetConfiguration,clearSessionVars,
				--div--;LLL:EXT:setup/mod/locallang.xlf:adminFunctions,simulate,debugInWindow'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: rtehtmlarea
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/rtehtmlarea/ext_tables.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Add static template for Click-enlarge rendering
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'static/clickenlarge/', 'Clickenlarge Rendering');
// Add configuration of soft references on image tags in RTE content
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'hooks/softref/ext_tables.php';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rtehtmlarea_acronym');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rtehtmlarea_acronym', 'EXT:' . $_EXTKEY . '/locallang_csh_abbreviation.xlf');
// Add contextual help files
$htmlAreaRteContextHelpFiles = array(
	'General' => 'EXT:' . $_EXTKEY . '/locallang_csh.xlf',
	'Acronym' => 'EXT:' . $_EXTKEY . '/extensions/Acronym/locallang_csh.xlf',
	'EditElement' => 'EXT:' . $_EXTKEY . '/extensions/EditElement/locallang_csh.xlf',
	'Language' => 'EXT:' . $_EXTKEY . '/extensions/Language/locallang_csh.xlf',
	'MicrodataSchema' => 'EXT:' . $_EXTKEY . '/extensions/MicrodataSchema/locallang_csh.xlf',
	'PlainText' => 'EXT:' . $_EXTKEY . '/extensions/PlainText/locallang_csh.xlf',
	'RemoveFormat' => 'EXT:' . $_EXTKEY . '/extensions/RemoveFormat/locallang_csh.xlf',
	'TableOperations' => 'EXT:' . $_EXTKEY . '/extensions/TableOperations/locallang_csh.xlf'
);
foreach ($htmlAreaRteContextHelpFiles as $key => $file) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xEXT_' . $_EXTKEY . '_' . $key, $file);
}
unset($htmlAreaRteContextHelpFiles);
// Extend TYPO3 User Settings Configuration
if (TYPO3_MODE === 'BE' && \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('setup') && is_array($GLOBALS['TYPO3_USER_SETTINGS'])) {
	$GLOBALS['TYPO3_USER_SETTINGS']['columns'] = array_merge($GLOBALS['TYPO3_USER_SETTINGS']['columns'], array(
		'rteWidth' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xlf:rteWidth',
			'csh' => 'xEXT_rtehtmlarea_General:rteWidth'
		),
		'rteHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xlf:rteHeight',
			'csh' => 'xEXT_rtehtmlarea_General:rteHeight'
		),
		'rteResize' => array(
			'type' => 'check',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xlf:rteResize',
			'csh' => 'xEXT_rtehtmlarea_General:rteResize'
		),
		'rteMaxHeight' => array(
			'type' => 'text',
			'label' => 'LLL:EXT:rtehtmlarea/locallang.xlf:rteMaxHeight',
			'csh' => 'xEXT_rtehtmlarea_General:rteMaxHeight'
		),
		'rteCleanPasteBehaviour' => array(
			'type' => 'select',
			'label' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xlf:rteCleanPasteBehaviour',
			'items' => array(
				'plainText' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xlf:plainText',
				'pasteStructure' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xlf:pasteStructure',
				'pasteFormat' => 'LLL:EXT:rtehtmlarea/htmlarea/plugins/PlainText/locallang.xlf:pasteFormat'
			),
			'csh' => 'xEXT_rtehtmlarea_PlainText:behaviour'
		)
	));
	$GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',--div--;LLL:EXT:rtehtmlarea/locallang.xlf:rteSettings,rteWidth,rteHeight,rteResize,rteMaxHeight,rteCleanPasteBehaviour';
}
if (TYPO3_MODE === 'BE') {
	// Register RTE element browser wizard
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'rtehtmlarea_wizard_element_browser',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod3/'
	);

	// Register RTE wizard_select_image
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'rtehtmlarea_wizard_select_image',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod4/'
	);

	// Register RTE wizard_user
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'rtehtmlarea_wizard_user',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod5/'
	);

	// Register RTE wizard_user
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
		'rtehtmlarea_wizard_parse_html',
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'mod6/'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: sys_note
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/sys_note/ext_tables.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_note');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_note', 'EXT:sys_note/Resources/Private/Language/locallang_csh_sysnote.xlf');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: t3editor
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/t3editor/ext_tables.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	// Register AJAX handlers:
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler('T3Editor::saveCode', 'TYPO3\\CMS\\T3editor\\T3editor->ajaxSaveCode');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler('T3Editor::getPlugins', 'TYPO3\\CMS\\T3editor\\T3editor->getPlugins');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler('T3Editor_TSrefLoader::getTypes', 'TYPO3\\CMS\\T3editor\\TypoScriptReferenceLoader->processAjaxRequest');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler('T3Editor_TSrefLoader::getDescription', 'TYPO3\\CMS\\T3editor\\TypoScriptReferenceLoader->processAjaxRequest');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler('CodeCompletion::loadTemplates', 'TYPO3\\CMS\\T3editor\\CodeCompletion->processAjaxRequest');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: t3skin
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/t3skin/ext_tables.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE' || TYPO3_MODE == 'FE' && isset($GLOBALS['BE_USER'])) {
	global $TBE_STYLES;
	// Register as a skin
	$TBE_STYLES['skins'][$_EXTKEY] = array(
		'name' => 't3skin'
	);
	// Support for other extensions to add own icons...
	$presetSkinImgs = is_array($TBE_STYLES['skinImg']) ? $TBE_STYLES['skinImg'] : array();
	$TBE_STYLES['skins'][$_EXTKEY]['stylesheetDirectories']['sprites'] = 'EXT:t3skin/stylesheets/sprites/';
	/** Setting up backend styles and colors */
	$TBE_STYLES['mainColors'] = array(
		// Always use #xxxxxx color definitions!
		'bgColor' => '#FFFFFF',
		// Light background color
		'bgColor2' => '#FEFEFE',
		// Steel-blue
		'bgColor3' => '#F1F3F5',
		// dok.color
		'bgColor4' => '#E6E9EB',
		// light tablerow background, brownish
		'bgColor5' => '#F8F9FB',
		// light tablerow background, greenish
		'bgColor6' => '#E6E9EB',
		// light tablerow background, yellowish, for section headers. Light.
		'hoverColor' => '#FF0000',
		'navFrameHL' => '#F8F9FB'
	);
	$TBE_STYLES['colorschemes'][0] = '-|class-main1,-|class-main2,-|class-main3,-|class-main4,-|class-main5';
	$TBE_STYLES['colorschemes'][1] = '-|class-main11,-|class-main12,-|class-main13,-|class-main14,-|class-main15';
	$TBE_STYLES['colorschemes'][2] = '-|class-main21,-|class-main22,-|class-main23,-|class-main24,-|class-main25';
	$TBE_STYLES['colorschemes'][3] = '-|class-main31,-|class-main32,-|class-main33,-|class-main34,-|class-main35';
	$TBE_STYLES['colorschemes'][4] = '-|class-main41,-|class-main42,-|class-main43,-|class-main44,-|class-main45';
	$TBE_STYLES['colorschemes'][5] = '-|class-main51,-|class-main52,-|class-main53,-|class-main54,-|class-main55';
	$TBE_STYLES['styleschemes'][0]['all'] = 'CLASS: formField';
	$TBE_STYLES['styleschemes'][1]['all'] = 'CLASS: formField1';
	$TBE_STYLES['styleschemes'][2]['all'] = 'CLASS: formField2';
	$TBE_STYLES['styleschemes'][3]['all'] = 'CLASS: formField3';
	$TBE_STYLES['styleschemes'][4]['all'] = 'CLASS: formField4';
	$TBE_STYLES['styleschemes'][5]['all'] = 'CLASS: formField5';
	$TBE_STYLES['styleschemes'][0]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][1]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][2]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][3]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][4]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][5]['check'] = 'CLASS: checkbox';
	$TBE_STYLES['styleschemes'][0]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][1]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][2]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][3]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][4]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][5]['radio'] = 'CLASS: radio';
	$TBE_STYLES['styleschemes'][0]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][1]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][2]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][3]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][4]['select'] = 'CLASS: select';
	$TBE_STYLES['styleschemes'][5]['select'] = 'CLASS: select';
	$TBE_STYLES['borderschemes'][0] = array('', '', '', 'wrapperTable');
	$TBE_STYLES['borderschemes'][1] = array('', '', '', 'wrapperTable1');
	$TBE_STYLES['borderschemes'][2] = array('', '', '', 'wrapperTable2');
	$TBE_STYLES['borderschemes'][3] = array('', '', '', 'wrapperTable3');
	$TBE_STYLES['borderschemes'][4] = array('', '', '', 'wrapperTable4');
	$TBE_STYLES['borderschemes'][5] = array('', '', '', 'wrapperTable5');
	// Setting the relative path to the extension in temp. variable:
	$temp_eP = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY);
	// Alternative dimensions for frameset sizes:
	// Left menu frame width
	$TBE_STYLES['dims']['leftMenuFrameW'] = 190;
	// Top frame height
	$TBE_STYLES['dims']['topFrameH'] = 42;
	// Default navigation frame width
	$TBE_STYLES['dims']['navFrameWidth'] = 280;
	// Setting roll-over background color for click menus:
	// Notice, this line uses the the 'scriptIDindex' feature to override another value in this array (namely $TBE_STYLES['mainColors']['bgColor5']), for a specific script "typo3/alt_clickmenu.php"
	$TBE_STYLES['scriptIDindex']['typo3/alt_clickmenu.php']['mainColors']['bgColor5'] = '#dedede';
	// Setting up auto detection of alternative icons:
	$TBE_STYLES['skinImgAutoCfg'] = array(
		'absDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'icons/',
		'relDir' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'icons/',
		'forceFileExtension' => 'gif',
		// Force to look for PNG alternatives...
		'iconSizeWidth' => 16,
		'iconSizeHeight' => 16
	);
	// Changing icon for filemounts, needs to be done here as overwriting the original icon would also change the filelist tree's root icon
	$TCA['sys_filemounts']['ctrl']['iconfile'] = '_icon_ftp_2.gif';
	// Adding flags to sys_language
	$TCA['sys_language']['ctrl']['typeicon_column'] = 'flag';
	$TCA['sys_language']['ctrl']['typeicon_classes'] = array(
		'default' => 'mimetypes-x-sys_language',
		'mask' => 'flags-###TYPE###'
	);
	$flagNames = array(
		'multiple',
		'ad',
		'ae',
		'af',
		'ag',
		'ai',
		'al',
		'am',
		'an',
		'ao',
		'ar',
		'as',
		'at',
		'au',
		'aw',
		'ax',
		'az',
		'ba',
		'bb',
		'bd',
		'be',
		'bf',
		'bg',
		'bh',
		'bi',
		'bj',
		'bm',
		'bn',
		'bo',
		'br',
		'bs',
		'bt',
		'bv',
		'bw',
		'by',
		'bz',
		'ca',
		'catalonia',
		'cc',
		'cd',
		'cf',
		'cg',
		'ch',
		'ci',
		'ck',
		'cl',
		'cm',
		'cn',
		'co',
		'cr',
		'cs',
		'cu',
		'cv',
		'cx',
		'cy',
		'cz',
		'de',
		'dj',
		'dk',
		'dm',
		'do',
		'dz',
		'ec',
		'ee',
		'eg',
		'eh',
		'england',
		'er',
		'es',
		'et',
		'europeanunion',
		'fam',
		'fi',
		'fj',
		'fk',
		'fm',
		'fo',
		'fr',
		'ga',
		'gb',
		'gd',
		'ge',
		'gf',
		'gh',
		'gi',
		'gl',
		'gm',
		'gn',
		'gp',
		'gq',
		'gr',
		'gs',
		'gt',
		'gu',
		'gw',
		'gy',
		'hk',
		'hm',
		'hn',
		'hr',
		'ht',
		'hu',
		'id',
		'ie',
		'il',
		'in',
		'io',
		'iq',
		'ir',
		'is',
		'it',
		'jm',
		'jo',
		'jp',
		'ke',
		'kg',
		'kh',
		'ki',
		'km',
		'kn',
		'kp',
		'kr',
		'kw',
		'ky',
		'kz',
		'la',
		'lb',
		'lc',
		'li',
		'lk',
		'lr',
		'ls',
		'lt',
		'lu',
		'lv',
		'ly',
		'ma',
		'mc',
		'md',
		'me',
		'mg',
		'mh',
		'mk',
		'ml',
		'mm',
		'mn',
		'mo',
		'mp',
		'mq',
		'mr',
		'ms',
		'mt',
		'mu',
		'mv',
		'mw',
		'mx',
		'my',
		'mz',
		'na',
		'nc',
		'ne',
		'nf',
		'ng',
		'ni',
		'nl',
		'no',
		'np',
		'nr',
		'nu',
		'nz',
		'om',
		'pa',
		'pe',
		'pf',
		'pg',
		'ph',
		'pk',
		'pl',
		'pm',
		'pn',
		'pr',
		'ps',
		'pt',
		'pw',
		'py',
		'qa',
		'qc',
		're',
		'ro',
		'rs',
		'ru',
		'rw',
		'sa',
		'sb',
		'sc',
		'scotland',
		'sd',
		'se',
		'sg',
		'sh',
		'si',
		'sj',
		'sk',
		'sl',
		'sm',
		'sn',
		'so',
		'sr',
		'st',
		'sv',
		'sy',
		'sz',
		'tc',
		'td',
		'tf',
		'tg',
		'th',
		'tj',
		'tk',
		'tl',
		'tm',
		'tn',
		'to',
		'tr',
		'tt',
		'tv',
		'tw',
		'tz',
		'ua',
		'ug',
		'um',
		'us',
		'uy',
		'uz',
		'va',
		'vc',
		've',
		'vg',
		'vi',
		'vn',
		'vu',
		'wales',
		'wf',
		'ws',
		'ye',
		'yt',
		'za',
		'zm',
		'zw'
	);
	foreach ($flagNames as $flagName) {
		$TCA['sys_language']['columns']['flag']['config']['items'][] = array($flagName, $flagName, 'EXT:t3skin/images/flags/' . $flagName . '.png');
	}
	// Manual setting up of alternative icons. This is mainly for module icons which has a special prefix:
	$TBE_STYLES['skinImg'] = array_merge($presetSkinImgs, array(
		'gfx/ol/blank.gif' => array('clear.gif', 'width="18" height="16"'),
		'MOD:web/website.gif' => array($temp_eP . 'icons/module_web.gif', 'width="24" height="24"'),
		'MOD:web_layout/layout.gif' => array($temp_eP . 'icons/module_web_layout.gif', 'width="24" height="24"'),
		'MOD:web_view/view.gif' => array($temp_eP . 'icons/module_web_view.png', 'width="24" height="24"'),
		'MOD:web_list/list.gif' => array($temp_eP . 'icons/module_web_list.gif', 'width="24" height="24"'),
		'MOD:web_info/info.gif' => array($temp_eP . 'icons/module_web_info.png', 'width="24" height="24"'),
		'MOD:web_perm/perm.gif' => array($temp_eP . 'icons/module_web_perms.png', 'width="24" height="24"'),
		'MOD:web_func/func.gif' => array($temp_eP . 'icons/module_web_func.png', 'width="24" height="24"'),
		'MOD:web_ts/ts1.gif' => array($temp_eP . 'icons/module_web_ts.gif', 'width="24" height="24"'),
		'MOD:web_modules/modules.gif' => array($temp_eP . 'icons/module_web_modules.gif', 'width="24" height="24"'),
		'MOD:web_txversionM1/cm_icon.gif' => array($temp_eP . 'icons/module_web_version.gif', 'width="24" height="24"'),
		'MOD:file/file.gif' => array($temp_eP . 'icons/module_file.gif', 'width="22" height="24"'),
		'MOD:file_list/list.gif' => array($temp_eP . 'icons/module_file_list.gif', 'width="22" height="24"'),
		'MOD:file_images/images.gif' => array($temp_eP . 'icons/module_file_images.gif', 'width="22" height="22"'),
		'MOD:user/user.gif' => array($temp_eP . 'icons/module_user.gif', 'width="22" height="22"'),
		'MOD:user_task/task.gif' => array($temp_eP . 'icons/module_user_taskcenter.gif', 'width="22" height="22"'),
		'MOD:user_setup/setup.gif' => array($temp_eP . 'icons/module_user_setup.gif', 'width="22" height="22"'),
		'MOD:user_doc/document.gif' => array($temp_eP . 'icons/module_doc.gif', 'width="22" height="22"'),
		'MOD:user_ws/sys_workspace.gif' => array($temp_eP . 'icons/module_user_ws.gif', 'width="22" height="22"'),
		'MOD:tools/tool.gif' => array($temp_eP . 'icons/module_tools.gif', 'width="25" height="24"'),
		'MOD:tools_em/em.gif' => array($temp_eP . 'icons/module_tools_em.png', 'width="24" height="24"'),
		'MOD:tools_em/install.gif' => array($temp_eP . 'icons/module_tools_em.gif', 'width="24" height="24"'),
		'MOD:tools_txphpmyadmin/thirdparty_db.gif' => array($temp_eP . 'icons/module_tools_phpmyadmin.gif', 'width="24" height="24"'),
		'MOD:tools_isearch/isearch.gif' => array($temp_eP . 'icons/module_tools_isearch.gif', 'width="24" height="24"'),
		'MOD:system_dbint/db.gif' => array($temp_eP . 'icons/module_system_dbint.gif', 'width="25" height="24"'),
		'MOD:system_beuser/beuser.gif' => array($temp_eP . 'icons/module_system_user.gif', 'width="24" height="24"'),
		'MOD:system_install/install.gif' => array($temp_eP . 'icons/module_system_install.gif', 'width="24" height="24"'),
		'MOD:system_config/config.gif' => array($temp_eP . 'icons/module_system_config.gif', 'width="24" height="24"'),
		'MOD:system_log/log.gif' => array($temp_eP . 'icons/module_system_log.gif', 'width="24" height="24"'),
		'MOD:help/help.gif' => array($temp_eP . 'icons/module_help.gif', 'width="23" height="24"'),
		'MOD:help_about/info.gif' => array($temp_eP . 'icons/module_help_about.gif', 'width="25" height="24"'),
		'MOD:help_aboutmodules/aboutmodules.gif' => array($temp_eP . 'icons/module_help_aboutmodules.gif', 'width="24" height="24"'),
		'MOD:help_cshmanual/about.gif' => array($temp_eP . 'icons/module_help_cshmanual.gif', 'width="25" height="24"'),
		'MOD:help_txtsconfighelpM1/moduleicon.gif' => array($temp_eP . 'icons/module_help_ts.gif', 'width="25" height="24"')
	));
	// Logo at login screen
	$TBE_STYLES['logo_login'] = $temp_eP . 'images/login/typo3logo-white-greyback.gif';
	// extJS theme
	$TBE_STYLES['extJS']['theme'] = $temp_eP . 'extjs/xtheme-t3skin.css';
	// Adding HTML template for login screen
	$TBE_STYLES['htmlTemplates']['EXT:backend/Resources/Private/Templates/login.html'] = 'sysext/t3skin/Resources/Private/Templates/login.html';
	$GLOBALS['TBE_STYLES']['stylesheets']['admPanel'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('t3skin') . 'stylesheets/standalone/admin_panel.css';
	$flagIcons = array();
	foreach ($flagNames as $flagName) {
		$flagIcons[] = 'flags-' . $flagName;
		$flagIcons[] = 'flags-' . $flagName . '-overlay';
	}
	\TYPO3\CMS\Backend\Sprite\SpriteManager::addIconSprite($flagIcons);
	unset($flagNames, $flagName, $flagIcons);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: tstemplate
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/tstemplate/ext_tables.php
 */

$_EXTKEY = 'tstemplate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
		'web',
		'ts',
		'',
		$extensionPath . 'ts/'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'TYPO3\\CMS\\Tstemplate\\Controller\\TypoScriptTemplateConstantEditorModuleFunctionController',
		NULL,
		'LLL:EXT:tstemplate/ts/locallang.xlf:constantEditor'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'TYPO3\\CMS\\Tstemplate\\Controller\\TypoScriptTemplateInformationModuleFunctionController',
		NULL,
		'LLL:EXT:tstemplate/ts/locallang.xlf:infoModify'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'TYPO3\\CMS\\Tstemplate\\Controller\\TypoScriptTemplateObjectBrowserModuleFunctionController',
		NULL,
		'LLL:EXT:tstemplate/ts/locallang.xlf:objectBrowser'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_ts',
		'TYPO3\\CMS\\Tstemplate\\Controller\\TemplateAnalyzerModuleFunctionController',
		NULL,
		'LLL:EXT:tstemplate/ts/locallang.xlf:templateAnalyzer'
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: viewpage
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/viewpage/ext_tables.php
 */

$_EXTKEY = 'viewpage';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	// Module Web->View
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'TYPO3.CMS.' . $_EXTKEY,
		'web',
		'view',
		'after:layout',
		array(
			'ViewModule' => 'show'
		),
		array(
			'icon' => 'EXT:viewpage/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
			'access' => 'user,group'
		)
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_crpages
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/wizard_crpages/ext_tables.php
 */

$_EXTKEY = 'wizard_crpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_func',
		'TYPO3\\CMS\\WizardCrpages\\Controller\\CreatePagesWizardModuleFunctionController',
		NULL,
		'LLL:EXT:wizard_crpages/locallang.xlf:wiz_crMany',
		'wiz'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
		'_MOD_web_func',
		'EXT:wizard_crpages/locallang_csh.xlf'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: wizard_sortpages
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/wizard_sortpages/ext_tables.php
 */

$_EXTKEY = 'wizard_sortpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
		'web_func',
		'TYPO3\\CMS\\WizardSortpages\\View\\SortPagesWizardModuleFunction',
		NULL,
		'LLL:EXT:wizard_sortpages/locallang.xlf:wiz_sort',
		'wiz'
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
		'_MOD_web_func',
		'EXT:wizard_sortpages/locallang_csh.xlf'
	);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: simplelist
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/simplelist/ext_tables.php
 */

$_EXTKEY = 'simplelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Simplelist',
	'simplelist'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'simpleList');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simplelist_domain_model_simplelist', 'EXT:simplelist/Resources/Private/Language/locallang_csh_tx_simplelist_domain_model_simplelist.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simplelist_domain_model_simplelist');
$GLOBALS['TCA']['tx_simplelist_domain_model_simplelist'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:simplelist/Resources/Private/Language/locallang_db.xlf:tx_simplelist_domain_model_simplelist',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,detail,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/SimpleList.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_simplelist_domain_model_simplelist.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: flexslider
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/flexslider/ext_tables.php
 */

$_EXTKEY = 'flexslider';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Build extension name vars - used for plugin registration, flexforms and similar
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'SotaStudio.' . $_EXTKEY,
	'Pi1',
	'FlexSlider'
);


// Clean up the Flexform fields in the backend a bit
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,splash_layout';
// Add own flexform stuff.
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

// Add custom Flexform fields
ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');

// Add static TypoScript
ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FlexSlider');

ExtensionManagementUtility::addLLrefForTCAdescr('tx_flexslider_domain_model_flexslider', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_csh_tx_flexslider_domain_model_flexslider.xml');
ExtensionManagementUtility::allowTableOnStandardPages('tx_flexslider_domain_model_flexslider');
$TCA['tx_flexslider_domain_model_flexslider'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:flexslider/Resources/Private/Language/locallang_db.xml:tx_flexslider_domain_model_flexslider',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/FlexSlider.php',
		'iconfile' => ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_flexslider_domain_model_flexslider.gif'
	),
);

/**
 * Add Plugin to New Content Element Wizard
 */
/*
if (TYPO3_MODE === 'BE') {
	// Add Plugin to CE Wizard
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses'][$pluginSignature . '_wizicon'] = ExtensionManagementUtility::extPath($_EXTKEY) . 'Resources/Private/Php/class.' . $_EXTKEY . '_wizicon.php';
}
*/

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: usermynews
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/usermynews/ext_tables.php
 */

$_EXTKEY = 'usermynews';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Usernews',
	'User News'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'User My News');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_usermynews_domain_model_usernews', 'EXT:usermynews/Resources/Private/Language/locallang_csh_tx_usermynews_domain_model_usernews.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_usermynews_domain_model_usernews');
$GLOBALS['TCA']['tx_usermynews_domain_model_usernews'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:usermynews/Resources/Private/Language/locallang_db.xlf:tx_usermynews_domain_model_usernews',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,image,date,detail,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/UserNews.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_usermynews_domain_model_usernews.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: extension_builder
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/extension_builder/ext_tables.php
 */

$_EXTKEY = 'extension_builder';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}



if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	\EBT\ExtensionBuilder\Parser\AutoLoader::register();
	/**
	 * Register Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'EBT.' . $_EXTKEY,
		'tools',
		'extensionbuilder',
		'',
		array(
			'BuilderModule' => 'index,domainmodelling,dispatchRpc',
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:extension_builder/ext_icon.gif',
			'labels' => 'LLL:EXT:extension_builder/Resources/Private/Language/locallang_mod.xlf',
		)
	);

	// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
	//     'ExtensionBuilder::wiringEditorSmdEndpoint',
	//	   'EBT\ExtensionBuilder\Configuration\ConfigurationManager->getWiringEditorSmd'
	// );
	// To stay compatible with older TYPO3 versions, we register the ajax script the
	// old way. It is also OK to not have this Ajax call to be CSRF protected as it
	// is of no use for an attacker in this scenario even if the result contains the
	// module token.
	$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['ExtensionBuilder::wiringEditorSmdEndpoint'] = '' .
		'EBT\ExtensionBuilder\Configuration\ConfigurationManager->getWiringEditorSmd';

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: kickstarter
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/kickstarter/ext_tables.php
 */

$_EXTKEY = 'kickstarter';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

if (TYPO3_MODE=="BE")	{
	t3lib_extMgm::insertModuleFunction(
		"tools_em",
		"tx_kickstarter_modfunc1",
		t3lib_extMgm::extPath($_EXTKEY)."modfunc1/class.tx_kickstarter_modfunc1.php",
		"LLL:EXT:kickstarter/locallang_db.xml:moduleFunction.tx_kickstarter_modfunc1"
	);
	t3lib_extMgm::insertModuleFunction(
		"tools_em",
		"tx_kickstarter_modfunc2",
		t3lib_extMgm::extPath($_EXTKEY)."modfunc1/class.tx_kickstarter_modfunc1.php",
		"LLL:EXT:kickstarter/locallang_db.xml:moduleFunction.tx_kickstarter_modfunc2",
		'singleDetails'
	);
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: templavoila
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/templavoila/ext_tables.php
 */

$_EXTKEY = 'templavoila';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


# TYPO3 CVS ID: $Id$
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// unserializing the configuration so we can use it here:
$_EXTCONF = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['templavoila']);

if (TYPO3_MODE == 'BE') {

	// Adding click menu item:
	$GLOBALS['TBE_MODULES_EXT']['xMOD_alt_clickmenu']['extendCMclasses'][] = array(
		'name' => 'tx_templavoila_cm1',
		'path' => t3lib_extMgm::extPath($_EXTKEY) . 'class.tx_templavoila_cm1.php'
	);
	include_once(t3lib_extMgm::extPath('templavoila') . 'class.tx_templavoila_handlestaticdatastructures.php');

	// Adding backend modules:
	t3lib_extMgm::addModule('web', 'txtemplavoilaM1', 'top', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
	t3lib_extMgm::addModule('web', 'txtemplavoilaM2', '', t3lib_extMgm::extPath($_EXTKEY) . 'mod2/');

	// Remove default Page module (layout) manually if wanted:
	if (!$_EXTCONF['enable.']['oldPageModule']) {
		$tmp = $GLOBALS['TBE_MODULES']['web'];
		$GLOBALS['TBE_MODULES']['web'] = str_replace(',,', ',', str_replace('layout', '', $tmp));
		unset ($GLOBALS['TBE_MODULES']['_PATHS']['web_layout']);
	}

	// Registering CSH:
	t3lib_extMgm::addLLrefForTCAdescr('be_groups', 'EXT:templavoila/Resources/Private/Language/locallang_csh_begr.xml');
	t3lib_extMgm::addLLrefForTCAdescr('pages', 'EXT:templavoila/Resources/Private/Language/locallang_csh_pages.xml');
	t3lib_extMgm::addLLrefForTCAdescr('tt_content', 'EXT:templavoila/Resources/Private/Language/locallang_csh_ttc.xml');
	t3lib_extMgm::addLLrefForTCAdescr('tx_templavoila_datastructure', 'EXT:templavoila/Resources/Private/Language/locallang_csh_ds.xml');
	t3lib_extMgm::addLLrefForTCAdescr('tx_templavoila_tmplobj', 'EXT:templavoila/Resources/Private/Language/locallang_csh_to.xml');
	t3lib_extMgm::addLLrefForTCAdescr('xMOD_tx_templavoila', 'EXT:templavoila/Resources/Private/Language/locallang_csh_module.xml');
	t3lib_extMgm::addLLrefForTCAdescr('xEXT_templavoila', 'EXT:templavoila/Resources/Private/Language/locallang_csh_intro.xml');
	t3lib_extMgm::addLLrefForTCAdescr('_MOD_web_txtemplavoilaM1', 'EXT:templavoila/Resources/Private/Language/locallang_csh_pm.xml');

	t3lib_extMgm::insertModuleFunction(
		'tools_txextdevevalM1',
		'tx_templavoila_extdeveval',
		t3lib_extMgm::extPath($_EXTKEY) . 'class.tx_templavoila_extdeveval.php',
		'TemplaVoila L10N Mode Conversion Tool'
	);
}

// Adding tables:
$TCA['tx_templavoila_tmplobj'] = Array(
	'ctrl' => Array(
		'title' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tx_templavoila_tmplobj',
		'label' => 'title',
		'label_userFunc' => 'EXT:templavoila/classes/class.tx_templavoila_label.php:&tx_templavoila_label->getLabel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'default_sortby' => 'ORDER BY title',
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icon/icon_to.gif',
		'selicon_field' => 'previewicon',
		'selicon_field_path' => 'uploads/tx_templavoila',
		'type' => 'parent', // kept to make sure the user is force to reload the form
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'shadowColumnsForNewPlaceholders' => 'title,datastructure,rendertype,sys_language_uid,parent,rendertype_ref',
	)
);
$TCA['tx_templavoila_datastructure'] = Array(
	'ctrl' => Array(
		'title' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tx_templavoila_datastructure',
		'label' => 'title',
		'label_userFunc' => 'EXT:templavoila/classes/class.tx_templavoila_label.php:&tx_templavoila_label->getLabel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'default_sortby' => 'ORDER BY title',
		'delete' => 'deleted',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icon/icon_ds.gif',
		'selicon_field' => 'previewicon',
		'selicon_field_path' => 'uploads/tx_templavoila',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'shadowColumnsForNewPlaceholders' => 'scope,title',
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_templavoila_datastructure');
t3lib_extMgm::allowTableOnStandardPages('tx_templavoila_tmplobj');


// Adding access list to be_groups
t3lib_div::loadTCA('be_groups');
$tempColumns = array(
	'tx_templavoila_access' => array(
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:be_groups.tx_templavoila_access',
		'config' => Array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'tx_templavoila_datastructure,tx_templavoila_tmplobj',
			'prepend_tname' => 1,
			'size' => 5,
			'autoSizeMax' => 15,
			'multiple' => 1,
			'minitems' => 0,
			'maxitems' => 1000,
			'show_thumbs' => 1,
		),
	)
);
t3lib_extMgm::addTCAcolumns('be_groups', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('be_groups', 'tx_templavoila_access;;;;1-1-1', '1');

// Adding the new content element, "Flexible Content":
t3lib_div::loadTCA('tt_content');
$tempColumns = array(
	'tx_templavoila_ds' => Array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tt_content.tx_templavoila_ds',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array('', 0),
			),
			'allowNonIdValues' => 1,
			'itemsProcFunc' => 'tx_templavoila_handleStaticdatastructures->dataSourceItemsProcFunc',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'selicon_cols' => 10,
		)
	),
	'tx_templavoila_to' => Array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tt_content.tx_templavoila_to',
		'displayCond' => 'FIELD:CType:=:' . $_EXTKEY . '_pi1',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array('', 0),
			),
			'itemsProcFunc' => 'tx_templavoila_handleStaticdatastructures->templateObjectItemsProcFunc',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'selicon_cols' => 10,
		)
	),
	'tx_templavoila_flex' => Array(
		'l10n_cat' => 'text',
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tt_content.tx_templavoila_flex',
		'displayCond' => 'FIELD:tx_templavoila_ds:REQ:true',
		'config' => Array(
			'type' => 'flex',
			'ds_pointerField' => 'tx_templavoila_ds',
			'ds_tableField' => 'tx_templavoila_datastructure:dataprot',
		)
	),
	'tx_templavoila_pito' => Array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tt_content.tx_templavoila_pito',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array('', 0),
			),
			'itemsProcFunc' => 'tx_templavoila_handleStaticdatastructures->pi_templates',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'selicon_cols' => 10,
		)
	),
);
t3lib_extMgm::addTCAcolumns('tt_content', $tempColumns, 1);

$TCA['tt_content']['ctrl']['typeicons'][$_EXTKEY . '_pi1'] = t3lib_extMgm::extRelPath($_EXTKEY) . '/Resources/Public/Icon/icon_fce_ce.png';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$_EXTKEY . '_pi1'] = 'extensions-templavoila-type-fce';
t3lib_extMgm::addPlugin(array('LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tt_content.CType_pi1', $_EXTKEY . '_pi1', 'EXT:' . $_EXTKEY . '/Resources/Public/Icon/icon_fce_ce.png'), 'CType');

if ($_EXTCONF['enable.']['selectDataStructure']) {
	if ($TCA['tt_content']['ctrl']['requestUpdate'] != '') {
		$TCA['tt_content']['ctrl']['requestUpdate'] .= ',';
	}
	$TCA['tt_content']['ctrl']['requestUpdate'] .= 'tx_templavoila_ds';
}


if (tx_templavoila_div::convertVersionNumberToInteger(TYPO3_version) >= 4005000) {

	$TCA['tt_content']['types'][$_EXTKEY . '_pi1']['showitem'] =
		'--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.headers;headers,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
		--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
	--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';
	if ($_EXTCONF['enable.']['selectDataStructure']) {
		t3lib_extMgm::addToAllTCAtypes('tt_content', 'tx_templavoila_ds;;;;1-1-1,tx_templavoila_to', $_EXTKEY . '_pi1', 'after:layout');
	} else {
		t3lib_extMgm::addToAllTCAtypes('tt_content', 'tx_templavoila_to', $_EXTKEY . '_pi1', 'after:layout');
	}
	t3lib_extMgm::addToAllTCAtypes('tt_content', 'tx_templavoila_flex;;;;1-1-1', $_EXTKEY . '_pi1', 'after:subheader');
} else {
	$TCA['tt_content']['types'][$_EXTKEY . '_pi1']['showitem'] =
		'CType;;4;;1-1-1, hidden, header;;' . (($_EXTCONF['enable.']['renderFCEHeader']) ? '3' : '') . ';;2-2-2, linkToTop;;;;3-3-3,
		--div--;LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:tt_content.CType_pi1,' . (($_EXTCONF['enable.']['selectDataStructure']) ? 'tx_templavoila_ds,' : '') . 'tx_templavoila_to,tx_templavoila_flex;;;;2-2-2,
		--div--;LLL:EXT:cms/locallang_tca.xml:pages.tabs.access, starttime, endtime, fe_group';
}


// For pages:
$tempColumns = array(
	'tx_templavoila_ds' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:pages.tx_templavoila_ds',
		'config' => array(
			'type' => 'select',
			'items' => Array(
				array('', 0),
			),
			'allowNonIdValues' => 1,
			'itemsProcFunc' => 'tx_templavoila_handleStaticdatastructures->dataSourceItemsProcFunc',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'suppress_icons' => 'ONLY_SELECTED',
			'selicon_cols' => 10,
		)
	),
	'tx_templavoila_to' => Array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:pages.tx_templavoila_to',
		'displayCond' => 'FIELD:tx_templavoila_ds:REQ:true',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array('', 0),
			),
			'itemsProcFunc' => 'tx_templavoila_handleStaticdatastructures->templateObjectItemsProcFunc',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'suppress_icons' => 'ONLY_SELECTED',
			'selicon_cols' => 10,
		)
	),
	'tx_templavoila_next_ds' => Array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:pages.tx_templavoila_next_ds',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array('', 0),
			),
			'allowNonIdValues' => 1,
			'itemsProcFunc' => 'tx_templavoila_handleStaticdatastructures->dataSourceItemsProcFunc',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'suppress_icons' => 'ONLY_SELECTED',
			'selicon_cols' => 10,
		)
	),
	'tx_templavoila_next_to' => Array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:pages.tx_templavoila_next_to',
		'displayCond' => 'FIELD:tx_templavoila_next_ds:REQ:true',
		'config' => Array(
			'type' => 'select',
			'items' => Array(
				Array('', 0),
			),
			'itemsProcFunc' => 'tx_templavoila_handleStaticdatastructures->templateObjectItemsProcFunc',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
			'suppress_icons' => 'ONLY_SELECTED',
			'selicon_cols' => 10,
		)
	),
	'tx_templavoila_flex' => Array(
		'exclude' => 1,
		'label' => 'LLL:EXT:templavoila/Resources/Private/Language/locallang_db.xml:pages.tx_templavoila_flex',
		'config' => Array(
			'type' => 'flex',
			'ds_pointerField' => 'tx_templavoila_ds',
			'ds_pointerField_searchParent' => 'pid',
			'ds_pointerField_searchParent_subField' => 'tx_templavoila_next_ds',
			'ds_tableField' => 'tx_templavoila_datastructure:dataprot',
		)
	),
);
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
if ($_EXTCONF['enable.']['selectDataStructure']) {

	if (tx_templavoila_div::convertVersionNumberToInteger(TYPO3_version) >= 4005000) {
		t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_ds;;;;1-1-1,tx_templavoila_to', '', 'replace:backend_layout');
		t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_next_ds;;;;1-1-1,tx_templavoila_next_to', '', 'replace:backend_layout_next_level');
		t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_flex;;;;1-1-1', '', 'after:title');
	} else {
		t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_ds;;;;1-1-1,tx_templavoila_to,tx_templavoila_next_ds;;;;1-1-1,tx_templavoila_next_to,tx_templavoila_flex;;;;1-1-1');
	}

	if ($TCA['pages']['ctrl']['requestUpdate'] != '') {
		$TCA['pages']['ctrl']['requestUpdate'] .= ',';
	}
	$TCA['pages']['ctrl']['requestUpdate'] .= 'tx_templavoila_ds,tx_templavoila_next_ds';
} else {
	if (tx_templavoila_div::convertVersionNumberToInteger(TYPO3_version) >= 4005000) {
		if (!$_EXTCONF['enable.']['oldPageModule']) {
			t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_to;;;;1-1-1', '', 'replace:backend_layout');
			t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_next_to;;;;1-1-1', '', 'replace:backend_layout_next_level');
			t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_flex;;;;1-1-1', '', 'after:title');
		} else {
			t3lib_extMgm::addFieldsToPalette('pages', 'layout', '--linebreak--, tx_templavoila_to;;;;1-1-1, tx_templavoila_next_to;;;;1-1-1', 'after:backend_layout_next_level');
			t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_flex;;;;1-1-1', '', 'after:title');
		}
	} else {
		t3lib_extMgm::addToAllTCAtypes('pages', 'tx_templavoila_to;;;;1-1-1,tx_templavoila_next_to;;;;1-1-1,tx_templavoila_flex;;;;1-1-1');
	}

	unset($TCA['pages']['columns']['tx_templavoila_to']['displayCond']);
	unset($TCA['pages']['columns']['tx_templavoila_next_to']['displayCond']);
}

// Configure the referencing wizard to be used in the web_func module:
if (TYPO3_MODE == 'BE') {
	t3lib_extMgm::insertModuleFunction(
		'web_func',
		'tx_templavoila_referenceElementsWizard',
		t3lib_extMgm::extPath($_EXTKEY) . 'func_wizards/class.tx_templavoila_referenceelementswizard.php',
		'LLL:EXT:templavoila/Resources/Private/Language/locallang.xml:wiz_refElements',
		'wiz'
	);
	t3lib_extMgm::insertModuleFunction(
		'web_func',
		'tx_templavoila_renameFieldInPageFlexWizard',
		t3lib_extMgm::extPath($_EXTKEY) . 'func_wizards/class.tx_templavoila_renamefieldinpageflexwizard.php',
		'LLL:EXT:templavoila/Resources/Private/Language/locallang.xml:wiz_renameFieldsInPage',
		'wiz'
	);
	t3lib_extMgm::addLLrefForTCAdescr('_MOD_web_func', 'EXT:wizard_crpages/locallang_csh.xml');
}
// complex condition to make sure the icons are available during frontend editing...
if (TYPO3_MODE == 'BE' ||
	(TYPO3_MODE == 'FE' && isset($GLOBALS['BE_USER']) && method_exists($GLOBALS['BE_USER'], 'isFrontendEditingActive') && $GLOBALS['BE_USER']->isFrontendEditingActive())
) {
	$icons = array(
		'paste' => t3lib_extMgm::extRelPath('templavoila') . 'mod1/clip_pasteafter.gif',
		'pasteSubRef' => t3lib_extMgm::extRelPath('templavoila') . 'mod1/clip_pastesubref.gif',
		'makelocalcopy' => t3lib_extMgm::extRelPath('templavoila') . 'mod1/makelocalcopy.gif',
		'clip_ref' => t3lib_extMgm::extRelPath('templavoila') . 'mod1/clip_ref.gif',
		'clip_ref-release' => t3lib_extMgm::extRelPath('templavoila') . 'mod1/clip_ref_h.gif',
		'unlink' => t3lib_extMgm::extRelPath('templavoila') . 'mod1/unlink.png',
		'htmlvalidate' => t3lib_extMgm::extRelPath('templavoila') . 'Resources/Public/Icon/html_go.png',
		'type-fce' => t3lib_extMgm::extRelPath('templavoila') . 'Resources/Public/Icon/icon_fce_ce.png'
	);
	t3lib_SpriteManager::addSingleIcons($icons, $_EXTKEY);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: realurl
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/realurl/ext_tables.php
 */

$_EXTKEY = 'realurl';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if (TYPO3_MODE=='BE')	{
//	t3lib_extMgm::addModule('tools','txrealurlM1','',t3lib_extMgm::extPath($_EXTKEY).'mod1/');

	// Add Web>Info module:
	t3lib_extMgm::insertModuleFunction(
		'web_info',
		'tx_realurl_modfunc1',
		t3lib_extMgm::extPath($_EXTKEY) . 'modfunc1/class.tx_realurl_modfunc1.php',
		'LLL:EXT:realurl/locallang_db.xml:moduleFunction.tx_realurl_modfunc1',
		'function',
		'online'
	);
}

if (version_compare(TYPO3_branch, '6.1', '<')) {
	t3lib_div::loadTCA('pages');
}
$TCA['pages']['columns'] += array(
	'tx_realurl_pathsegment' => array(
		'label' => 'LLL:EXT:realurl/locallang_db.xml:pages.tx_realurl_pathsegment',
		'displayCond' => 'FIELD:tx_realurl_exclude:!=:1',
		'exclude' => 1,
		'config' => array (
			'type' => 'input',
			'max' => 255,
			'eval' => 'trim,nospace,lower'
		),
	),
	'tx_realurl_pathoverride' => array(
		'label' => 'LLL:EXT:realurl/locallang_db.xml:pages.tx_realurl_path_override',
		'exclude' => 1,
		'config' => array (
			'type' => 'check',
			'items' => array(
				array('', '')
			)
		)
	),
	'tx_realurl_exclude' => array(
		'label' => 'LLL:EXT:realurl/locallang_db.xml:pages.tx_realurl_exclude',
		'exclude' => 1,
		'config' => array (
			'type' => 'check',
			'items' => array(
				array('', '')
			)
		)
	),
	'tx_realurl_nocache' => array(
		'label' => 'LLL:EXT:realurl/locallang_db.xml:pages.tx_realurl_nocache',
		'exclude' => 1,
		'config' => array (
			'type' => 'check',
			'items' => array(
				array('', ''),
			),
		),
	)
);

$TCA['pages']['ctrl']['requestUpdate'] .= ',tx_realurl_exclude';

$TCA['pages']['palettes']['137'] = array(
	'showitem' => 'tx_realurl_pathoverride'
);

if (t3lib_div::compat_version('4.3')) {
	t3lib_extMgm::addFieldsToPalette('pages', '3', 'tx_realurl_nocache', 'after:cache_timeout');
}
if (t3lib_div::compat_version('4.2')) {
	// For 4.2 or new add fields to advanced page only
	t3lib_extMgm::addToAllTCAtypes('pages', 'tx_realurl_pathsegment;;137;;,tx_realurl_exclude', '1', 'after:nav_title');
	t3lib_extMgm::addToAllTCAtypes('pages', 'tx_realurl_pathsegment;;137;;,tx_realurl_exclude', '4,199,254', 'after:title');
}
else {
	// Put it for standard page
	t3lib_extMgm::addToAllTCAtypes('pages', 'tx_realurl_pathsegment;;137;;,tx_realurl_exclude', '2', 'after:nav_title');
	t3lib_extMgm::addToAllTCAtypes('pages', 'tx_realurl_pathsegment;;137;;,tx_realurl_exclude', '1,5,4,199,254', 'after:title');
}

t3lib_extMgm::addLLrefForTCAdescr('pages','EXT:realurl/locallang_csh.xml');

$TCA['pages_language_overlay']['columns'] += array(
	'tx_realurl_pathsegment' => array(
		'label' => 'LLL:EXT:realurl/locallang_db.xml:pages.tx_realurl_pathsegment',
		'exclude' => 1,
		'config' => array (
			'type' => 'input',
			'max' => 255,
			'eval' => 'trim,nospace,lower'
		),
	),
);

t3lib_extMgm::addToAllTCAtypes('pages_language_overlay', 'tx_realurl_pathsegment', '', 'after:nav_title');



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: dp_kickstart_theme
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/dp_kickstart_theme/ext_tables.php
 */

$_EXTKEY = 'dp_kickstart_theme';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if(!defined('TYPO3_MODE')){
    die('Access denied.');
}


/***************
 * Default TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Kickstart Theme');


/***************
 * BackendLayoutDataProvider
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider'][$_EXTKEY] = 'DP\DpKickstartTheme\Hooks\Options\BackendLayoutDataProvider';


/***************
 * DataHandler Hook
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] = 'DP\DpKickstartTheme\Hooks\DataHandler';


/***************
 * Adding visibility to content elements and pages
 */
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_content');

$temporaryColumn = array(
	'tx_dpkickstarttheme_responsive_hide' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/Backend.xlf:tx_dpkickstarttheme_responsive_hide',
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1' => array(
					'0' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/Backend.xlf:tx_dpkickstarttheme_responsive_hide.phone'
				),
				'2' => array(
					'0' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/Backend.xlf:tx_dpkickstarttheme_responsive_hide.tablet'
				),
				'3' => array(
					'0' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/Backend.xlf:tx_dpkickstarttheme_responsive_hide.desktop'
				)
			)
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $temporaryColumn, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('pages', 'visibility', 'tx_dpkickstarttheme_responsive_hide', 'after:nav_hide');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumn, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'visibility', 'tx_dpkickstarttheme_responsive_hide', 'after:linkToTop');


/***************
 * Backend Styling
 */
if (TYPO3_MODE == 'BE') {
    $settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
    if(!isset($settings['Logo'])){
        $settings['Logo'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/Backend/TopBarLogo@2x.png';
    }
    if(!isset($settings['LoginLogo'])){
        $settings['LoginLogo'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/Backend/LoginLogo.png';
    }
    $GLOBALS['TBE_STYLES']['logo'] = $settings['Logo'];
    $GLOBALS['TBE_STYLES']['logo_login'] = $settings['LoginLogo'];
    $GLOBALS['TBE_STYLES']['htmlTemplates']['EXT:backend/Resources/Private/Templates/login.html'] = 'EXT:dp_kickstart_theme/Resources/Private/Templates/Backend/Login.html';
    unset($settings);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

/**
 * Extension: static_info_tables
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/static_info_tables/ext_tables.php
 */

$_EXTKEY = 'static_info_tables';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// Configure extension static template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Static', 'Static Info Tables');

$typo3Version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
$extensionResourcesLanguagePath = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_db.xlf:';
$extensionConfigurationTcaPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/Tca/';
$extensionResourcesIconsPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Images/Icons/';

// Country reference data from ISO 3166-1
$GLOBALS['TCA']['static_countries'] = array(
	'ctrl' => array(
		'label' => 'cn_short_en',
		'label_alt' => 'cn_iso_2',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY cn_short_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_countries.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Country.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_countries.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'cn_iso_2,cn_iso_3,cn_iso_nr,cn_official_name_local,cn_official_name_en,cn_capital,cn_tldomain,cn_currency_iso_3,cn_currency_iso_nr,cn_phone,cn_uno_member,cn_eu_member,cn_address_format,cn_short_en'
	)
);

// Country subdivision reference data from ISO 3166-2
$GLOBALS['TCA']['static_country_zones'] = array(
	'ctrl' => array(
		'label' => 'zn_name_local',
		'label_alt' => 'zn_name_local,zn_code',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY zn_name_local',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_country_zones.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'CountryZone.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_countries.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'zn_country_iso_nr,zn_country_iso_3,zn_code,zn_name_local,zn_name_en'
	)
);

// Currency reference data from ISO 4217
$GLOBALS['TCA']['static_currencies'] = array(
	'ctrl' => array(
		'label' => 'cu_name_en',
		'label_alt' => 'cu_iso_3',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY cu_name_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_currencies.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Currency.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_currencies.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'cu_iso_3,cu_iso_nr,cu_name_en,cu_symbol_left,cu_symbol_right,cu_thousands_point,cu_decimal_point,cu_decimal_digits,cu_sub_name_en,cu_sub_divisor,cu_sub_symbol_left,cu_sub_symbol_right'
	)
);

// Language reference data from ISO 639-1
$GLOBALS['TCA']['static_languages'] = array(
	'ctrl' => array(
		'label' => 'lg_name_en',
		'label_alt' => 'lg_iso_2',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY lg_name_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_languages.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Language.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_languages.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'lg_name_local,lg_name_en,lg_iso_2,lg_typo3,lg_country_iso_2,lg_collate_locale,lg_sacred,lg_constructed'
	)
);

// UN Territory reference data 
$GLOBALS['TCA']['static_territories'] = array(
	'ctrl' => array(
		'label' => 'tr_name_en',
		'label_alt' => 'tr_iso_nr',
		'label_alt_force' => 1,
		'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper->addIsoCodeToLabel',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'readOnly' => 1,
		'default_sortby' => 'ORDER BY tr_name_en',
		'delete' => 'deleted',
		'title' => $extensionResourcesLanguagePath . 'static_territories.title',
		'dynamicConfigFile' => $extensionConfigurationTcaPath . 'Territory.php',
		'iconfile' => $extensionResourcesIconsPath . 'icon_static_territories.gif',
	),
	'interface' => array(
		'showRecordFieldList' => 'tr_name_en,tr_iso_nr'
	)
);

unset($extensionResourcesLanguagePath);
unset($extensionConfigurationTcaPath);
unset($extensionResourcesIconsPath);

// Configure static language field of sys_language table
if ($typo3Version < 6001000) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('sys_language');
}
$GLOBALS['TCA']['sys_language']['columns']['static_lang_isocode']['config'] = array(
	'type' => 'select',
	'items' => array(
		array('',0)
	),
	'foreign_table' => 'static_languages',
	'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
	'itemsProcFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper->translateLanguagesSelector',
	'size' => '1',
	'minitems' => '0',
	'maxitems' => '1',
	'wizards' => array(
		'suggest' => array(
			'type' => 'suggest',
			'default' => array(
				'receiverClass' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\SuggestReceiver'
			)
		)
	)
);

if (TYPO3_MODE == 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	/**
	 * Registers the Static Info Tables Manager backend module, if enabled
	 */
	if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['enableManager']) {
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
			$_EXTKEY,
			// Make module a submodule of 'tools'
			'tools',
			// Submodule key
			'Manager',
			// Position
			'',
			// An array holding the controller-action combinations that are accessible
			array(
				'Manager' => 'information,newLanguagePack,createLanguagePack,testForm,testFormResult,sqlDumpNonLocalizedData'
			),
			array(
				'access' => 'user,group',
				'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Images/Icons/moduleicon.gif',
				'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf'
			)
		);
		// Add module configuration setup
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/Manager/setup.txt">');
		
		// Enable editing Static Info Tables
		if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'])) {
			$tableNames = array_keys($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables']);
			foreach ($tableNames as $tableName) {
				if ($typo3Version < 6001000) {
					\SJBR\StaticInfoTables\Utility\TcaUtility::loadTCA($tableName);
				}
				$GLOBALS['TCA'][$tableName]['ctrl']['readOnly'] = 0;
			}
		}
	}
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::loadNewTcaColumnsConfigFiles();

#