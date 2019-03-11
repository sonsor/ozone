<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/26/19
 * Time: 8:45 PM
 */
namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface iField
 * @package Ozone\Plugin\Interface
 */
interface IField
{
    /**
     * This function is used to render element html that
     * will implement all the elements
     * @return string
     */
    public function render(): string;

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
