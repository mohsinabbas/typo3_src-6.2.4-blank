<?php
/**
 * Compiled ext_localconf.php cache file
 */

global $TYPO3_CONF_VARS, $T3_SERVICES, $T3_VAR;

/**
 * Extension: core
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/core/ext_localconf.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	$signalSlotDispatcher->connect(
		'TYPO3\\CMS\\Core\\Resource\\ResourceFactory',
		\TYPO3\CMS\Core\Resource\ResourceFactoryInterface::SIGNAL_PostProcessStorage,
		'TYPO3\\CMS\\Core\\Resource\\Security\\StoragePermissionsAspect',
		'addUserPermissionsToStorage'
	);
	$signalSlotDispatcher->connect(
		'PackageManagement',
		'packagesMayHaveChanged',
		'TYPO3\\CMS\\Core\\Package\\PackageManager',
		'scanAvailablePackages'
	);
}

$signalSlotDispatcher->connect(
	'TYPO3\\CMS\\Core\\Resource\\ResourceStorage',
	\TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileDelete,
	'TYPO3\\CMS\\Core\\Resource\\Processing\\FileDeletionAspect',
	'removeFromRepository'
);

unset($signalSlotDispatcher);

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = 'EXT:core/Resources/PHP/FileDumpEID.php';


/**
 * Extension: backend
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/backend/ext_localconf.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher')->connect(
		'TYPO3\\CMS\\Core\\Tree\\TableConfiguration\\TableConfiguration\\DatabaseTreeDataProvider',
		\TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::SIGNAL_PostProcessTreeData,
		'TYPO3\\CMS\\Backend\\Security\\CategoryPermissionsAspect',
		'addUserPermissionsToCategoryTreeData'
	);
}


/**
 * Extension: extensionmanager
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/extensionmanager/ext_localconf.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register extension list update task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Extensionmanager\\Task\\UpdateExtensionListTask'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
	'description' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
	'additionalFields' => '',
);

if (TYPO3_MODE === 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = 'TYPO3\\CMS\\Extensionmanager\\Command\\ExtensionCommandController';
	if (!(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
		$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
		$signalSlotDispatcher->connect(
			'TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService',
			'willInstallExtensions',
			'TYPO3\\CMS\\Core\\Package\\PackageManager',
			'scanAvailablePackages'
		);
		$signalSlotDispatcher->connect(
			'TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService',
			'hasInstalledExtensions',
			'TYPO3\\CMS\\Core\\Package\\PackageManager',
			'updatePackagesForClassLoader'
		);
		$signalSlotDispatcher->connect(
			'TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility',
			'tablesDefinitionIsBeingBuilt',
			'TYPO3\\CMS\\Core\\Cache\\Cache',
			'addCachingFrameworkRequiredDatabaseSchemaToTablesDefinition'
		);
		$signalSlotDispatcher->connect(
			'TYPO3\\CMS\\Extensionmanager\\Utility\\InstallUtility',
			'tablesDefinitionIsBeingBuilt',
			'TYPO3\\CMS\\Core\\Category\\CategoryRegistry',
			'addExtensionCategoryDatabaseSchemaToTablesDefinition'
		);
	}
}


/**
 * Extension: cms
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/cms/ext_localconf.php
 */

$_EXTKEY = 'cms';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocView = 1
	options.saveDocNew = 1
	options.saveDocNew.pages = 0
	options.saveDocNew.sys_file = 0
	options.disableDelete.sys_file = 1
	TCAdefaults.tt_content.imagecols = 2
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod.wizards.newContentElement {
	renderMode = tabs
	wizardItems {
		common.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common
		common.elements {
			header {
				icon = gfx/c_wiz/regular_header.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_headerOnly_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_headerOnly_description
				tt_content_defValues {
					CType = header
				}
			}
			text {
				icon = gfx/c_wiz/regular_text.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_regularText_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_regularText_description
				tt_content_defValues {
					CType = text
				}
			}
			textpic {
				icon = gfx/c_wiz/text_image_right.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_textImage_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_textImage_description
				tt_content_defValues {
					CType = textpic
					imageorient = 17
				}
			}
			image {
				icon = gfx/c_wiz/images_only.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_imagesOnly_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_imagesOnly_description
				tt_content_defValues {
					CType = image
				}
			}
			bullets {
				icon = gfx/c_wiz/bullet_list.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_bulletList_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_bulletList_description
				tt_content_defValues {
					CType = bullets
				}
			}
			table {
				icon = gfx/c_wiz/table.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_table_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:common_table_description
				tt_content_defValues {
					CType = table
				}
			}

		}
		common.show = header,text,textpic,image,bullets,table

		special.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special
		special.elements {
			uploads {
				icon = gfx/c_wiz/filelinks.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_filelinks_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_filelinks_description
				tt_content_defValues {
					CType = uploads
				}
			}
			multimedia {
				icon = gfx/c_wiz/multimedia.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_multimedia_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_multimedia_description
				tt_content_defValues {
					CType = multimedia
				}
			}
			media {
				icon = gfx/c_wiz/multimedia.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_media_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_media_description
				tt_content_defValues {
					CType = media
				}
			}
			menu {
				icon = gfx/c_wiz/sitemap2.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_menus_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_menus_description
				tt_content_defValues {
					CType = menu
					menu_type = 0
				}
			}
			html {
				icon = gfx/c_wiz/html.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_plainHTML_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_plainHTML_description
				tt_content_defValues {
					CType = html
				}
			}
			div {
				icon = gfx/c_wiz/div.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_divider_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_divider_description
				tt_content_defValues {
					CType = div
				}
			}
			shortcut {
				icon = gfx/c_wiz/shortcut.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_shortcut_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:special_shortcut_description
				tt_content_defValues {
					CType = shortcut
				}
			}

		}
		special.show = uploads,media,menu,html,div,shortcut

		forms.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms
		forms.elements {
			mailform {
				icon = gfx/c_wiz/mailform.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_mail_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_mail_description
				tt_content_defValues {
					CType = mailform
					bodytext (
	# Example content:
	Name: | *name = input,40 | Enter your name here
	Email: | *email=input,40 |
	Address: | address=textarea,40,5 |
	Contact me: | tv=check | 1

	|formtype_mail = submit | Send form!
	|html_enabled=hidden | 1
	|subject=hidden| This is the subject
					)
				}
			}
			search {
				icon = gfx/c_wiz/searchform.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_search_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_search_description
				tt_content_defValues {
					CType = search
				}
			}
		}
		forms.show = mailform,search

		plugins.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:plugins
		plugins.elements {
			general {
				icon = gfx/c_wiz/user_defined.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:plugins_general_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:plugins_general_description
				tt_content_defValues.CType = list
			}
		}
		plugins.show = *
	}
}

');

$TYPO3_CONF_VARS['SYS']['contentTable'] = 'tt_content';
$TYPO3_CONF_VARS['FE']['eID_include']['tx_cms_showpic'] = 'EXT:cms/tslib/showpic.php';

