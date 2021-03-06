<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/24/19
 * Time: 1:55 PM
 */
namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface iSection
 * @package Ozone\Plugin\Interface
 */
interface IWrapper
{
    /**
     * This function is used to render element html that
     * will implement all the elements
     * @return string
     */
    public function open(): string;

    /**
     * This function is used to render element html that
     * will implement all the elements
     * @return string
     */
    public function close(): string;
}
