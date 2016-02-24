<?php
/**
 * Bootstrap Module for Zend Framework
 *
 * @link      http://github.com/zend-modules/bootstrap
 * @copyright Copyright (c) 2015 Juan Pedro Gonzalez Gutierrez
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Bootstrap\View\Helper\Navigation;

use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\View\Helper\Navigation\Links;
use Zend\View\Helper\Navigation\PluginManager as BasePluginManager;
use Zend\View\Helper\Navigation\Sitemap;

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
     * Default aliases
     *
     * @var string[]
     */
    protected $aliases = [
        'breadcrumbs' => Breadcrumbs::class,
        'links'       => Links::class,
        'menu'        => Menu::class,
        'sitemap'     => Sitemap::class,
    ];
    
    /**
     * Default factories
     *
     * @var string[]
     */
    protected $factories = [
        Breadcrumbs::class => InvokableFactory::class,
        Links::class       => InvokableFactory::class,
        Menu::class        => InvokableFactory::class,
        Sitemap::class     => InvokableFactory::class,
    
        // v2 canonical FQCNs
    
        'bootstrapviewhelpernavigationbreadcrumbs' => InvokableFactory::class,
        'bootstrapviewhelpernavigationlinks'       => InvokableFactory::class,
        'bootstrapviewhelpernavigationmenu'        => InvokableFactory::class,
        'bootstrapviewhelpernavigationsitemap'     => InvokableFactory::class,
    ];
}