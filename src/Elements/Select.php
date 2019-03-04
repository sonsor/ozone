<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/4/19
 * Time: 8:50 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Field;
use Ozone\ThemeOptions\Interfaces\iField;
use Ozone\ThemeOptions\Interfaces\iElement;
use Ozone\ThemeOptions\Constants;

/**
 * Class Select
 * @package Ozone\ThemeOptions\Elements
 */
class Select extends Field implements iElement, iField
{
    /**
     * @return string
     */
    public function render(): string
    {
        /** @var string $html */
        // START FIELD WRAPPER
        $html = $this->open();

        // START FOR FIELD LABEL
        $html .= $this->apply(Constants::BEFORE_FIELD_TITLE);

        $html .= '<label  for="' . $this->getName() . '">';

        $html .= $this->apply(Constants::FIELD_TITLE, $this->getTitle());

        $html .= '</label>';

        $html .= $this->apply(Constants::AFTER_FIELD_TITLE);
        // END OF FIELD LABEL

        // START OF FIELD
        $html .= $this->apply(Constants::BEFORE_FIELD);

        /** @var array $options */
        $options = $this->getOptions();

        $html .= $this->apply(
            Constants::FIELD,
            '<select 
                    name="' . $this->getName() . '"
                    id="' . $this->getName() . '"
                  >' . $this->map($options, $this->getValue()) . '</select>'
        );

        $html .= $this->apply(Constants::AFTER_FIELD);
        // END OF FIELD


        $html .= $this->close();
        // END OF FIELD WRAPPER

        return $html;
    }

    /**
     * @param array $options
     * @param string $selected
     * @return string
     */
    protected function map(array $options, string $selected): string
    {
        /** @var string $html */
        $html = '';

        /**
         * @var string $key
         * @var string $value
         */
        foreach ($options as $key => $value) {
            $html .= '<option ';
            $html .= 'value="' . $key . '">';
            $html .= ($key === $selected) ? 'selected': '';
            $html .= '>';
            $html .= $value;
            $html .= '</option>';
        }
        return $html;
    }
}
