<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/27/19
 * Time: 9:34 PM
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\interfaces\iElement;
use Ozone\ThemeOptions\Constants;

/**
 * Class Element
 * @package Ozone\ThemeOptions\Abstracts
 */
abstract class Element implements iElement
{
    /**
     * @var array
     */
    protected $attributes;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    private $wrapperTag;

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     * @return string|null
     */
    protected function getAttribute(string $name): ?string
    {
        if (!isset($this->attributes[$name])) {
            return '';
        }

        $attribute = $this->attributes[$name];
        if (is_array($attribute)) {
            return implode('', $attribute);
        }

        return (string) $attribute;
    }

    /**
     * @return string
     */
    protected function open(): string
    {
        $html = apply_filters(
            Constants::BEFORE_FIELD_WRAPPER,
            '',
            (array) $this
        );

        /** @var  string $wrapperTag */
        $wrapperTag = apply_filters(
            Constants::FIELD_WRAPPER_TAG,
            $this->wrapperTag,
            (array) $this
        );

        /** @var string $classes */
        $classes = apply_filters(
            Constants::FIELD_CLASSES,
            $this->getAttribute('class'),
            (array) $this
        );

        $html .= '<'. $wrapperTag .' class="form-group ' . $classes. '">';
        return $html;
    }

    /**
     * @return string
     */
    protected function close(): string
    {
        /** @var string $wrapperTag */
        $wrapperTag = apply_filters(
            Constants::FIELD_WRAPPER_TAG,
            $this->wrapperTag,
            (array) $this
        );

        /** @var string $html */
        $html = '</' . $wrapperTag . '>';

        $html .= apply_filters(
            Constants::AFTER_FIELD_WRAPPER,
            '',
            (array) $this
        );

        return $html;
    }

    /**
     * @return array
     */
    public function __toArray(): array
    {
        return array(
          'name' => $this->name,
          'value' => $this->value,
          'attributes' => $this->attributes
        );
    }
}
