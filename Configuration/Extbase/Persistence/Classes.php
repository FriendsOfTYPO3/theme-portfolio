<?php
declare(strict_types=1);

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use FriendsOfTYPO3\ThemePortfolio\Domain\Model\Link;
use FriendsOfTYPO3\ThemePortfolio\Domain\Model\Project;

return [
    Project::class => [
        'tableName' => 'tx_portfolio_domain_model_project',
    ],
    Link::class => [
        'tableName' => 'tx_portfolio_domain_model_link',
    ],
];
