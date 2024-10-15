<?php

declare(strict_types=1);

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace FriendsOfTYPO3\ThemePortfolio\UserFunctions;

use function implode;

use Psr\Http\Message\ServerRequestInterface;

final class SetCss
{
    public function getBodyDataModifier(string $content, array $conf, ServerRequestInterface $request): string
    {
        $settings = $this->getSettings($request);
        $styleVariables = [];
        $styleVariables[] = 'data-theme="' . $settings['style']['theme'] . '"';
        $styleVariables[] = 'data-button-border-radius="' . $settings['style']['buttonBorderRadius'] . '"';

        return ' ' . implode(' ', $styleVariables);
    }

    protected function getSettings(ServerRequestInterface $request): array
    {
        return $request->getAttribute('site')->getConfiguration()['settings'];
    }
}
