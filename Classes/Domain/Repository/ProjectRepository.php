<?php

declare(strict_types=1);

namespace FriendsOfTYPO3\ThemePortfolio\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for Projects
 */
class ProjectRepository extends Repository
{
    /** @var array */
    protected $defaultOrderings = ['sorting' => QueryInterface::ORDER_ASCENDING];
}
