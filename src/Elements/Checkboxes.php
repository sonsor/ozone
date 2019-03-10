<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/10/19
 * Time: 12:22 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\MultiValueField;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Interfaces\IMultiValue;

/**
 * Class Checkboxes
 * @package Ozone\ThemeOptions\Elements
 */
class Checkboxes extends MultiValueField implements IField, IMultiValue
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('checkboxes', $this->extract());
    }
}
