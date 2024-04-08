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
                        'label' => '',
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
			'type' => 'datetime', 
			'format' => 'datetime',
			'default' => 0,
			'behaviour' => [
				'allowLanguageSynchronization' => true
			]			
        ],
    ],
	'ende_termin' => [
        'exclude' => true,
        'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.endedatum',
        'config' => [
			'type' => 'datetime', 
			'format' => 'datetime',
			'default' => 0,
			'behaviour' => [
				'allowLanguageSynchronization' => true
			]			
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
                        'label' => '',
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
				0 => [
					'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.0',
					'value' => 0,
				],
				1 => [
					'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.1',
					'value' => 1,
				],
				2 => [
					'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.2',
					'value' => 2,
				],
				3 => [
					'label' => 'LLL:EXT:bfbnnews/Resources/Private/Language/locallang_db.xlf:tx_bfbnnews_domain_model_bfbntermin.erinnerung.I.3',
					'value' => 3,
				],				
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
