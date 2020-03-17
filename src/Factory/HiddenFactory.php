<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 14:57
 */

namespace Ozone\ThemeOptions\Factory;

use Ozone\ThemeOptions\Abstracts\FieldFactory;
use Ozone\ThemeOptions\Elements\Hidden;
use Ozone\ThemeOptions\Interfaces\IFactory;

/**
 * Class HiddenFactory
 * @package Ozone\ThemeOptions\Factory
 */
class HiddenFactory extends FieldFactory implements IFactory
{
    /**
     * @param array $data
     * @return IField
     */
    public static function create($data): IField
    {
        $field = new Hidden();
        $field->setName($data['name']);
        $field->setAttributes($data['attributes']);
        return $field;
    }
}