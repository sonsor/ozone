<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/11/19
 * Time: 9:48 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Element;
use Ozone\ThemeOptions\Interfaces\IElement;
use Ozone\ThemeOptions\Interfaces\IWrapper;

/**
 * Class Section
 * @package Ozone\ThemeOptions\Elements
 */
class Section extends Element implements IElement, IWrapper
{
    /**
     * @return string
     */
    public function open(): string
    {
        return $this->getLoader()->getView('section-open', $this->extract());
    }

    /**
     * @return string
     */
    public function close(): string
    {
        return $this->getLoader()->getView('section-close', $this->extract());
    }
}
