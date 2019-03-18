<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/17/19
 * Time: 12:56 PM
 */

namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface ILink
 * @package Ozone\ThemeOptions\Interfaces
 */
interface ILink
{
    /**
     * @return ILink|null
     */
    public function getParent(): ?ILink;

    /**
     * @param ILink $parent
     */
    public function setParent(ILink &$parent): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     */
    public function setTitle(string $title): void;

    /**
     * @return bool
     */
    public function isActive(): bool;

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void;

    /**
     * @return array
     */
    public function toArray(): array;
}
