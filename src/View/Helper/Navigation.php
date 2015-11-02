<?php
/**
 * Bootstrap Module for Zend Framework
 *
 * @link      http://github.com/zend-modules/bootstrap
 * @copyright Copyright (c) 2015 Juan Pedro Gonzalez Gutierrez
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Bootstrap\View\Helper;

use Zend\View\Helper\Navigation as BaseNavigation;

class Navigation extends BaseNavigation
{
    /**
     * Retrieve plugin loader for navigation helpers
     *
     * Lazy-loads an instance of Navigation\HelperLoader if none currently
     * registered.
     *
     * @return Navigation\PluginManager
     */
    public function getPluginManager()
    {
        if (null === $this->plugins) {
            $this->setPluginManager(new Navigation\PluginManager());
        }
        return $this->plugins;
    }
}
