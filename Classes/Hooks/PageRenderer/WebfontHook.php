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

class WebfontHook
{
    /**
     * @param array $params
     * @param PageRenderer $pagerenderer
     */
    public function execute(&$params, &$pagerenderer): void
    {
        if (!($GLOBALS['TYPO3_REQUEST'] ?? null) instanceof ServerRequestInterface ||
            !ApplicationType::fromRequest($GLOBALS['TYPO3_REQUEST'])->isFrontend() ||
            (!is_array($params['cssFiles']) && !is_array($params['cssLibs']))
        ) {
            return;
        }

        $settings = $this->getSettings($GLOBALS['TYPO3_REQUEST']);
        $this->includeFont($settings['style']['font'], $pagerenderer);
        $this->includeFont($settings['style']['copyFont'], $pagerenderer);
    }

    protected function includeFont($name, $pagerenderer)
    {
        $includePath = $this->findIncludePath($name);
        if ($includePath) {
            $pagerenderer->addCssFile($includePath);
        }
    }

    protected function findIncludePath($name): ?string
    {
        $name = strtolower($name);
        $name = str_replace(' ', '-', $name);
        $filename = 'EXT:theme_portfolio/Resources/Public/Fonts/' . $name . '/webfont.css';
        if (file_exists(GeneralUtility::getFileAbsFileName($filename))) {
            return $filename;
        }

        return null;
    }

    protected function getSettings(ServerRequestInterface $request): array
    {
        return $request->getAttribute('site')->getConfiguration()['settings'];
    }
}
