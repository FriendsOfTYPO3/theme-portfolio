<?php
declare(strict_types=1);

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use FriendsOfTYPO3\ThemePortfolio\Controller\ProjectController;
use FriendsOfTYPO3\ThemePortfolio\Hooks\PageRenderer\WebfontHook;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

// Register custom EXT:form configuration
if (ExtensionManagementUtility::isLoaded('form')) {
    ExtensionManagementUtility::addTypoScriptSetup(
        trim('
            module.tx_form {
                settings {
                    yamlConfigurations {
                        110 = EXT:theme_portfolio/Configuration/Form/Setup.yaml
                    }
                }
            }
            plugin.tx_form {
                settings {
                    yamlConfigurations {
                        110 = EXT:theme_portfolio/Configuration/Form/Setup.yaml
                    }
                }
            }
        ')
    );
}

ExtensionUtility::configurePlugin(
    'ThemePortfolio',
    'Projects',
    [
        ProjectController::class => ['list', 'show'],
    ],
    [
        ProjectController::class => ['list', 'show'],
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][WebfontHook::class]
    = WebfontHook::class . '->execute';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['portfolio'][] = 'FriendsOfTYPO3\ThemePortfolio\\ViewHelpers';
