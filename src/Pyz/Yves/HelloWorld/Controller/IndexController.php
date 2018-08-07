<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        return [
            'helloWorld' => 'Hello World!',
        ];
    }
}
