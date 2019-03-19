<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/17/19
 * Time: 12:55 PM
 */

namespace Ozone\ThemeOptions\Layouts\Generic;

use Ozone\ThemeOptions\Interfaces\ILink;
use Ozone\ThemeOptions\Interfaces\INav;

/**
 * Class Nav
 * @package Ozone\ThemeOptions\Layouts\Generic
 */
class Nav implements INav
{
    /**
     * @var array
     */
    private $items;


    /**
     * @param string $name
     * @param string $title
     * @param ILink|null $parent
     * @return ILink
     */
    public function add(string $name, string $title, ILink $parent = null): ILink
    {
        /** @var ILink $link */
        $link = new Link();
        $link->setName($name);
        $link->setTitle($title);
        $link->setParent($parent);
        $this->items[] = &$link;
        return $link;
    }

    /**
     * @param ILink $menu
     * @param int $depth
     * @return array
     */
    public function childrens(ILink $menu, int $depth): array
    {
        /** @var array $childrens */
        $childrens = [];

        /** @var ILink $item */
        foreach ($this->items as $item) {
            if ($item->getId() === $menu->getId()) {
                $childrens[] = $item->toArray();

                // if $depth is greater than  grab its children until depth is zero
                if ($depth > 1) {
                    $childrens[count($childrens) - 1]['childrens'] = $this->childrens($item, --$depth);
                }
            }
        }
        return $childrens;
    }
}
