<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.skill_display',
        'description' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.skill_display.description',
        'value' => 'skill_display',
        'icon' => 'icon_skills',
        'group' => 'default',
    ],
    '--div--',
    'after'
);


$GLOBALS['TCA']['tt_content']['types']['skill_display'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;minimalHeaders,
        skills,
        show_progress_level,
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

$GLOBALS['TCA']['tt_content']['columns']['skills'] = [
    'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.skill_display.skills',
    'config' => [
        'type' => 'inline',
        'help' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.skill_display.skills_help',
        'foreign_table' => 'tx_portfolio_skill',
        'foreign_field' => 'parent',
        'foreign_sortby' => 'sorting',
        'appearance' => [
            'useSortable' => true
        ],
    ]
];

$GLOBALS['TCA']['tt_content']['columns']['show_progress_level'] = [
    'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.skill_display.show_progress_level',
    'config' => [
        'type' => 'check',
    ]
];

