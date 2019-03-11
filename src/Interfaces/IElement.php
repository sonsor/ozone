<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/24/19
 * Time: 1:55 PM
 */
namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface iElement
 * @package Ozone\Plugin\Interface
 */
interface IElement
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void;

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void;

    /**
     * @param array $attributes
     * @return void
     */
    public function setAttributes(array $attributes): void;
}
