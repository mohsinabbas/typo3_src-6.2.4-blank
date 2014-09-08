<?php
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
