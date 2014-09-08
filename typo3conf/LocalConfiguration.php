<?php
return array(
	'BE' => array(
		'debug' => FALSE,
		'explicitADmode' => 'explicitAllow',
		'installToolPassword' => '$P$CMYZwu4UUl4iDUIA2LrXR2r8GhYa.a1',
		'loginSecurityLevel' => 'rsa',
	),
	'DB' => array(
		'database' => 'typo3_src-6.2.4-blank',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => '127.0.0.1',
		'password' => '',
		'port' => 3306,
		'username' => 'root',
	),
	'EXT' => array(
		'extConf' => array(
			'dp_kickstart' => 'a:0:{}',
			'dp_kickstart_theme' => 'a:0:{}',
			'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:0:"";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
			'flexslider' => 'a:1:{s:19:"extendSubtitleByRTE";s:1:"0";}',
			'kickstarter' => 'a:0:{}',
			'realurl' => 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
			'simplelist' => 'a:0:{}',
			'static_info_tables' => 'a:2:{s:13:"enableManager";s:1:"0";s:5:"dummy";s:1:"0";}',
			'templavoila' => 'a:3:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}s:9:"staticDS.";a:3:{s:6:"enable";s:1:"0";s:8:"path_fce";s:27:"fileadmin/templates/ds/fce/";s:9:"path_page";s:28:"fileadmin/templates/ds/page/";}s:13:"updateMessage";s:1:"0";}',
			'usermynews' => 'a:0:{}',
			'vhs' => 'a:0:{}',
			'ws_less' => 'a:0:{}',
		),
	),
	'FE' => array(
		'activateContentAdapter' => FALSE,
		'debug' => FALSE,
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'jpg_quality' => '80',
	),
	'SYS' => array(
		'caching' => array(
			'cacheConfigurations' => array(
				'extbase_object' => array(
					'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
					'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
					'groups' => array(
						'system',
					),
					'options' => array(
						'defaultLifetime' => 0,
					),
				),
			),
		),
		'clearCacheSystem' => FALSE,
		'compat_version' => '6.2',
		'devIPmask' => '',
		'displayErrors' => FALSE,
		'enableDeprecationLog' => FALSE,
		'encryptionKey' => '8b33ea585896e737681b9dfa84a8914df2a8cd547e01d9b86c1bbca286dffeba13b4a828db83429228b4d322c02ee380',
		'isInitialInstallationInProgress' => FALSE,
		'sitename' => 'typo3_src-6.2.4-blank',
		'sqlDebug' => 0,
		'systemLogLevel' => 2,
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>