if ((TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['compat_version']['cms'] = array(
		'title' => 'CMS Frontend',
		'version' => 4000000,
		'description' => '<ul>' . '<li><p>The extension simluatestatic has been removed in TYPO3 6.0</p></li>' . '<li><p>CSS Stylesheets and JavaScript are put into an external file by default.</p>' . '<p>Technically, that means that the default value of "config.inlineStyle2TempFile" is now set to "1" and that of "config.removeDefaultJS" to "external"</p></li>' . '</ul>'
	);
}

// Registering hooks for the treelist cache
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'TYPO3\\CMS\\Frontend\\Hooks\\TreelistCacheUpdateHooks';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = 'TYPO3\\CMS\\Frontend\\Hooks\\TreelistCacheUpdateHooks';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = 'TYPO3\\CMS\\Frontend\\Hooks\\TreelistCacheUpdateHooks';

if (TYPO3_MODE === 'FE') {
	// Register the core media wizard provider
	\TYPO3\CMS\Frontend\MediaWizard\MediaWizardProviderManager::registerMediaWizardProvider('TYPO3\\CMS\\Frontend\\MediaWizard\\MediaWizardProvider');
	// Register eID provider for ExtDirect for the frontend
	$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['ExtDirect'] = PATH_tslib . 'extdirecteid.php';
}
// Register search keys
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';
// Register hook to show preview info
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_previewInfo']['cms'] = 'TYPO3\\CMS\\Frontend\\Hooks\\FrontendHooks->hook_previewInfo';


/**
 * Extension: frontend
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/frontend/ext_localconf.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (TYPO3_MODE === 'FE' && !isset($_REQUEST['eID'])) {
	\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher')->connect(
		'TYPO3\\CMS\\Core\\Resource\\Index\\MetaDataRepository',
		'recordPostRetrieval',
		'TYPO3\\CMS\\Frontend\\Aspect\\FileMetadataOverlayAspect',
		'languageAndWorkspaceOverlay'
	);
}


/**
 * Extension: extbase
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/extbase/ext_localconf.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_tablecolumns'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_tablecolumns'] = array(
		'groups' => array('system')
	);
}
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_queries'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_queries'] = array(
		'groups' => array('system')
	);
}
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_datamapfactory_datamap'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_datamapfactory_datamap'] = array(
		'groups' => array('system')
	);
}

// We set the default implementation for Storage Backend & Query Settings in Backend and Frontend.
// The code below is NO PUBLIC API!
/** @var $extbaseObjectContainer \TYPO3\CMS\Extbase\Object\Container\Container */
$extbaseObjectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\Container\\Container');
// Singleton
$extbaseObjectContainer->registerImplementation('TYPO3\CMS\Extbase\Persistence\QueryInterface', 'TYPO3\CMS\Extbase\Persistence\Generic\Query');
$extbaseObjectContainer->registerImplementation('TYPO3\CMS\Extbase\Persistence\QueryResultInterface', 'TYPO3\CMS\Extbase\Persistence\Generic\QueryResult');
$extbaseObjectContainer->registerImplementation('TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface', 'TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager');
$extbaseObjectContainer->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\BackendInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Storage\\Typo3DbBackend');
$extbaseObjectContainer->registerImplementation('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QuerySettingsInterface', 'TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
unset($extbaseObjectContainer);

// Register type converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ArrayConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\BooleanConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FloatConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\IntegerConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectStorageConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\PersistentObjectConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\ObjectConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StringConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\CoreTypeConverter');
// Experimental FAL<->extbase converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FileReferenceConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderBasedFileCollectionConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\StaticFileCollectionConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\FolderConverter');

if (TYPO3_MODE === 'BE') {
	// registers Extbase at the cli_dispatcher with key "extbase".
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['extbase'] = array(
		'EXT:extbase/Scripts/CommandLineLauncher.php',
		'_CLI_lowlevel'
	);
	// register help command
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = 'TYPO3\\CMS\\Extbase\\Command\\HelpCommandController';
}


/**
 * Extension: fluid
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/fluid/ext_localconf.php
 */

$_EXTKEY = 'fluid';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Register caches if not already done in localconf.php or a previously loaded extension.
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['fluid_template'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['fluid_template'] = array(
		'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend',
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend',
		'groups' => array('system')
	);
}


/**
 * Extension: install
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/install/ext_localconf.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// TYPO3 6.0 - Create page and TypoScript root template (automatically executed in 123-mode)
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['rootTemplate'] = 'TYPO3\\CMS\\Install\\Updates\\RootTemplateUpdate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['changeCompatibilityVersion'] = 'TYPO3\\CMS\\Install\\Updates\\CompatVersionUpdate';
// TYPO3 6.0 - Add new tables for ExtensionManager
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['extensionManagerTables'] = 'TYPO3\\CMS\\Install\\Updates\\ExtensionManagerTables';
// Split backend user and backend groups file permissions to single ones.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['file_permissions'] = 'TYPO3\\CMS\\Install\\Updates\\FilePermissionUpdate';
// Version 6.0: Migrate files content elements to use File Abstraction Layer
// Migrations of tt_content.image DB fields and captions, alt texts, etc. into sys_file_reference records.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_init'] = 'TYPO3\\CMS\\Install\\Updates\\InitUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_images'] = 'TYPO3\\CMS\\Install\\Updates\\TceformsUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_uploads'] = 'TYPO3\\CMS\\Install\\Updates\\TtContentUploadsUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_splitMetaData'] = 'TYPO3\\CMS\\Install\\Updates\\FileTableSplittingUpdate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_truncateProcessedFileTable'] = 'TYPO3\\CMS\\Install\\Updates\\TruncateSysFileProcessedFileTable';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['referenceIntegrity'] = 'TYPO3\\CMS\\Install\\Updates\\ReferenceIntegrityUpdateWizard';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_filemounts'] = 'TYPO3\\CMS\\Install\\Updates\\FilemountUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['fal_identifierhash'] = 'TYPO3\\CMS\\Install\\Updates\\FileIdentifierHashUpdate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_rtemagicimages'] = 'TYPO3\\CMS\\Install\\Updates\\RteMagicImagesUpdateWizard';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysext_file_rtefilelinks'] = 'TYPO3\\CMS\\Install\\Updates\\RteFileLinksUpdateWizard';

// Version 4.7: Migrate the flexforms of MediaElement
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['mediaElementFlexform'] = 'TYPO3\\CMS\\Install\\Updates\\MediaFlexformUpdate';

$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
$signalSlotDispatcher->connect(
	'TYPO3\\CMS\\Install\\Service\\SqlExpectedSchemaService',
	'tablesDefinitionIsBeingBuilt',
	'TYPO3\\CMS\\Install\\Service\\CachingFrameworkDatabaseSchemaService',
	'addCachingFrameworkRequiredDatabaseSchemaToTablesDefinition'
);
$signalSlotDispatcher->connect(
	'TYPO3\\CMS\\Install\\Service\\SqlExpectedSchemaService',
	'tablesDefinitionIsBeingBuilt',
	'TYPO3\\CMS\\Core\\Category\\CategoryRegistry',
	'addCategoryDatabaseSchemaToTablesDefinition'
);


/**
 * Extension: lang
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/lang/ext_localconf.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register language update command controller
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = 'TYPO3\\CMS\\Lang\\Command\\LanguageCommandController';


/**
 * Extension: saltedpasswords
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/saltedpasswords/ext_localconf.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Form evaluation function for fe_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['tx_saltedpasswords_eval_fe'] = 'EXT:saltedpasswords/Classes/Evaluation/FrontendEvaluator.php';
// Form evaluation function for be_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['tx_saltedpasswords_eval_be'] = 'EXT:saltedpasswords/Classes/Evaluation/BackendEvaluator.php';

// Hook for processing "forgotPassword" in felogin
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['password_changed'][] = 'TYPO3\\CMS\\Saltedpasswords\\Utility\\SaltedPasswordsUtility->feloginForgotPasswordHook';

// Extension may register additional salted hashing methods in this array
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/saltedpasswords']['saltMethods'] = array();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('saltedpasswords', 'auth', 'TYPO3\\CMS\\Saltedpasswords\\SaltedPasswordService', array(
	'title' => 'FE/BE Authentification salted',
	'description' => 'Salting of passwords for Frontend and Backend',
	'subtype' => 'authUserFE,authUserBE',
	'available' => TRUE,
	'priority' => 70,
	// must be higher than \TYPO3\CMS\Sv\AuthenticationService (50) and rsaauth (60) but lower than OpenID (75)
	'quality' => 70,
	'os' => '',
	'exec' => '',
	'className' => 'TYPO3\\CMS\\Saltedpasswords\\SaltedPasswordService'
));

// Register bulk update task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Saltedpasswords\\Task\\BulkUpdateTask'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:' . $_EXTKEY . '/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.name',
	'description' => 'LLL:EXT:' . $_EXTKEY . '/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.description',
	'additionalFields' => 'TYPO3\\CMS\\Saltedpasswords\\Task\\BulkUpdateFieldProvider'
);


/**
 * Extension: sv
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/sv/ext_localconf.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Register base authentication service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
	$_EXTKEY,
	'auth',
	'TYPO3\\CMS\\Sv\\AuthenticationService',
	array(
		'title' => 'User authentication',
		'description' => 'Authentication with username/password.',
		'subtype' => 'getUserBE,authUserBE,getUserFE,authUserFE,getGroupsFE,processLoginDataBE,processLoginDataFE',
		'available' => TRUE,
		'priority' => 50,
		'quality' => 50,
		'os' => '',
		'exec' => '',
		'className' => 'TYPO3\\CMS\\Sv\\AuthenticationService'
	)
);
// Add hooks to the backend login form
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginFormHook'][$_EXTKEY] = 'TYPO3\\CMS\\Sv\\LoginFormHook->getLoginFormTag';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginScriptHook'][$_EXTKEY] = 'TYPO3\\CMS\\Sv\\LoginFormHook->getLoginScripts';


/**
 * Extension: beuser
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/beuser/ext_localconf.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_pre_processing'][] = 'TYPO3\\CMS\\Beuser\\Hook\\SwitchBackUserHook->switchBack';


/**
 * Extension: css_styled_content
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/css_styled_content/ext_localconf.php
 */

$_EXTKEY = 'css_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// unserializing the configuration so we can use it here:
$_EXTCONF = unserialize($_EXTCONF);
if (!$_EXTCONF || $_EXTCONF['setPageTSconfig']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:css_styled_content/pageTSconfig.txt">');
}
if (!$_EXTCONF || $_EXTCONF['removePositionTypes']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
		TCEFORM.tt_content.imageorient.types.image.removeItems = 8,9,10,17,18,25,26
	');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['compat_version']['tx_cssstyledcontent_headertag'] = array(
	'title' => 'CSS Styled Content: &lt;header&gt; tag only when needed',
	'version' => 6002000,
	'description' => '<p>lib.stdheader: The &lt;header&gt; tag now only wraps the header if the header element has a date set, else the output is just a straight &lt;hX&gt; tag.</p>',
);

// Mark the delivered TypoScript templates as "content rendering template" (providing the hooks of "static template 43" = content (default))
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/v6.1/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/v6.0/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/v4.7/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/v4.6/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/v4.5/';


/**
 * Extension: documentation
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/documentation/ext_localconf.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die('Access denied.');
}

// Open extension manual from within Extension Manager
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
$signalSlotDispatcher->connect(
	'TYPO3\\CMS\\Extensionmanager\\ViewHelpers\\ProcessAvailableActionsViewHelper',
	'processActions',
	'TYPO3\\CMS\Documentation\\Slots\\ExtensionManager',
	'processActions'
);


/**
 * Extension: felogin
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/felogin/ext_localconf.php
 */

$_EXTKEY = 'felogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
//replace old Login
$pluginContent = trim('
plugin.tx_felogin_pi1 = USER_INT
plugin.tx_felogin_pi1 {
  includeLibs = EXT:felogin/pi1/class.tx_felogin_pi1.php
  userFunc = tx_felogin_pi1->main
}
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '
# Setting ' . $_EXTKEY . ' plugin TypoScript
' . $pluginContent);
$addLine = '
tt_content.login = COA
tt_content.login {
	10 = < lib.stdheader
	20 >
	20 = < plugin.tx_felogin_pi1
}
';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '# Setting ' . $_EXTKEY . ' plugin TypoScript' . $addLine . '', 43);

if (TYPO3_MODE === 'BE') {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.forms {
		elements {
			login {
				icon = gfx/c_wiz/login_form.gif
				title = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_login_title
				description = LLL:EXT:cms/layout/locallang_db_new_content_el.xlf:forms_login_description
				tt_content_defValues {
					CType = login
				}
			}
		}
		show :=addToList(login)
	}
	');
}

// Page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/CmsLayout.php:TYPO3\CMS\Felogin\Hooks\CmsLayout';


/**
 * Extension: form
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/form/ext_localconf.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Form\Utility\FormUtility::getInstance()->initializeFormObjects()->initializePageTsConfig();


/**
 * Extension: impexp
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/impexp/ext_localconf.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = 'TYPO3\\CMS\\Impexp\\Hook\\BackendControllerHook->addJavaScript';


/**
 * Extension: lowlevel
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/lowlevel/ext_localconf.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE === 'BE') {
	// Setting up scripts that can be run from the cli_dispatch.phpsh script.
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_refindex'] = array('EXT:lowlevel/dbint/cli/refindex_cli.php', '_CLI_lowlevel');
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_cleaner'] = array('EXT:lowlevel/dbint/cli/cleaner_cli.php', '_CLI_lowlevel');
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_admin'] = array('EXT:lowlevel/admin_cli.php', '_CLI_lowlevel');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['missing_files'] = array('TYPO3\\CMS\\Lowlevel\\MissingFilesCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['missing_relations'] = array('TYPO3\\CMS\\Lowlevel\\MissingRelationsCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['double_files'] = array('TYPO3\\CMS\\Lowlevel\\DoubleFilesCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['rte_images'] = array('TYPO3\\CMS\\Lowlevel\\RteImagesCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['lost_files'] = array('TYPO3\\CMS\\Lowlevel\\LostFilesCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['orphan_records'] = array('TYPO3\\CMS\\Lowlevel\\OrphanRecordsCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['deleted'] = array('TYPO3\\CMS\\Lowlevel\\DeletedRecordsCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['versions'] = array('TYPO3\\CMS\\Lowlevel\\VersionsCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['cleanflexform'] = array('TYPO3\\CMS\\Lowlevel\\CleanFlexformCommand');
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['syslog'] = array('TYPO3\\CMS\\Lowlevel\\SyslogCommand');
}


/**
 * Extension: reports
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/reports/ext_localconf.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['TYPO3\\CMS\\Reports\\Task\\SystemStatusUpdateTask'] = array(
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:' . $_EXTKEY . '/reports/locallang.xlf:status_updateTaskTitle',
	'description' => 'LLL:EXT:' . $_EXTKEY . '/reports/locallang.xlf:status_updateTaskDescription',
	'additionalFields' => 'TYPO3\\CMS\\Reports\\Task\\SystemStatusUpdateTaskNotificationEmailField'
);

$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['tx_reports_WarningMessagePostProcessor'] = 'TYPO3\\CMS\\Reports\\Report\\Status\\WarningMessagePostProcessor';


/**
 * Extension: rsaauth
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/rsaauth/ext_localconf.php
 */

$_EXTKEY = 'rsaauth';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
// Add the service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService($_EXTKEY, 'auth', 'TYPO3\\CMS\\Rsaauth\\RsaAuthService', array(
	'title' => 'RSA authentication',
	'description' => 'Authenticates users by using encrypted passwords',
	'subtype' => 'processLoginDataBE,processLoginDataFE',
	'available' => TRUE,
	'priority' => 60,
	// tx_svauth_sv1 has 50, t3sec_saltedpw has 55. This service must have higher priority!
	'quality' => 60,
	// tx_svauth_sv1 has 50. This service must have higher quality!
	'os' => '',
	'exec' => '',
	// Do not put a dependency on openssh here or service loading will fail!
	'className' => 'TYPO3\\CMS\\Rsaauth\\RsaAuthService'
));

// Add a hook to the BE login form
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginFormHook'][$_EXTKEY] = 'TYPO3\\CMS\\Rsaauth\\Hook\\LoginFormHook->getLoginFormTag';
// Add hook for user setup module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['setupScriptHook'][$_EXTKEY] = 'TYPO3\\CMS\\Rsaauth\\Hook\\UserSetupHook->getLoginScripts';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['modifyUserDataBeforeSave'][$_EXTKEY] = 'TYPO3\\CMS\\Rsaauth\\Hook\\UserSetupHook->decryptPassword';
// Add a hook to the FE login form (felogin system extension)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['loginFormOnSubmitFuncs'][$_EXTKEY] = 'TYPO3\\CMS\\Rsaauth\\Hook\\FrontendLoginHook->loginFormHook';
// Add a hook to show Backend warnings
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages'][$_EXTKEY] = 'TYPO3\\CMS\\Rsaauth\\BackendWarnings';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
	'BackendLogin::getRsaPublicKey',
	'TYPO3\\CMS\\Rsaauth\\Backend\\AjaxLoginHandler->getRsaPublicKey',
	FALSE
);

