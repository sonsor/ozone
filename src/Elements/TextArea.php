<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/3/19
 * Time: 6:01 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Field;
use Ozone\ThemeOptions\Interfaces\iField;
use Ozone\ThemeOptions\Interfaces\iElement;
use Ozone\ThemeOptions\Constants;

/**
 * Class TextArea
 * @package Ozone\ThemeOptions\Elements
 */
class TextArea extends Field implements iElement, iField
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

        $html .= $this->apply(
            Constants::FIELD,
            '<textarea 
                    name="' . $this->getName() . '"
                    id="' . $this->getName() . '"
                    type="text"
                  >' . $this->getValue() . '</textarea>'
        );

        $html .= $this->apply(Constants::AFTER_FIELD);
        // END OF FIELD


        $html .= $this->close();
        // END OF FIELD WRAPPER

        return $html;
    }
}
