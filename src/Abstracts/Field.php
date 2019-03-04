<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/2/19
 * Time: 6:08 PM
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\Interfaces\iField;

/**
 * Class Field
 * @package Ozone\ThemeOptions\Abstracts
 */
abstract class Field extends Element implements iField
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    protected function getClasses(): array
    {
        /** @var array $classes */
        $classes = parent::getClasses();
        if (!in_array('form-group', $classes)) {
            array_unshift($classes, 'form-group');
        }
        return $classes;
    }
}
