<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/10/19
 * Time: 12:46 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\SingleValueField;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Interfaces\IValue;

/**
 * Class File
 * @package Ozone\ThemeOptions\Elements
 */
class File extends SingleValueField implements IField, IValue
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('file', $this->extract());
    }

}