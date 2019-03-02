<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/2/19
 * Time: 11:30 AM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Field;
use Ozone\ThemeOptions\Interfaces\iField;
use Ozone\ThemeOptions\Interfaces\iElement;

/**
 * Class Text
 * @package Ozone\ThemeOptions\Elements
 */
class Text extends Field implements iElement, iField
{
    /**
     * @return string
     */
    public function render(): string
    {
        /** @var string $html */
        $html = $this->open();

        $html .= apply_filters(
            'ozone_theme_option_before_field_title',
            $html,
            $this
        );

        $html .= '<label></label>';

        $html .= apply_filters(
            'ozone_theme_option_after_field_title',
            $html,
            $this
        );

        $html .= $this->close();

        return $html;
    }
}
