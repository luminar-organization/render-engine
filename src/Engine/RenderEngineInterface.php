<?php

namespace Luminar\RenderEngine\Engine;

use Luminar\Http\Controller\AbstractController;
use Luminar\Http\Response;

interface RenderEngineInterface
{
    public function __construct(string $viewsPath,AbstractController $abstractController, array $options = []);

    public function render(string $template, array $data = []): Response;
}