<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/24/19
 * Time: 3:14 PM
 */
namespace Ozone\Plugin\Interface;

/**
 * Interface iDirector
 * @package Ozone\Plugin\Interface
 */
interface iDirector
{
    /**
     * @param array $options
     */
    public function build(array $options): void

    /**
     * @return string
     */
    public function render(): string
}