// eID for FrontendLoginRsaPublicKey
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['FrontendLoginRsaPublicKey'] =
	'EXT:rsaauth/resources/Private/Php/FrontendLoginRsaPublicKey.php';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = 'TYPO3\\CMS\\Rsaauth\\Hook\\BackendHookForAjaxLogin->addRsaJsLibraries';


/**
 * Extension: rtehtmlarea
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/rtehtmlarea/ext_localconf.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

if (!$TYPO3_CONF_VARS['BE']['RTEenabled']) {
	$TYPO3_CONF_VARS['BE']['RTEenabled'] = 1;
}

// Registering the RTE object
$TYPO3_CONF_VARS['BE']['RTE_reg'][$_EXTKEY] = array('objRef' => '&TYPO3\\CMS\\Rtehtmlarea\\RteHtmlAreaBase');

// Make the extension version number available to the extension scripts
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'ext_emconf.php';

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['version'] = $EM_CONF[$_EXTKEY]['version'];
// Unserializing the configuration so we can use it here
$_EXTCONF = unserialize($_EXTCONF);

// Add default RTE transformation configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/proc/pageTSConfig.txt">');

// Add default Page TS Config RTE configuration
if (strstr($_EXTCONF['defaultConfiguration'], 'Minimal')) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] = 'Advanced';
} elseif (strstr($_EXTCONF['defaultConfiguration'], 'Demo')) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] = 'Demo';
} else {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] = 'Typical';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/' . strtolower($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration']) . '/pageTSConfig.txt">');
// Add default User TS Config RTE configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/' . strtolower($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration']) . '/userTSConfig.txt">');

// Add processing of soft references on image tags in RTE content
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'hooks/softref/ext_localconf.php';
// Add Status Report about Conflicting Extensions
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'hooks/statusreport/ext_localconf.php';
// Add frontend hook to add meta tag when rtehtmlarea is present and user agent is IE 11+
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/Hook/Frontend/Controller/ext_localconf.php';

// Set warning in the Update Wizard of the Install Tool for deprecated Page TS Config properties
$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['update']['checkForDeprecatedRtePageTSConfigProperties'] = '&TYPO3\\CMS\\Rtehtmlarea\\Hook\\Install\\DeprecatedRteProperties';

// Initialize plugin registration array
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins'] = array();

// Editor Mode configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditorMode'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditorMode']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\EditorMode';

// General Element configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\EditElement';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['EditElement']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\MicroDataSchema';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['MicrodataSchema']['disableInFE'] = 0;

// Inline Elements configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultInline'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultInline']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultInline';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultInline']['addIconsToSkin'] = 1;
if ($_EXTCONF['enableInlineElements']) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InlineElements'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InlineElements']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\InlineElements';
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/extensions/InlineElements/res/pageTSConfig.txt">');
}

// Block Elements configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockElements'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockElements']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\BlockElements';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockElements']['addIconsToSkin'] = 0;


$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefinitionList'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefinitionList']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefinitionList';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefinitionList']['addIconsToSkin'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockStyle'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['BlockStyle']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\BlockStyle';

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CharacterMap'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CharacterMap']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\CharacterMap';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CharacterMap']['addIconsToSkin'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Acronym';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Acronym']['disableInFE'] = 1;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\UserElements';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UserElements']['disableInFE'] = 1;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextStyle'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextStyle']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\TextStyle';

// Enable images and add default Page TS Config RTE configuration for enabling images with the Minimal and Typical default configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableImages'] = $_EXTCONF['enableImages'] ?: 0;
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] == 'Demo') {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableImages'] = 1;
}
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableImages']) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultImage'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultImage']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultImage';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultImage']['addIconsToSkin'] = 0;

	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3Image';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image']['addIconsToSkin'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Image']['disableInFE'] = 1;

	if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] == 'Advanced' || $TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['defaultConfiguration'] == 'Typical') {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/image/pageTSConfig.txt">');
	}
}
// Add frontend image rendering TypoScript anyways
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/ImageRendering/setup.txt">', 43);

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultLink'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultLink']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultLink';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultLink']['addIconsToSkin'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3Link';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['disableInFE'] = 1;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Link']['additionalAttributes'] = 'rel';

// Add default Page TS Config RTE configuration for enabling links accessibility icons
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableAccessibilityIcons'] = $_EXTCONF['enableAccessibilityIcons'] ?: 0;
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['enableAccessibilityIcons']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/accessibilityicons/pageTSConfig.txt">');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($_EXTKEY, 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/accessibilityicons/setup.txt">', 43);
}

// Register features that use the style attribute
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['allowStyleAttribute'] = isset($_EXTCONF['allowStyleAttribute']) && !$_EXTCONF['allowStyleAttribute'] ? 0 : 1;
if ($TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['allowStyleAttribute']) {
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3Color';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color']['addIconsToSkin'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3Color']['disableInFE'] = 0;

	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont'] = array();
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\SelectFont';
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont']['addIconsToSkin'] = 0;
	$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SelectFont']['disableInFE'] = 0;
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/res/style/pageTSConfig.txt">');
}

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\TextIndicator';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TextIndicator']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\InsertSmiley';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['InsertSmiley']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Language';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['Language']['disableInFE'] = 0;

// Spell checking configuration
$TYPO3_CONF_VARS['FE']['eID_include']['rtehtmlarea_spellchecker'] = 'EXT:' . $_EXTKEY . '/pi1/class.tx_rtehtmlarea_pi1.php';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler('rtehtmlarea::spellchecker', 'TYPO3\\CMS\\Rtehtmlarea\\Controller\\SpellCheckingController->main');

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Spellchecker';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['AspellDirectory'] = $_EXTCONF['AspellDirectory'] ? $_EXTCONF['AspellDirectory'] : '/usr/bin/aspell';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['noSpellCheckLanguages'] = $_EXTCONF['noSpellCheckLanguages'] ? $_EXTCONF['noSpellCheckLanguages'] : 'ja,km,ko,lo,th,zh,b5,gb';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['SpellChecker']['forceCommandMode'] = $_EXTCONF['forceCommandMode'] ? $_EXTCONF['forceCommandMode'] : 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\FindReplace';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['FindReplace']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\RemoveFormat';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['RemoveFormat']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Plaintext';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['PlainText']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultClean'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['DefaultClean']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\DefaultClean';

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3HtmlParser'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3HtmlParser']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\Typo3HtmlParser';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TYPO3HtmlParser']['disableInFE'] = 1;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\QuickTag';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['QuickTag']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\TableOperations';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['TableOperations']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\AboutEditor';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['AboutEditor']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\ContextMenu';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['ContextMenu']['disableInFE'] = 0;

$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\UndoRedo';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['UndoRedo']['disableInFE'] = 0;

// Copy & Paste configuration
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste'] = array();
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['objectReference'] = '&TYPO3\\CMS\\Rtehtmlarea\\Extension\\CopyPaste';
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['addIconsToSkin'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['disableInFE'] = 0;
$TYPO3_CONF_VARS['EXTCONF'][$_EXTKEY]['plugins']['CopyPaste']['mozillaAllowClipboardURL'] = 'https://addons.mozilla.org/firefox/downloads/latest/852/addon-852-latest.xpi';


/**
 * Extension: sys_note
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/sys_note/ext_localconf.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register "switchableControllerActions" manually because it exists no plugin or module for sys_note
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['SysNote']['modules']['Note']['controllers'] = array(
	'Note' => array(
		'actions' => array('list')
	)
);

// Hook into the list module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['recordlist/mod1/index.php']['drawFooterHook'][$_EXTKEY] = 'TYPO3\\CMS\\SysNote\\Hook\\RecordListHook->render';
// Hook into the page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook'][$_EXTKEY] = 'TYPO3\\CMS\\SysNote\\Hook\\PageHook->render';
// Hook into the info module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/web_info/class.tx_cms_webinfo.php']['drawFooterHook'][$_EXTKEY] = 'TYPO3\\CMS\\SysNote\\Hook\\InfoModuleHook->render';


/**
 * Extension: t3editor
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/t3editor/ext_localconf.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
if (TYPO3_MODE == 'BE') {
	// Register hooks for tstemplate module
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = 'TYPO3\\CMS\\T3editor\\Hook\\TypoScriptTemplateInfoHook->preStartPageHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/tstemplate_info/class.tx_tstemplateinfo.php']['postOutputProcessingHook'][] = 'TYPO3\\CMS\\T3editor\\Hook\\TypoScriptTemplateInfoHook->postOutputProcessingHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['tx_tstemplateinfo'] = 'TYPO3\\CMS\\T3editor\\Hook\\TypoScriptTemplateInfoHook->save';
	$TYPO3_CONF_VARS['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['file_edit'] = 'TYPO3\\CMS\\T3editor\\Hook\\FileEditHook->save';
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = 'TYPO3\\CMS\\T3editor\\Hook\\FileEditHook->preStartPageHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'][] = 'TYPO3\\CMS\\T3editor\\Hook\\FileEditHook->preOutputProcessingHook';
	$TYPO3_CONF_VARS['SC_OPTIONS']['typo3/file_edit.php']['postOutputProcessingHook'][] = 'TYPO3\\CMS\\T3editor\\Hook\\FileEditHook->postOutputProcessingHook';
}


/**
 * Extension: t3skin
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3/sysext/t3skin/ext_localconf.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	RTE.default.skin = EXT:' . $_EXTKEY . '/rtehtmlarea/htmlarea.css
	RTE.default.FE.skin = EXT:' . $_EXTKEY . '/rtehtmlarea/htmlarea.css
');
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook']['TYPO3\\CMS\\T3skin\\Hook\\StyleGenerationHook'] = 'TYPO3\\CMS\\T3skin\\Hook\\StyleGenerationHook->preStartPageHook';


/**
 * Extension: simplelist
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/simplelist/ext_localconf.php
 */

