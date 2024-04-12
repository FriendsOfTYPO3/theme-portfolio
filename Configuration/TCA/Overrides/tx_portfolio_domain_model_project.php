<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$GLOBALS['TCA']['tx_portfolio_domain_model_project']['columns']['categories'] = [
    'config' => [
       'type' => 'category'
    ]
 ];
 
 ExtensionManagementUtility::addToAllTCAtypes(
    'tx_portfolio_domain_model_project',
    'categories'
 );