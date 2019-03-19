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
     * @param string $title
     * @param ILink|null $parent
     * @return ILink
     */
    public function add(string $name, string $title, ILink $parent = null): ILink;

    /**
     * @param ILink $menu
     * @param int $depth
     * @return array
     */
    public function childrens(ILink $menu, int $depth): array;
}
