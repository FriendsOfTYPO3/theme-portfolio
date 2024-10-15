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
        foreach ($settings['style']['data'] as $item) {
            $styleVariables[] = 'data-' . $item['key'] . '="' . $item['value'] . '"';
        }

        return ' ' . implode(' ', $styleVariables);
    }

    public function getCssForHeader(string $content, array $conf, ServerRequestInterface $request): string
    {
        $settings = $this->getSettings($request);
        $properties = [];
        foreach ($settings['style']['variables'] as $item) {
            $properties[$item['key']] = $item['value'];
        }

        $properties['font-family-heading']  = '\'' . $settings['style']['font'] . '\'';
        $properties['font-family-copytext'] = '\'' . $settings['style']['copyFont'] . '\'';

        $output = [];
        $output[] = '<style>';
        $output[] = ':root, * {';
        foreach ($properties as $propertyKey => $propertyValue) {
            $output[] = '--' . $propertyKey . ': ' . $propertyValue . ';';
        }
        $output[] = '}';
        $output[] = '</style>';

        return implode(PHP_EOL, $output);
    }

    protected function getSettings(ServerRequestInterface $request): array
    {
        return $request->getAttribute('site')->getConfiguration()['settings'];
    }
}
