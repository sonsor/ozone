<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 12:00
 */

namespace Ozone\ThemeOptions;

use Ozone\ThemeOptions\Exceptions\InvalidTypeExcaption;
use Ozone\ThemeOptions\Factory\CheckboxesFactory;
use Ozone\ThemeOptions\Factory\CheckboxFactory;
use Ozone\ThemeOptions\Factory\HiddenFactory;
use Ozone\ThemeOptions\Factory\RadioFactory;
use Ozone\ThemeOptions\Factory\SelectFactory;
use Ozone\ThemeOptions\Factory\TextAreaFactory;
use Ozone\ThemeOptions\Factory\TextFactory;
use Ozone\ThemeOptions\Interfaces\IElement;
use Ozone\ThemeOptions\Interfaces\IStretegy;

/**
 * Class Stretegy
 * @package Ozone\ThemeOptions
 */
class Stretegy implements IStretegy
{
    /**
     * @var IFactory
     */
    private $factory;

    /**
     * @return IFactory
     */
    public function getFactory(): IFactory
    {
        return $this->factory;
    }

    /**
     * @param IFactory $factory
     * @return void
     */
    public function setFactory(IFactory $factory): void
    {
        $this->factory = $factory;
    }

    /**
     * Stretegy constructor.
     * @param string $type
     * @throws InvalidTypeExcaption
     * @return void
     */
    public function __construct(string $type)
    {
        $factory = '';
        switch ($type) {
            case 'text':        $factory = TextFactory;         break;
            case 'checkbox':    $factory = CheckboxFactory;     break;
            case 'checkbxes':   $factory = CheckboxesFactory;   break;
            case 'radio':       $factory = RadioFactory;        break;
            case 'textarea':    $factory = TextAreaFactory;     break;
            case 'select':      $factory = SelectFactory;       break;
            case 'hidden':      $factory = HiddenFactory;       break;
        }

        if (!$factory) {
            throw new InvalidTypeExcaption('factory of type ' . $type . ' not exists');
        }

        $this->setFactory($factory);
    }

    /**
     * @param array $data
     * @return IElement
     */
    public function create(array $data): IElement
    {
        return $this->getFactory()::create($data);
    }
}