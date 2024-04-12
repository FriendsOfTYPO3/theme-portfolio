<?php
declare(strict_types=1);

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
