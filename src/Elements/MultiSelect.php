<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 14:18
 */

namespace Ozone\ThemeOptions\Elements;

use Ozone\ThemeOptions\Abstracts\MultiValueField;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Interfaces\IMultiValue;

/**
 * Class MultiSelect
 * @package Ozone\ThemeOptions\Elements
 */
class MultiSelect extends MultiValueField implements IField, IMultiValue
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
        return $this
            ->getLoader()
            ->getView(
                'multi-select',
                $this->extract()
            )
    }
}