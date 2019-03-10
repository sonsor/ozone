<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/2/19
 * Time: 11:30 AM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Field;
use Ozone\ThemeOptions\Interfaces\IField;

/**
 * Class Text
 * @package Ozone\ThemeOptions\Elements
 */
class Text extends Field implements IField
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('text', $this->extract());
    }
}
