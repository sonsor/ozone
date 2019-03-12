<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/12/19
 * Time: 10:22 PM
 */

namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface IBuilder
 * @package Ozone\ThemeOptions\Interfaces
 */
interface IBuilder
{
    /**
     * @param string $url
     */
    public function setLogo(string $url): void;
}
