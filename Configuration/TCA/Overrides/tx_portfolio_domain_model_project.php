<?php

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$GLOBALS['TCA']['tx_portfolio_domain_model_project']['columns']['categories'] = [
    'config' => [
       'type' => 'category',
    ],
 ];

ExtensionManagementUtility::addToAllTCAtypes(
    'tx_portfolio_domain_model_project',
    'categories'
);
