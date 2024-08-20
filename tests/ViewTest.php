<?php

namespace Luminar\tests;

use Luminar\Http\Controller\AbstractController;
use Luminar\RenderEngine\Engine\BasicEngine;
use Luminar\RenderEngine\View;
use PHPUnit\Framework\TestCase;

class ViewTest extends TestCase
{
    public function testView()
    {
        $engine = new BasicEngine(__DIR__ . DIRECTORY_SEPARATOR . 'Engine' . DIRECTORY_SEPARATOR . 'templates', new AbstractController());
        $view = new View($engine);
        $result = $view->render('example', ['name' => 'Luminar']);
        $this->assertStringContainsString("Hello, Luminar", $result->getResponse());
    }
}