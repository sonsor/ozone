<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 11:39
 */

namespace Ozone\ThemeOptions\Factory;

use Ozone\ThemeOptions\Abstracts\FieldFactory;
use Ozone\ThemeOptions\Elements\Radio;

/**
 * Class RadioFactory
 * @package Ozone\ThemeOptions\Factory
 */
class RadioFactory extends FieldFactory
{
    /**
     * @param array $data
     * @return IField
     */
    public static function create($data): IField
    {
        $field = new Radio();
        $field->setName($data['name']);
        $field->setTitle($data['title']);
        $field->setAttributes($data['attributes']);
        return $field;
    }
}