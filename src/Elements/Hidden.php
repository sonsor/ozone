<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 2020-03-17
 * Time: 14:56
 */

namespace Ozone\ThemeOptions\Elements;


use Ozone\ThemeOptions\Abstracts\SingleValueField;
use Ozone\ThemeOptions\Interfaces\IField;
use Ozone\ThemeOptions\Interfaces\IValue;

class Hidden extends SingleValueField implements IField, IValue
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this
            ->getLoader()
            ->getView(
                'text',
                $this->extract()
            );
    }

}