<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.services',
        'description' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.services.description',
        'value' => 'services',
        'icon' => 'icon_services',
        'group' => 'default',
    ],
    '--div--',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['services'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;minimalHeaders,
        services,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
        starttime,
        endtime
    ',
    'columnsOverrides' => [
        'header' => [
            'config' => [
                'required' => true,
            ]
        ],
        'header_layout' => [
            'config' => [
                'default' => 2
            ]
        ],
    ]
];

$GLOBALS['TCA']['tt_content']['columns']['services'] = [
    'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.services',
    'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_portfolio_service',
        'foreign_field' => 'parent',
        'foreign_sortby' => 'sorting',
        'appearance' => [
            'useSortable' => true
        ],
    ]
];
