<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/4/19
 * Time: 8:50 PM
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\Field;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Constants;

/**
 * Class Select
 * @package Ozone\ThemeOptions\Elements
 */
class Select extends Field implements IField
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
        return $this->getLoader()->getView('select', $this->extract());
    }
}
