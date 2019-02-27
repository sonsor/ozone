<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 2/27/19
 * Time: 9:34 PM
 */

namespace Ozone\ThemeOptions\Abstracts;

use Ozone\ThemeOptions\interfaces\iElement;

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
}