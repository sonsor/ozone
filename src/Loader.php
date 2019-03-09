<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 3/6/19
 * Time: 10:00 PM
 * @author Wasif Farooq
 *
 */

namespace Ozone\ThemeOptions;

use Ozone\ThemeOptions\Exceptions\FileNotExistsException;
use Ozone\ThemeOptions\Exceptions\InvalidFileTypeException;
use Ozone\ThemeOptions\Exceptions\InvalidTypeExcaption;
use Ozone\ThemeOptions\Interfaces\ILoader;

/**
 * Class Loader
 * @package Ozone\ThemeOptions
 */
class Loader implements ILoader
{
    /**
     * @var string
     */
    protected $viewPath;

    /**
     * @return string
     */
    public function getViewPath(): string
    {
        return $this->viewPath;
    }

    /**
     * @param string $viewPath
     */
    public function setViewPath(string $viewPath): void
    {
        $this->viewPath = $viewPath;
    }

    /**
     * @param string $path
     * @param array $vars
     * @return string
     */
    protected function load(string $path, array $vars): string
    {
        extract($vars);
        ob_start();
        include $path;
        return ob_get_clean();
    }

    /**
     * @param string $view
     * @param array $vars
     * @return string
     * @throws FileNotExistsException
     * @throws InvalidFileTypeException
     * @throws InvalidTypeExcaption
     */
    public function view(string $view, array $vars): string
    {
        if (empty($view)) {
            throw new FileNotExistsException('The provided view path is empty');
        }

        /** @var string $path */
        $path = $this->getViewPath() . DIRECTORY_SEPARATOR . $view . '.php';

        if (!file_exists($path)) {
            throw new FileNotExistsException('The provided file path does not exists');
        }

        /** @var array $info */
        $info = pathinfo($path);
        if ($info['extension'] !== 'php') {
            throw new InvalidFileTypeException('Invaliid view file type');
        }

        if (!is_array($vars)) {
            throw new InvalidTypeExcaption('the vars should be array ' . gettype($vars) . ' given');
        }

        return $this->load($path, $vars);
    }
}
