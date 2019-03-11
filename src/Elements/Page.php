<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/11/19
 * Time: 9:53 PM
 */

namespace Ozone\ThemeOptions\Elements;


use Ozone\ThemeOptions\Abstracts\Element;
use Ozone\ThemeOptions\Interfaces\IElement;
use Ozone\ThemeOptions\Interfaces\IWrapper;

/**
 * Class Page
 * @package Ozone\ThemeOptions\Elements
 */
class Page extends Element implements IElement, IWrapper
{
    /**
     * @return string
     */
    public function open(): string
    {
        return $this->getLoader()->getView('page-open', $this->extract());
    }

    /**
     * @return string
     */
    public function close(): string
    {
        return $this->getLoader()->getView('page-close', $this->extract());
    }
}
