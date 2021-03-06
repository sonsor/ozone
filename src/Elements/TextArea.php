<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/3/19
 * Time: 6:01 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\SingleValueField;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Interfaces\IValue;

/**
 * Class TextArea
 * @package Ozone\ThemeOptions\Elements
 */
class TextArea extends SingleValueField implements IField, IValue
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('textarea', $this->extract());
    }
}
