<?php
declare(strict_types=1);

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.resume',
        'description' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.resume.description',
        'value' => 'resume',
        'icon' => 'icon_resume',
        'group' => 'portfolio',
    ],
    '--div--',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['resume'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;minimalHeader,
        resume_items,
        additional_header,
        additional_resume_items,
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
            ],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['additional_header'] = [
    'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:field.additional_header',
    'config' => [
        'type' => 'input',
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['resume_items'] = [
    'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.resume.items',
    'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_portfolio_resume_item',
        'foreign_field' => 'parent',
        'foreign_match_fields' => [
            'is_additional_item' => 0,
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['additional_resume_items'] = [
    'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:field.additional_resume_items',
    'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_portfolio_resume_item',
        'foreign_field' => 'parent',
        'foreign_sortby' => 'sorting',
        'foreign_match_fields' => [
            'is_additional_item' => 1,
        ],
        'appearance' => [
            'useSortable' => true,
        ],
    ],
];
