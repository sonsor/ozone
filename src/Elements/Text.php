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
use Ozone\ThemeOptions\Constants;

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
            '<input 
                    name="' . $this->getName() . '"
                    id="' . $this->getName() . '"
                    value="' . $this->getValue() . '"
                  />'
        );

        $html .= $this->apply(Constants::AFTER_FIELD);
        // END OF FIELD


        $html .= $this->close();
        // END OF FIELD WRAPPER

        return $html;
    }
}
