<?php

namespace Luminar\RenderEngine\Tests\Engine;

use Luminar\Http\Controller\AbstractController;
use Luminar\RenderEngine\Engine\BasicEngine;
use PHPUnit\Framework\TestCase;

class BasicEngineTest extends TestCase
{
    public function testRender()
    {
        $engine = new BasicEngine(__DIR__ . DIRECTORY_SEPARATOR . 'templates', new AbstractController());
        $result = $engine->render('example', ['name' => 'Luminar']);
        $this->assertStringContainsString('Hello, Luminar', $result->getResponse());
    }
}