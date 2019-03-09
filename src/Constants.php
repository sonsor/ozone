<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/2/19
 * Time: 3:07 PM
 */

namespace Ozone\ThemeOptions;

/**
 * Class Constants
 * @package Ozone\ThemeOptions
 */
class Constants
{
    public static const OZONE_THEME_OPTION = 'ozone_theme_option_';

    // FIELD WRAPPER FILTERS
    public static const BEFORE_FIELD_WRAPPER = self::OZONE_THEME_OPTION . 'before_field_wrapper';
    public static const AFTER_FIELD_WRAPPER = self::OZONE_THEME_OPTION . 'after_field_wrapper';
    public static const FIELD_WRAPPER_TAG = self::OZONE_THEME_OPTION . 'field_wrapper_tag';
    public static const FIELD_CLASSES = self::OZONE_THEME_OPTION . 'field_classes';
    public static const FIELD_ATTRIBUTES = self::OZONE_THEME_OPTION . 'field_attributes';

    // FIELD TITLE FILTERS
    public static const BEFORE_TITLE_TAG = self::OZONE_THEME_OPTION . 'before_title_tag';
    public static const AFTER_TITLE_TAG = self::OZONE_THEME_OPTION . 'before_title_Tag';
    public static const BEFORE_TITLE = self::OZONE_THEME_OPTION . 'before_field_title';
    public static const TITLE = self::OZONE_THEME_OPTION . 'field_title';
    public static const AFTER_TITLE = self::OZONE_THEME_OPTION . 'after_field_title';

    // FIELD FILTERS
    public static const BEFORE_FIELD = self::OZONE_THEME_OPTION . 'before_field';
    public static const FIELD = self::OZONE_THEME_OPTION . 'field';
    public static const AFTER_FIELD = self::OZONE_THEME_OPTION . 'after_field';

    public static const FIELD_VALUE = self::OZONE_THEME_OPTION . 'field_value';

}
