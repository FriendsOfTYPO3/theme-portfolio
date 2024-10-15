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
        'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.introduction_card',
        'description' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:content_element.introduction_card.description',
        'value' => 'introduction_card',
        'icon' => 'icon_intro',
        'group' => 'portfolio',
    ],
    '--div--',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['introduction_card'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;minimalHeader,
        bodytext,
        link,
        link_text,
        image,
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
        'header_layout' => [
            'config' => [
                'default' => 1,
            ],
        ],
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'minimal',
            ],
        ],
        'image' => [
            'config' => [
                'maxitems' => 1,
            ],
        ],
    ],
];
