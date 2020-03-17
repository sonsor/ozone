<?php
/**
 *
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 12:00
 */

namespace Ozone\ThemeOptions;


use Ozone\ThemeOptions\Factory\CheckboxesFactory;
use Ozone\ThemeOptions\Factory\CheckboxFactory;
use Ozone\ThemeOptions\Factory\RadioFactory;
use Ozone\ThemeOptions\Factory\SelectFactory;
use Ozone\ThemeOptions\Factory\TextAreaFactory;
use Ozone\ThemeOptions\Factory\TextFactory;
use Ozone\ThemeOptions\Interfaces\IElement;

class Stretegy
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
     */
    public function __construct(string $type): IElement
    {
        switch ($type) {
            case 'text':
                $this->setFactory(TextFactory);
                break;
            case 'checkbox':
                $this->setFactory(CheckboxFactory);
                break;
            case 'checkbxes':
                $this->setFactory(CheckboxesFactory);
                break;
            case 'radio':
                $this->setFactory(RadioFactory);
                break;
            case 'textarea':
                $this->setFactory(TextAreaFactory);
                break;
            case 'selet':
                $this->setFactory(SelectFactory);
                break;
        }
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