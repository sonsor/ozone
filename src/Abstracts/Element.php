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
    protected $title;

    /**
     * @var string
     */
    private $wrapperTag;

    /**
     * Element constructor.
     */
    public function __construct()
    {
        $this->wrapperTag = apply_filters(
            Constants::FIELD_WRAPPER_TAG,
            $this->wrapperTag,
            (array) $this
        );
    }

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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
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
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $tag
     * @param string|array $data
     * @return string|array
     */
    protected function apply(string $tag, $data = '')
    {
        return call_user_func(
            'apply_filters',
            array_merge(
                array($tag, $data),
                $this->toArray()
            )
        );
    }

    /**
     * @return array
     */
    protected function getClasses(): array
    {
        return $this->apply(
            Constants::FIELD_CLASSES,
            $this->getAttribute('class')
        );
    }

    /**
     * @param string $name
     * @return null|string|array
     */
    protected function getAttribute(string $name)
    {
        if (!isset($this->attributes[$name])) {
            return '';
        }

        return $this->attributes[$name];
    }

    /**
     * @return string
     */
    protected function open(): string
    {
        $html = $this->apply(Constants::BEFORE_FIELD_WRAPPER);

        /** @var array $classes */
        $classes = $this->getClasses();

        $html .= '<' .
            $this->wrapperTag .
            ' class="' . implode(" ", $classes) .
            '">';

        return $html;
    }

    /**
     * @return string
     */
    protected function close(): string
    {
        /** @var string $html */
        $html = '</' . $this->wrapperTag . '>';
        $html .= $this->apply(Constants::AFTER_FIELD_WRAPPER);
        return $html;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array(
          'name' => $this->name,
          'value' => $this->value,
          'attributes' => $this->attributes
        );
    }
}
