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
        'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.client_logos',
        'description' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.client_logos.description',
        'value' => 'client_logos',
        'icon' => 'icon_clients',
        'group' => 'portfolio',
    ],
    '--div--',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['client_logos'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;minimalHeaders,
        client_logos,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
        starttime,
        endtime
    ',
    'columnsOverrides' => [
        'header_layout' => [
            'config' => [
                'default' => 2,
            ],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['columns']['client_logos'] = [
    'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.client_logos',
    'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_portfolio_client_logo',
        'foreign_field' => 'parent',
        'foreign_sortby' => 'sorting',
        'appearance' => [
            'useSortable' => true,
        ],
    ],
];
