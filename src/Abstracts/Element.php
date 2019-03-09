<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/27/19
 * Time: 9:34 PM
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\interfaces\IElement;
use Ozone\ThemeOptions\Constants;
use Ozone\ThemeOptions\Interfaces\ILoader;

/**
 * Class Element
 * @package Ozone\ThemeOptions\Abstracts
 */
abstract class Element implements IElement
{
    /**
     * @var array
     */
    protected $attributes;

    /**
     * @var ILoader
     */
    protected $loader;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $name;

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
     * @return ILoader
     */
    public function getLoader(): ILoader
    {
        return $this->loader;
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
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ILoader $loader
     */
    public function setLoader(ILoader $loader): void
    {
        $this->loader = $loader;
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
          'name' => $this->getName(),
          'attributes' => $this->getAttributes()
        );
    }
}
