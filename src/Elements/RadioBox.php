<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/5/19
 * Time: 8:59 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Field;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Constants;

/**
 * Class RadioBox
 * @package Ozone\ThemeOptions\Elements
 */
class RadioBox extends Field implements IField
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
            $this->map($options, $this->getValue())
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
            /** @var string $id */
            $id = $this->getName() . $key;
            $html .= '<label for="' . $id . '">';
            $html .= '<input id="' . $id . '" ';
            $html .= 'value="' . $key . '">';
            $html .= ($key === $selected) ? 'checked': '';
            $html .= '>';
            $html .= '<span>' . $value . '</span>';
            $html .= '<i></i>';
            $html .= '</label>';
        }
        return $html;

    }
}
