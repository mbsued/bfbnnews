<?php
defined('TYPO3') || die();

$tmp_bfbnnews_columns = [

    'termin' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.termin',
        'config' => [
            'type' => 'check',
			'renderType' => 'checkboxToggle',
			'default' => 0,
			'items' => [
				[
					0 => '',
					1 => '',
				]
			],
        ]

    ],
    'betreff' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.betreff',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'beginn_termin' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.beginndatum',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int',
            'default' => 0,
        ],
    ],
	'ende_termin' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.endedatum',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int',
            'default' => 0,
        ],
    ],
    'veranstaltungsort' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.veranstaltungsort',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'veranstalter' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.veranstalter',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'alarm' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.alarm',
        'config' => [
            'type' => 'check',
			'renderType' => 'checkboxToggle',
			'default' => 0,
			'items' => [
				[
					0 => '',
					1 => '',
				]
			],
        ]
    ],
    'erinnerung' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung',
        'config' => [
        	'renderType' => 'selectSingle',
            'type' => 'select',
            'items' => [
                ['LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.0', '0'],
                ['LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.1', '1'],
                ['LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.2', '2'],
                ['LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.3', '3'],
            ],
            'size' => 4,    
            'maxitems' => 1,
        ]
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news',$tmp_bfbnnews_columns);

$GLOBALS['TCA']['tx_news_domain_model_news']['types'][0]['showitem'] .= ',--div--;LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin,';
$GLOBALS['TCA']['tx_news_domain_model_news']['types'][0]['showitem'] .= 'termin, betreff, beginn_termin, ende_termin, veranstaltungsort, veranstalter, alarm, erinnerung';

$GLOBALS['TCA']['tx_news_domain_model_news']['types'][1]['showitem'] .= ',--div--;LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin,';
$GLOBALS['TCA']['tx_news_domain_model_news']['types'][1]['showitem'] .= 'termin, betreff, beginn_termin, ende_termin, veranstaltungsort, veranstalter, alarm, erinnerung';

$GLOBALS['TCA']['tx_news_domain_model_news']['types'][2]['showitem'] .= ',--div--;LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin,';
$GLOBALS['TCA']['tx_news_domain_model_news']['types'][2]['showitem'] .= 'termin, betreff, beginn_termin, ende_termin, veranstaltungsort, veranstalter, alarm, erinnerung';
