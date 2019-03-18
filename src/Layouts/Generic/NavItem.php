<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/18/19
 * Time: 9:03 PM
 */

namespace Ozone\ThemeOptions\Layouts\Generic;


use Ozone\ThemeOptions\Interfaces\ILink;

/**
 * Class NavItem
 * @package Ozone\ThemeOptions\Layouts\Generic
 */
class NavItem implements ILink
{
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

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array(
            'name' => $this->getName(),
            'title' => $this->getTitle(),
            'active' => $this->isActive()
        );
    }
}
