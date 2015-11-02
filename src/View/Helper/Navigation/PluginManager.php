<?php
/**
 * Bootstrap Module for Zend Framework
 *
 * @link      http://github.com/zend-modules/bootstrap
 * @copyright Copyright (c) 2015 Juan Pedro Gonzalez Gutierrez
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Bootstrap\View\Helper\Navigation;

use Zend\View\Helper\Navigation\PluginManager as BasePluginManager;

/**
 * Plugin manager implementation for bootstrap navigation helpers
 *
 * Enforces that helpers retrieved are instances of
 * Navigation\HelperInterface. Additionally, it registers a number of default
 * helpers.
 */
class PluginManager extends BasePluginManager
{
    /**
     * Default set of helpers
     *
     * @var array
     */
    protected $invokableClasses = array(
        'breadcrumbs' => 'Zend\View\Helper\Navigation\Breadcrumbs',
        'links'       => 'Zend\View\Helper\Navigation\Links',
        'menu'        => 'Bootstrap\View\Helper\Navigation\Menu',
        'sitemap'     => 'Zend\View\Helper\Navigation\Sitemap',
    );
}