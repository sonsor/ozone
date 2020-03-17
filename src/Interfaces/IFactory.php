<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 12:12
 */

namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface IFactory
 * @package Ozone\ThemeOptions\Interfaces
 */
interface IFactory
{
    /**
     * @param array $data
     * @return IElement
     */
    public static function create(array $data): IElement;
}