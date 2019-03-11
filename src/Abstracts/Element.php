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
     * @var string
     */
    protected $id;

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
            (array)$this
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
    public function getId(): string
    {
        return $this->id;
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
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     * @return array
     */
    public function toArray(): array
    {
        return array(
            'name' => $this->getName(),
            'attributes' => $this->getAttributes()
        );
    }

    /**
     * @return array
     */
    protected function extract(): array
    {
        /** @var array $vars */
        $vars = array(
            'id' => $this->getId(),
            'name' => $this->getName()
        );

        // applying filters on before wrapper
        $vars['before'] = $this->apply(Constants::BEFORE_FIELD_WRAPPER);

        // applying filters on after field wrapper
        $vars['before'] = $this->apply(Constants::AFTER_FIELD_WRAPPER);

        // applying filters on before field title element
        $vars['before_title_tag'] = $this->apply(Constants::BEFORE_TITLE_TAG);

        // applying filters on after field title element
        $vars['after_title_tag'] = $this->apply(Constants::AFTER_TITLE_TAG);

        // applying filters on before field title
        $vars['before_title'] = $this->apply(Constants::BEFORE_TITLE);

        // applying filters on after field title
        $vars['after_title_tag'] = $this->apply(Constants::AFTER_TITLE);

        // applying filters on field title
        $vars['title'] = $this->apply(
            Constants::TITLE,
            $this->getTitle()
        );

        // applying filters on field classes
        $vars['classes'] = $this->apply(
            Constants::FIELD_CLASSES,
            $this->getClasses()
        );

        // applying filters on element attributes
        $vars['attributes'] = $this->apply(
            Constants::FIELD_ATTRIBUTES,
            $this->getAttributes()
        );

        return $vars;
    }
}
