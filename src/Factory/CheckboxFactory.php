<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 11:23
 */

namespace Ozone\ThemeOptions\Factory;

use Ozone\ThemeOptions\Abstracts\FieldFactory;
use Ozone\ThemeOptions\Elements\Checkbox;
use Ozone\ThemeOptions\Interfaces\IField;

/**
 * Class CheckboxFactory
 * @package Ozone\ThemeOptions\Factory
 */
class CheckboxFactory extends FieldFactory
{
    /**
     * @param array $data
     * @return IField
     */
    public static function create($data): IField
    {
        $field = new Checkbox();
        $field->setName($data['name']);
        $field->setTitle($data['title']);
        $field->setAttributes($data['attributes']);
        return $field;
    }
}