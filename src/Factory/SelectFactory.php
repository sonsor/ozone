<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 14:09
 */

namespace Ozone\ThemeOptions\Factory;

use Ozone\ThemeOptions\Abstracts\FieldFactory;
use Ozone\ThemeOptions\Elements\Select;
use Ozone\ThemeOptions\Interfaces\IFactory;

/**
 * Class SelectFactory
 * @package Ozone\ThemeOptions\Factory
 */
class SelectFactory extends FieldFactory implements IFactory
{
    /**
     * @param array $data
     * @return IField
     */
    public static function create($data): IField
    {
        $field = new Select();
        $field->setName($data['name']);
        $field->setTitle($data['title']);
        $field->setAttributes($data['attributes']);
        return $field;
    }
}