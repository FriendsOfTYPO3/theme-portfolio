<?php

namespace FriendsOfTYPO3\ThemePortfolio\Domain\Model;

use Symfony\Component\Config\Resource\FileResource;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Link extends AbstractEntity
{
    protected string $name = '';

    protected string $link = '';

    public function __construct()
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }
}
