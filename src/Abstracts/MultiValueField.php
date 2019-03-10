<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/10/19
 * Time: 12:39 PM
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\Constants;
use Ozone\ThemeOptions\Interfaces\IMultiValue;

/**
 * Class MultiValueField
 * @package Ozone\ThemeOptions\Abstracts
 */
abstract class MultiValueField extends Field implements IMultiValue
{
    /**
     * @var array
     */
    protected $value;
    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @param array $value
     */
    public function setValue(array $value): void
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