$_EXTKEY = 'simplelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


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


/**
 * Extension: flexslider
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/flexslider/ext_localconf.php
 */

$_EXTKEY = 'flexslider';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SotaStudio.' . $_EXTKEY,
	'Pi1',
	array(
		'FlexSlider' => 'list',
	)
);


/**
 * Extension: usermynews
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/usermynews/ext_localconf.php
 */

$_EXTKEY = 'usermynews';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


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


/**
 * Extension: kickstarter
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/kickstarter/ext_localconf.php
 */

$_EXTKEY = 'kickstarter';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



//emconf
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['emconf'] = array(
	'classname'   => 'tx_kickstarter_section_emconf',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_emconf.php',
	'title'       => 'General info',
	'description' => 'Enter general information about the extension here: Title, description, category, author...',
	'singleItem'  => true,
);

//languages
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['languages'] = array(
	'classname'   => 'tx_kickstarter_section_languages',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_languages.php',
	'title'       => 'Setup languages',
	'description' => 'Select the system languages you want to use in your extension. English is TYPO3\'s default language, therefore you don\'t need to select it anymore.',
	'singleItem'  => true,
);

//tables
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['tables'] = array(
	'classname'   => 'tx_kickstarter_section_tables',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_tables.php',
	'title'       => 'New Database Tables',
	'description' => 'Add database tables which can be edited inside the backend. These tables will be added to the global TCA array in TYPO3.',
	'image'       => 'EXT:kickstarter/icons/cm.png',
);

