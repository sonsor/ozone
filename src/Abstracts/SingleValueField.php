<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/10/19
 * Time: 12:37 PM
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\Constants;
use Ozone\ThemeOptions\Interfaces\IValue;

/**
 * Class SingleValueField
 * @package Ozone\ThemeOptions\Abstracts
 */
abstract class SingleValueField extends Field implements IValue
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
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

        // applyin filters on field value
        $vars['value'] = $this->apply(
            Constants::FIELD_VALUE,
            $this->getValue()
        );

        return $vars;
    }
}
