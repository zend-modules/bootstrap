<?php
/**
 * Bootstrap module for ZF2.
 *
 * @author    Juan Pedro Gonzalez Gutierrez
 * @link      http://github.com/zend-modules/bootstrap
 * @copyright Copyright (c) 2016 Juan Pedro Gonzalez Gutierrez.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 */
namespace Bootstrap\Service;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Bootstrap\View\Helper\Navigation;

class NavigationViewHelperFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $helper = new Navigation();
        $helper->setServiceLocator($serviceLocator);
        
        $config = $serviceLocator->getServiceLocator()->get('config');
        if (isset($config['navigation_helpers'])) {
            $config = new \Zend\ServiceManager\Config($config['navigation_helpers']);
            $config->configureServiceManager($helper->getPluginManager());
        }
        return $helper;
    }
}