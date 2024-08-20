<?php

namespace Luminar\RenderEngine\Tests\Engine;

use Luminar\Http\Controller\AbstractController;
use Luminar\RenderEngine\Engine\TwigEngine;
use PHPUnit\Framework\TestCase;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class TwigEngineTest extends TestCase
{
    /**
     * @return void
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function testRender()
    {
        $engine = new TwigEngine(__DIR__ . DIRECTORY_SEPARATOR .'templates');
        $result = $engine->render('example', ['name' => 'Luminar']);
        $this->assertStringContainsString('Hello, Luminar', $result->getResponse());
    }
}