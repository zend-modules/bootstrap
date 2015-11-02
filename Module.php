<?php
/**
 * Bootstrap Module for Zend Framework
 *
 * @link      http://github.com/zend-modules/bootstrap
 * @copyright Copyright (c) 2015 Juan Pedro Gonzalez Gutierrez
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Bootstrap;

use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

class Module implements 
    ViewHelperProviderInterface
{
    public function getViewHelperConfig()
    {
        return array(
            'invokables' => array(
                'bootstrapNavigation' => 'Bootstrap\View\Helper\Navigation',
            ),
        );
    }
}