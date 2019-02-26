<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/26/19
 * Time: 8:45 PM
 */
namespace Ozone\Plugin\Interface;

/**
 * Interface iField
 * @package Ozone\Plugin\Interface
 */
interface iField
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