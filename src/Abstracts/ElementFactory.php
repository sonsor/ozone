<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 11:24
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\Interfaces\IField;

class ElementFactory
{
    abstract public static function create($data): IField;
}