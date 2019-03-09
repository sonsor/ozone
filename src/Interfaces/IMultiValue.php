<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/26/19
 * Time: 9:55 PM
 */
namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface iMultiVale
 * @package Ozone\Plugin\Interface
 */
interface IMultiVale
{
    /**
     * @param array $value
     */
    public function setValue(array $value): void;

    /**
     * @return array
     */
    public function getValue(): array;
}
