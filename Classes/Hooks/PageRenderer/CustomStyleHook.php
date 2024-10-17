<?php
declare(strict_types = 1);

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace FriendsOfTYPO3\ThemePortfolio\Hooks\PageRenderer;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Http\ApplicationType;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class CustomStyleHook
{
    /**
     * @param array $params
     * @param PageRenderer $pagerenderer
     */
    public function execute(&$params, &$pagerenderer): void
    {
        if (!($GLOBALS['TYPO3_REQUEST'] ?? null) instanceof ServerRequestInterface ||
            !ApplicationType::fromRequest($GLOBALS['TYPO3_REQUEST'])->isFrontend()
        ) {
            return;
        }

        if (!in_array('friendsoftypo3/theme-portfolio', $GLOBALS['TYPO3_REQUEST']->getAttribute('site')->getSets())) {
            return;
        }

        $settings = $GLOBALS['TYPO3_REQUEST']->getAttribute('site')->getConfiguration()['settings'];

        $properties = [];
        $properties['color-primary'] = $settings['style']['primaryColor'];
        $properties['color-secondary'] = $settings['style']['secondaryColor'];
        if (trim($settings['style']['font']) !== '') {
            $properties['font-family-heading']  = $settings['style']['font'];
        }
        if (trim($settings['style']['copyFont']) !== '') {
            $properties['font-family-copytext'] = $settings['style']['copyFont'];
        }

        $output = [];
        $output[] = ':root, * {';
        foreach ($properties as $propertyKey => $propertyValue) {
            $output[] = '--' . $propertyKey . ': ' . $propertyValue . ';';
        }
        $output[] = '}';

        $pagerenderer->addCssFile(
            GeneralUtility::writeStyleSheetContentToTemporaryFile(implode(PHP_EOL, $output)),
            'stylesheet',
            'all',
            '',
            true,
            false,
            '',
            true
        );
    }
}
