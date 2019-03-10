<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/5/19
 * Time: 10:52 PM
 */

namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface ILoader
 * @package Ozone\ThemeOptions\Interfaces
 */
interface ILoader
{
    /**
     * @param string $path
     * @param array $vars
     * @return string
     */
    public function getView(string $path, array $vars): string;
}