//fields
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['fields'] = array(
	'classname'   => 'tx_kickstarter_section_fields',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_fields.php',
	'title'       => 'Extend existing Tables',
	'description' => 'Add custom fields to existing tables, such as the "pages", "tt_content", "fe_users" or "be_users" table.',
);

//pi
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['pi'] = array(
	'classname'   => 'tx_kickstarter_section_pi',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_pi.php',
	'title'       => 'Frontend Plugins',
	'description' => 'Create frontend plugins. Plugins are web applications running on the website itself (not in the backend of TYPO3). The default guestbook, message board, shop, rating feature etc. are examples of plugins.',
);

//module
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['module'] = array(
	'classname'   => 'tx_kickstarter_section_module',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_module.php',
	'title'       => 'Backend Modules',
	'description' => 'Create backend modules. A module is normally recognized as the application behind one of the TYPO3 backend menuitems. Examples are the Web>Page, Web>List, User>Setup, Doc module etc. In a more loose sense, all applications integrated with existing module (see below) also belongs to the "module" category.',
);

//modulefunction
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['modulefunction'] = array(
	'classname'   => 'tx_kickstarter_section_modulefunction',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_modulefunction.php',
	'title'       => 'Integrate in existing Modules',
	'description' => 'Extend existing modules with new function-menu items. Examples are extensions such as "User>Task Center, Messaging" which adds internal messaging to TYPO3. Or "Web>Info, Page TSconfig" which shows the Page TSconfiguration for a page. Or "Web>Func, Wizards, Sort pages" which is a wizard for re-ordering pages in a folder.',
);

