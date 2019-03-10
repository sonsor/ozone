<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/10/19
 * Time: 12:07 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\SingleValueField;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Interfaces\IValue;

/**
 * Class Checkbox
 * @package Ozone\ThemeOptions\Abstracts
 */
class Checkbox extends SingleValueField implements IField, IValue
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('checkbox', $this->extract());
    }
}
