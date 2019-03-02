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
