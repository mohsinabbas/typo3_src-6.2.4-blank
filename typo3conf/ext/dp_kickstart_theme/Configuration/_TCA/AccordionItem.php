<?php
if(!defined('TYPO3_MODE')){
    die('Access denied.');
}


$TCA['tx_dpkickstarttheme_accordion_item'] = array(
    'ctrl' => $TCA['tx_dpkickstarttheme_accordion_item']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            tt_content,
            header,
            bodytext
        ',
    ),
    'types' => array(
        '1' => array('showitem' => '
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
            header,
            bodytext,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
        '),
    ),
    'palettes' => array(
        '1' => array(
            'showitem' => ''
        ),
        'access' => array(
            'showitem' => '
                starttime;LLL:EXT:cms/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:cms/locallang_ttc.xlf:endtime_formlabel
            ',
            'canNotCollapse' => 1
        ),
        'general' => array(
            'showitem' => '
                tt_content
            ',
            'canNotCollapse' => 1
        ),
        'visibility' => array(
            'showitem' => '
                hidden;LLL:EXT:dp_kickstart_theme/Resources/Private/Language/Backend.xlf:accordion_item
            ',
            'canNotCollapse' => 1
        ),
    ),
    'columns' => array(
        'tt_content' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:dp_kickstart_theme/Resources/Private/Language/Backend.xlf:accordion_item.tt_content',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="dp_kickstart_theme_accordion"',
                'maxitems' => 1,
            ),
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'items' => array(
                    '1' => array(
                        '0' => 'LLL:EXT:cms/locallang_ttc.xlf:hidden.I.0'
                    )
                )
            )
        ),
        'starttime' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0'
            ),
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ),
        'endtime' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0',
                'range' => array(
                    'upper' => mktime(0, 0, 0, 12, 31, 2020)
                )
            ),
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ),
        'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array(
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1
					),
					array(
						'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
						0
					)
				)
			)
		),
        'l10n_parent' => Array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_dpkickstarttheme_accordion_item',
				'foreign_table_where' => 'AND tx_dpkickstarttheme_accordion_item.uid=###REC_FIELD_l10n_parent### AND tx_dpkickstarttheme_accordion_item.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => Array(
			'config'=>array(
				'type'=>'passthrough'
			)
		),
        'header' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:dp_kickstart_theme/Resources/Private/Language/Backend.xlf:accordion_item.header',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ),
        ),
        'bodytext' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:dp_kickstart_theme/Resources/Private/Language/Backend.xlf:accordion_item.bodytext',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 3,
            ),
        ),
    ),
);