//cm
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['cm'] = array(
	'classname'   => 'tx_kickstarter_section_cm',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_cm.php',
	'title'       => 'Clickmenu items',
	'description' => 'Adds a custom item to the clickmenus of database records. This is a very cool way to integrate small tools of your own in an elegant way!',
);

//sv
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['sv'] = array(
	'classname'   => 'tx_kickstarter_section_sv',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_sv.php',
	'title'       => 'Services',
	'description' => 'Create a Services class. With a Services extension you can extend TYPO3 (or an extension which use Services) with functionality, without any changes to the code which use that service.',
);

//ts
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['ts'] = array(
	'classname'   => 'tx_kickstarter_section_ts',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_ts.php',
	'title'       => 'Static TypoScript code',
	'description' => 'Adds static TypoScript Setup and Constants code - just like a static template would do.',
);

//tsconfig
$TYPO3_CONF_VARS['EXTCONF']['kickstarter']['sections']['tsconfig'] = array(
	'classname'   => 'tx_kickstarter_section_tsconfig',
	'filepath'    => 'EXT:kickstarter/sections/class.tx_kickstarter_section_tsconfig.php',
	'title'       => 'TSconfig',
	'description' => 'Adds default Page-TSconfig or User-TSconfig. Can be used to preset options inside TYPO3.',
	'singleItem'  => true,
);





/**
 * Extension: templavoila
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/templavoila/ext_localconf.php
 */

$_EXTKEY = 'templavoila';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


# TYPO3 CVS ID: $Id$
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// unserializing the configuration so we can use it here:
$_EXTCONF = unserialize($_EXTCONF);

// Adding the two plugins TypoScript:
t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_templavoila_pi1.php', '_pi1', 'CType', 1);
$tvSetup = array('plugin.tx_templavoila_pi1.disableExplosivePreview = 1');
if (!$_EXTCONF['enable.']['renderFCEHeader']) {
	$tvSetup[] = 'tt_content.templavoila_pi1.10 >';
}

//sectionIndex replacement
$tvSetup[] = 'tt_content.menu.20.3 = USER
	tt_content.menu.20.3.userFunc = tx_templavoila_pi1->tvSectionIndex
	tt_content.menu.20.3.select.where >
	tt_content.menu.20.3.indexField.data = register:tx_templavoila_pi1.current_field
';


t3lib_extMgm::addTypoScript($_EXTKEY, 'setup', implode(PHP_EOL, $tvSetup), 43);

