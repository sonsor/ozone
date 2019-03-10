<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/10/19
 * Time: 12:34 PM
 */

namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface IValue
 * @package Ozone\ThemeOptions\Interfaces
 */
interface IValue
{
    /**
     * @param string $value
     */
    public function setValue(string $value): void;

    /**
     * @return string
     */
    public function getValue(): string;
}