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
     * @return array
     */
    protected function extract(): array
    {
        /** @var array $vars */
        $vars = parent::extract();

        // applyin filters on field options
        $vars['options'] = $this->apply(
            Constants::FIELD_OPTIONS,
            $this->getOptions()
        );

        return $vars;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLoader()->getView('radio', $this->extract());
    }
}
