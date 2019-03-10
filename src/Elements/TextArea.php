<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/3/19
 * Time: 6:01 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Field;
use Ozone\ThemeOptions\Interfaces\IField;

/**
 * Class TextArea
 * @package Ozone\ThemeOptions\Elements
 */
class TextArea extends Field implements IField
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('textarea', $this->extract());
    }
}
