<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/24/19
 * Time: 1:55 PM
 */
namespace Ozone\ThemeOptions\Interface;

/**
 * Interface iElement
 * @package Ozone\Plugin\Interface
 */
interface iElement
{
    /**
     * This function is used to render element html that
     * will implement all the elements
     * @return string
     */
    public function render(): string
}