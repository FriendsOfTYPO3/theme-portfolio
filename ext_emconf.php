<?php

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Portfolio Theme',
    'description' => 'TYPO3 theme for a portfolio website',
    'category' => 'Theme',
    'state' => 'stable',
    'author' => 'Felix Pachowsky',
    'author_email' => 'f.pachowsky@googlemail.com',
    'author_company' => '',
    'version' => '0.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
