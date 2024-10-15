<?php

declare(strict_types=1);

/*
 * This file is part of the package friendsoftypo3/theme-portfolio.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace FriendsOfTYPO3\ThemePortfolio\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\Category;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Project extends AbstractEntity
{
    protected string $title = '';

    protected string $description = '';

    /**
     * @var ObjectStorage<FileReference>
     */
    protected $images;

    /**
     * @var ObjectStorage<Link>
     */
    protected $links;

    /**
     * @var ObjectStorage<Category>
     */
    protected $categories;

    protected bool $showDetailPage = false;

    public function __construct()
    {
        $this->images = new ObjectStorage();
        $this->links = new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getShowDetailPage(): bool
    {
        return $this->showDetailPage;
    }

    public function setShowDetailPage(bool $showDetailPage): void
    {
        $this->showDetailPage = $showDetailPage;
    }

    public function getImages(): ObjectStorage
    {
        return $this->images;
    }

    public function setImages(ObjectStorage $images): void
    {
        $this->images = $images;
    }

    public function addImage(FileReference $image): void
    {
        $this->images->attach($image);
    }

    public function removeImage(FileReference $image): void
    {
        $this->images->detach($image);
    }

    public function getLinks(): ObjectStorage
    {
        return $this->links;
    }

    public function setLinks(ObjectStorage $links): void
    {
        $this->links = $links;
    }

    public function addLink(Link $link)
    {
        $this->links->attach($link);
    }

    public function removeLink(Link $linkToRemove)
    {
        $this->links->detach($linkToRemove);
    }

    public function getCategories(): ObjectStorage
    {
        return $this->categories;
    }

    public function setCategories(ObjectStorage $categories): void
    {
        $this->categories = $categories;
    }

    public function addCategories(Link $categories)
    {
        $this->categories->attach($categories);
    }

    public function removeCategory(Link $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

}
