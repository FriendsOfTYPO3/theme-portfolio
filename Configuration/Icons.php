<?php
declare(strict_types=1);

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'icon_intro' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:theme_portfolio/Resources/Public/Icons/Backend/intro.svg',
    ],
    'icon_skills' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:theme_portfolio/Resources/Public/Icons/Backend/skills.svg',
    ],
    'icon_resume' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:theme_portfolio/Resources/Public/Icons/Backend/resume.svg',
    ],
    'icon_services' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:theme_portfolio/Resources/Public/Icons/Backend/services.svg',
    ],
    'icon_clients' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:theme_portfolio/Resources/Public/Icons/Backend/clients.svg',
    ],
    'icon_project' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:theme_portfolio/Resources/Public/Icons/Backend/project.svg',
    ],
];
