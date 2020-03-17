<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 14:44
 */

namespace Ozone\ThemeOptions\Interfaces;

/**
 * Interface IStretegy
 * @package Ozone\ThemeOptions\Interfaces
 */
interface IStretegy
{
    /**
     * @return IFactory
     */
    public function getFactory(): IFactory;

    /**
     * @param IFactory $factory
     */
    public function setFactory(IFactory $factory): void;

    /**
     * @param array $data
     * @return IElement
     */
    public function create(array $data): IElement;
}