// Use templavoila's wizard instead the default create new page wizard
t3lib_extMgm::addPageTSConfig('
    mod.web_list.newPageWiz.overrideWithExtension = templavoila
	mod.web_list.newContentWiz.overrideWithExtension = templavoila
	mod.web_txtemplavoilaM2.templatePath = templates,default/templates
	mod.web_txtemplavoilaM1.enableDeleteIconForLocalElements = 0
	mod.web_txtemplavoilaM1.enableContentAccessWarning = 1
	mod.web_txtemplavoilaM1.enableLocalizationLinkForFCEs = 0
	mod.web_txtemplavoilaM1.useLiveWorkspaceForReferenceListUpdates = 1
	mod.web_txtemplavoilaM1.adminOnlyPageStructureInheritance = fallback
');

// Use templavoila instead of the default page module
t3lib_extMgm::addUserTSConfig('
 	options.overridePageModule = web_txtemplavoilaM1
	mod.web_txtemplavoilaM1.sideBarEnable = 1
 ');

// Adding Page Template Selector Fields to root line:
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_templavoila_ds,tx_templavoila_to,tx_templavoila_next_ds,tx_templavoila_next_to';

// Register our classes at a the hooks:
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['templavoila'] = 'EXT:templavoila/class.tx_templavoila_tcemain.php:tx_templavoila_tcemain';
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['templavoila'] = 'EXT:templavoila/class.tx_templavoila_tcemain.php:tx_templavoila_tcemain';
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass']['templavoila'] = 'EXT:templavoila/class.tx_templavoila_tcemain.php:tx_templavoila_tcemain';
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauthgroup.php']['recordEditAccessInternals']['templavoila'] = 'EXT:templavoila/class.tx_templavoila_access.php:&tx_templavoila_access->recordEditAccessInternals';

$GLOBALS ['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['tx_templavoila_unusedce'] = array('EXT:templavoila/class.tx_templavoila_unusedce.php:tx_templavoila_unusedce');
$GLOBALS ['TYPO3_CONF_VARS']['EXTCONF']['l10nmgr']['indexFilter']['tx_templavoila_usedCE'] = array('EXT:templavoila/class.tx_templavoila_usedce.php:tx_templavoila_usedCE');


// Register Preview Classes for Page Module
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['default'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_default.php:&tx_templavoila_preview_default';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['text'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_text.php:&tx_templavoila_preview_type_text';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['table'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_text.php:&tx_templavoila_preview_type_text';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['mailform'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_text.php:&tx_templavoila_preview_type_text';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['header'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_header.php:&tx_templavoila_preview_type_header';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['multimedia'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_multimedia.php:&tx_templavoila_preview_type_multimedia';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['media'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_media.php:&tx_templavoila_preview_type_media';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['uploads'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_uploads.php:&tx_templavoila_preview_type_uploads';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['textpic'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_textpic.php:&tx_templavoila_preview_type_textpic';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['splash'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_textpic.php:&tx_templavoila_preview_type_textpic';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['image'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_image.php:&tx_templavoila_preview_type_image';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['bullets'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_bullets.php:&tx_templavoila_preview_type_bullets';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['html'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_html.php:&tx_templavoila_preview_type_html';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['menu'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_menu.php:&tx_templavoila_preview_type_menu';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['list'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_list.php:&tx_templavoila_preview_type_list';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['search'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_null.php:&tx_templavoila_preview_type_null';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['login'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_null.php:&tx_templavoila_preview_type_null';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['shortcut'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_null.php:&tx_templavoila_preview_type_null';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['div'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_null.php:&tx_templavoila_preview_type_null';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['mod1']['renderPreviewContent']['templavoila_pi1'] = 'EXT:templavoila/classes/preview/class.tx_templavoila_preview_type_null.php:&tx_templavoila_preview_type_null';

// configuration for new content element wizard
t3lib_extMgm::addPageTSConfig('
templavoila.wizards.newContentElement.wizardItems {
	common.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common
	common.elements {
		text {
			icon = gfx/c_wiz/regular_text.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_regularText_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_regularText_description
			tt_content_defValues {
				CType = text
			}
		}
		textpic {
			icon = gfx/c_wiz/text_image_right.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_textImage_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_textImage_description
			tt_content_defValues {
				CType = textpic
				imageorient = 17
			}
		}
		image {
			icon = gfx/c_wiz/images_only.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_imagesOnly_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_imagesOnly_description
			tt_content_defValues {
				CType = image
				imagecols = 2
			}
		}
		bullets {
			icon = gfx/c_wiz/bullet_list.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_bulletList_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_bulletList_description
			tt_content_defValues {
				CType = bullets
			}
		}
		table {
			icon = gfx/c_wiz/table.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_table_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:common_table_description
			tt_content_defValues {
				CType = table
			}
		}

	}
	common.show := addToList(text,textpic,image,bullets,table)

	special.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special
	special.elements {
		uploads {
			icon = gfx/c_wiz/filelinks.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_filelinks_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_filelinks_description
			tt_content_defValues {
				CType = uploads
			}
		}
		multimedia {
			icon = gfx/c_wiz/multimedia.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_multimedia_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_multimedia_description
			tt_content_defValues {
				CType = multimedia
			}
		}
		menu {
			icon = gfx/c_wiz/sitemap2.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_sitemap_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_sitemap_description
			tt_content_defValues {
				CType = menu
				menu_type = 2
			}
		}
		html {
			icon = gfx/c_wiz/html.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_plainHTML_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_plainHTML_description
			tt_content_defValues {
				CType = html
			}
		}
		div {
		 	icon = gfx/c_wiz/div.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_divider_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_divider_description
			tt_content_defValues {
				CType = div
			}
		}

	}
	special.show := addToList(uploads,multimedia,menu,html,div)

	forms.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms
	forms.elements {
		mailform {
			icon = gfx/c_wiz/mailform.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_mail_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_mail_description
			tt_content_defValues {
				CType = mailform
				bodytext (
# Example content:
Name: | *name = input,40 | Enter your name here
Email: | *email=input,40 |
Address: | address=textarea,40,5 |
Contact me: | tv=check | 1

|formtype_mail = submit | Send form!
|html_enabled=hidden | 1
|subject=hidden| This is the subject
				)
			}
		}
		search {
			icon = gfx/c_wiz/searchform.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_search_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_search_description
			tt_content_defValues {
				CType = search
			}
		}
		login {
			icon = gfx/c_wiz/login_form.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_login_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:forms_login_description
			tt_content_defValues {
				CType = login
			}
		}

	}
	forms.show := addToList(mailform,search,login)

	fce.header = LLL:EXT:templavoila/mod1/locallang_db_new_content_el.xml:fce
	fce.elements  {

	}
	fce.show = *

	plugins.header = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:plugins
	plugins.elements {
		general {
			icon = gfx/c_wiz/user_defined.gif
			title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:plugins_general_title
			description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:plugins_general_description
			tt_content_defValues.CType = list
		}
	}
	plugins.show = *
}
# set to tabs for tab rendering
templavoila.wizards.newContentElement.renderMode =

');

if (t3lib_div::compat_version('4.3')) {
	t3lib_extMgm::addPageTSConfig('
templavoila.wizards.newContentElement.wizardItems.special.elements.media {
	icon = gfx/c_wiz/multimedia.gif
	title = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_media_title
	description = LLL:EXT:cms/layout/locallang_db_new_content_el.xml:special_media_description
	tt_content_defValues {
		CType = media
	}
}
templavoila.wizards.newContentElement.wizardItems.special.show = uploads,media,menu,html,div
');
}

$TYPO3_CONF_VARS['BE']['AJAX']['tx_templavoila_mod1_ajax::moveRecord'] =
	'EXT:templavoila/mod1/class.tx_templavoila_mod1_ajax.php:tx_templavoila_mod1_ajax->moveRecord';

$TYPO3_CONF_VARS['BE']['AJAX']['tx_templavoila_cm1_ajax::getDisplayFileContent'] =
	'EXT:templavoila/cm1/class.tx_templavoila_cm1_ajax.php:tx_templavoila_cm1_ajax->getDisplayFileContent';


/**
 * Extension: vhs
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/vhs/ext_localconf.php
 */

$_EXTKEY = 'vhs';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all'][] = 'Tx_Vhs_Service_AssetService->buildAll';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_eofe'][] = 'Tx_Vhs_Service_AssetService->buildAllUncached';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = 'Tx_Vhs_Service_AssetService->clearCacheCommand';


/**
 * Extension: realurl
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/realurl/ext_localconf.php
 */

$_EXTKEY = 'realurl';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tstemplate.php']['linkData-PostProc']['tx_realurl'] = 'EXT:realurl/class.tx_realurl.php:&tx_realurl->encodeSpURL';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_content.php']['typoLink_PostProc']['tx_realurl'] = 'EXT:realurl/class.tx_realurl.php:&tx_realurl->encodeSpURL_urlPrepend';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['checkAlternativeIdMethods-PostProc']['tx_realurl'] = 'EXT:realurl/class.tx_realurl.php:&tx_realurl->decodeSpURL';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearPageCacheEval']['tx_realurl'] = 'EXT:realurl/class.tx_realurl.php:&tx_realurl->clearPageCacheMgm';

$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearAllCache_additionalTables']['tx_realurl_urldecodecache'] = 'tx_realurl_urldecodecache';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearAllCache_additionalTables']['tx_realurl_urlencodecache'] = 'tx_realurl_urlencodecache';

$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['tx_realurl'] = 'EXT:realurl/class.tx_realurl_tcemain.php:&tx_realurl_tcemain';
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['tx_realurl'] = 'EXT:realurl/class.tx_realurl_tcemain.php:&tx_realurl_tcemain';

$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_realurl_pathsegment,tx_realurl_exclude,tx_realurl_pathoverride';
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_realurl_pathsegment';

// Include configuration file
$_realurl_conf = @unserialize($_EXTCONF);
if (is_array($_realurl_conf)) {
	$_realurl_conf_file = trim($_realurl_conf['configFile']);
	if ($_realurl_conf_file && @file_exists(PATH_site . $_realurl_conf_file)) {
		require_once(PATH_site . $_realurl_conf_file);
	}
	unset($_realurl_conf_file);
}

define('TX_REALURL_AUTOCONF_FILE', 'typo3conf/realurl_autoconf.php');
if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'])) {
	@include_once(PATH_site . TX_REALURL_AUTOCONF_FILE);
}
unset($_realurl_conf);

define('TX_REALURL_SEGTITLEFIELDLIST_DEFAULT', 'tx_realurl_pathsegment,alias,nav_title,title,uid');
define('TX_REALURL_SEGTITLEFIELDLIST_PLO', 'tx_realurl_pathsegment,nav_title,title,uid');

// TYPO3 clean up handler
//$GLOBALS ['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules'][$_EXTKEY] = array('EXT:' . $_EXTKEY . '/class.tx_realurl_cleanuphandler.php:tx_realurl_cleanuphandler');




/**
 * Extension: ws_less
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/ws_less/ext_localconf.php
 */

$_EXTKEY = 'ws_less';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess']['wsless'] = 'EXT:ws_less/Classes/Hooks/RenderPreProcessorHook.php:&tx_Wsless_Hooks_RenderPreProcessorHook->renderPreProcessorProc';

// Caching the pages - default expire 3600 seconds
if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['ws_less'])) {
	$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['ws_less'] = array(
		'frontend' => 't3lib_cache_frontend_VariableFrontend',
		'backend' => 't3lib_cache_backend_FileBackend',
		'options' => array(
				'defaultLifetime' => 3600*24*7,
			),
	);
}




/**
 * Extension: dp_kickstart_theme
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/dp_kickstart_theme/ext_localconf.php
 */

$_EXTKEY = 'dp_kickstart_theme';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



/***************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2014 Stefan Bruggmann, http://www.dotpulse.ch
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 ***************************************************************/

if(!defined('TYPO3_MODE')){
    die('Access denied.');
}


/***************
 * Default TsConfig
 */
// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$_EXTKEY.'/Configuration/PageTS/ModWizards.ts">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$_EXTKEY.'/Configuration/PageTS/TSConfig.ts">');


/***************
 * Backend Styling
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Backend\\View\\LogoView']['className'] = 'DP\\DpKickstartTheme\\Xclass\\Backend\\View\\LogoView';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['renderPreProcess'][] = 'DP\\DpKickstartTheme\\Hooks\\Backend\\RenderPreProcess->addStyles';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preHeaderRenderHook'][] = 'DP\\DpKickstartTheme\\Hooks\\Backend\\PreHeaderRender->addStyles';


/***************
 * Use RealUrl Config from Kickstart Package
 */
@include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY,'Configuration/RealURL/Default.php'));


if (TYPO3_MODE === 'BE') {

    /**
     * Provides an example .htaccess file for Apache after extension is installed and shows a warning if TYPO3 is not running on Apache.
     */
    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
    $signalSlotDispatcher->connect(
        'TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService',
        'hasInstalledExtensions',
        'DP\\DpKickstartTheme\\Service\\InstallService',
        'generateApacheHtaccess'
    );
}


/**
 * Extension: static_info_tables
 * File: D:/wamp/www/typo3_src-6.2.4-blank/typo3conf/ext/static_info_tables/ext_localconf.php
 */

$_EXTKEY = 'static_info_tables';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

if (!defined ('STATIC_INFO_TABLES_EXTkey')) {
	define('STATIC_INFO_TABLES_EXTkey', $_EXTKEY);
}

if (!defined ('PATH_BE_staticinfotables')) {
	define('PATH_BE_staticinfotables', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY));
}

if (!defined ('PATH_BE_staticinfotables_rel')) {
	define('PATH_BE_staticinfotables_rel', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY));
}
// Unserializing the configuration so we can use it here
$_EXTCONF = unserialize($_EXTCONF);

// Including Extbase configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TypoScript/Extbase/setup.txt">');

// Register cache static_info_tables
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY] = array();
}
if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['frontend'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['frontend'] = 'TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend';
}
if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['backend'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$_EXTKEY]['backend'] = 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend';
}

// Configure clear cache post processing for extended domain model
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Cache/ClassCacheManager.php:SJBR\StaticInfoTables\Cache\ClassCacheManager->reBuild';

// Names of static entities
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['entities'] = array(
	'Country',
	'CountryZone',
	'Currency',
	'Language',
	'Territory'
);

// Register cached domain model classes autoloader
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Cache/CachedClassLoader.php');
\SJBR\StaticInfoTables\Cache\CachedClassLoader::registerAutoloader();

// Possible label fields for different languages. Default as last.
$labelTable = array(
	'static_territories' => array(
		'label_fields' => array(
			'tr_name_##', 'tr_name_en',
		),
		'isocode_field' => array(
			'tr_iso_##',
		),
	),
	'static_countries' => array(
		'label_fields' => array(
			'cn_short_##', 'cn_short_en',
		),
		'isocode_field' => array(
			'cn_iso_##',
		),
	),
	'static_country_zones' => array(
		'label_fields' => array(
			'zn_name_##', 'zn_name_local',
		),
		'isocode_field' => array(
			'zn_code', 'zn_country_iso_##',
		),
	),
	'static_languages' => array(
		'label_fields' => array(
			'lg_name_##', 'lg_name_en',
		),
		'isocode_field' => array(
			'lg_iso_##', 'lg_country_iso_##',
		),
	),
	'static_currencies' => array(
		'label_fields' => array(
			'cu_name_##', 'cu_name_en',
		),
		'isocode_field' => array(
			'cu_iso_##',
		),
	),
);

if (isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables']) && is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'] = array_merge($labelTable, $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables']);
} else {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['tables'] = $labelTable;
}
unset($labelTable);

// Registering backend form select field prrenderingfor hook in order to localize selected items
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getSingleFieldClass'][] = 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper';

// Add data handling hook to manage ISO codes redundancies on records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'SJBR\\StaticInfoTables\\Hook\\Core\\DataHandling\\ProcessDataMap';

// Enabling the Static Info Tables Manager module
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['enableManager'] = isset($_EXTCONF['enableManager']) ? $_EXTCONF['enableManager'] : '0';

// Make the extension version and constraints available when creating language packs and to other extensions
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'ext_emconf.php');
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['version'] = $EM_CONF[$_EXTKEY]['version'];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['constraints'] = $EM_CONF[$_EXTKEY]['constraints'];




#