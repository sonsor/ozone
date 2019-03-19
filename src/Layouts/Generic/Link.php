<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/17/19
 * Time: 12:55 PM
 */

namespace Ozone\ThemeOptions\Layouts\Generic;

use Ozone\ThemeOptions\Interfaces\ILink;

/**
 * Class NavItem
 * @package Ozone\ThemeOptions\Layouts\Generic
 */
class Link implements ILink
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var
     */
    private $name;

    /**
     * @var null|ILink
     */
    private $parent;

    /**
     * @var string
     */
    private $title;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $icon;

    /**
     * NavItem constructor.
     */
    public function __construct()
    {
        $this->setId(uniqid());
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return ILink|null
     */
    public function getParent(): ?ILink
    {
        return $this->parent;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param ILink|null $parent
     */
    public function setParent(?ILink &$parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    public function uri(): string
    {
        $uri = $this->getName();
        if ($this->getParent() !== null) {
            $uri = $uri . '/' . $this->getParent()->uri();
        }
        return $uri;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array(
            'name' => $this->getName(),
            'title' => $this->getTitle(),
            'active' => $this->isActive(),
            'icon' => $this->getIcon()
        );
    }

}