<?php
/**
 * Silex Finder Service provider.
 * @author Otávio Fernandes <otavio@netonsolucoes.com.br>
 */

namespace SilexFinder;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Symfony\Component\Finder\Finder;

class FinderServiceProvider implements ServiceProviderInterface
{
    /**
     * Register and configure the service provider.
     *
     * @param Application $app
     */
    public function register(Application $app)
    {
        // finder factory configuration
        $app['finder'] = function() use ($app){
            return new Finder();
        };

    }

    /**
     * Bootstrap the application.
     *
     * @param Application $app
     */
    public function boot(Application $app)
    {

    }
}