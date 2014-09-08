<?php

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(

    '_DEFAULT' => array(
        'init' => array(
            'enableCHashCache' => true,
            'appendMissingSlash' => 'ifNotFile',
            'enableUrlDecodeCache' => true,
            'enableUrlEncodeCache' => true,
            'emptyUrlReturnValue' => \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_SITE_URL'),
        ),
        'redirects' => array(
        ),
        'preVars' => array(
            '0' => array(
                'GETvar' => 'L',
                'valueMap' => array(
                    'de' => '0',
                    'en' => '1',
                ),
                'valueDefault' => 'de',
            ),
            '1' => array(
                'GETvar' => 'no_cache',
                'valueMap' => array(
                    'nc' => 1,
                ),
                'noMatch' => 'bypass'
            )
        ),
        'pagePath' => array(
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'expireDays' => '7',
            'rootpage_id' => '1',
        ),
        'postVarSets' => array(
            '_DEFAULT' => array(
                'page' => array(
                    0 => array(
                        'GETvar' => 'page',
                    ),
                ),
            ),
        ),
        'fixedPostVars' => array(
        ),
        'fileName' => array(
            'defaultToHTMLsuffixOnPrev' => false,
        ),

    )
);

?>