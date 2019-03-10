<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/2/19
 * Time: 11:30 AM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\SingleValueField;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Interfaces\IValue;

/**
 * Class Text
 * @package Ozone\ThemeOptions\Elements
 */
class Text extends SingleValueField implements IField, IValue
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('text', $this->extract());
    }
}
