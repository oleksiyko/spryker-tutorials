<?php

namespace Pyz\Yves\HelloWorld\Plugin\Provider;

use Silex\Application;
use \SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class HelloWorldControllerProvider extends AbstractYvesControllerProvider
{
    protected function defineControllers(Application $app)
    {
        $this->createController('/hello-world', 'hello', 'HelloWorld', 'Index', 'index');
    }
}