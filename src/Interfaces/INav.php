<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/27/19
 * Time: 9:36 PM
 */

namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface iNav
 * @package Ozone\ThemeOptions\Interfaces
 */
interface INav
{
    /**
     * @param string $name
     * @param string $label
     */
    public function add(string $name, string $label): void;
}
