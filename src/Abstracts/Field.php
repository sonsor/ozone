<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/2/19
 * Time: 6:08 PM
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Constants;

/**
 * Class Field
 * @package Ozone\ThemeOptions\Abstracts
 */
abstract class Field extends Element implements IField
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return array
     */
    protected function getClasses(): array
    {
        /** @var array $classes */
        $classes = parent::getClasses();
        if (!in_array('form-group', $classes)) {
            array_unshift($classes, 'form-group');
        }
        return $classes;
    }

    public function toArray(): array
    {
        return array(
            'name' => $this->getName(),
            'value' => $this->getValue(),
            'attributes' => $this->getAttributes()
        );
    }

    /**
     * @return array
     */
    protected function extract(): array
    {
        /** @var array $vars */
        $vars = parent::extract();

        // applyin filters on before field
        $vars['before_field'] = $this->apply(Constants::BEFORE_FIELD);

        // applying filters on after field
        $vars['after_field'] = $this->apply(Constants::AFTER_FIELD);

        // applyin filters on field value
        $vars['value'] = $this->apply(
            Constants::FIELD_VALUE,
            $this->getValue()
        );

        return $vars;
    }
}
