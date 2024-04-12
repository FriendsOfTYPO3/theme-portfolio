<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:tx_portfolio_domain_model_project',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'title',
        'iconfile' => 'EXT:theme_portfolio/Resources/Public/Icons/Backend/project.png',
    ],
    'types' => [
        '1' => ['showitem' => '
            --palette--;;paletteMain,
            description,
            show_detail_page,
            links,
            images, 
            categories,
        '],
    ],
    'palettes' => [
        'paletteMain' => [
            'showitem' => 'title,hidden',
        ],
    ],
    'columns' => [
        'hidden' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'title' => [
            'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:field.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'description' => [
            'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:field.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'show_detail_page' => [
            'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:field.showDetailPage',
            'config' => [
                'type' => 'check',
                'default' => false,
            ],
        ],
        'links' => [
            'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:field.links',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfolio_domain_model_link',
                'foreign_field' => 'parent',
                'maxitems' => 10,
                'appearance' => [
                    'collapseAll' => true,
                    'expandSingle' => true,
                    'useSortable' => true,
                ],
            ],
        ],
        'images' => [
            'label' => 'LLL:EXT:theme_portfolio/Resources/Private/Language/locallang_db.xlf:field.image',
            'config' => [
                'type' => 'inline',
                'foreign_field' => 'parent',
                'foreign_table' => 'sys_file_reference',
                'allowed' => 'common-media-types',
                'maxitems' => 10
            ],
        ],
    ],
];
