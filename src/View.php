<?php

namespace Luminar\RenderEngine;

use Luminar\Http\Response;
use Luminar\RenderEngine\Engine\RenderEngineInterface;

class View
{
    /**
     * @var RenderEngineInterface $engine
     */
    protected RenderEngineInterface $engine;

    /**
     * @param RenderEngineInterface $engine
     */
    public function __construct(RenderEngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function render(string $template, array $data = []): Response
    {
        return $this->engine->render($template, $data);
    }
}