<?php

namespace Luminar\RenderEngine\Engine;

use Luminar\Http\Response;

class BasicEngine implements RenderEngineInterface
{
    /**
     * @var string $viewsPath
     */
    protected string $viewsPath;


    public function __construct(string $viewsPath, array $options = [])
    {
        $this->viewsPath = rtrim($viewsPath, '/');
    }

    /**
     * @param string $template
     * @param array $data
     * @return Response
     */
    public function render(string $template, array $data = []): Response
    {
        $templateFile = $this->viewsPath . DIRECTORY_SEPARATOR . $template . '.php';

        extract($data);

        ob_start();
        include $templateFile;
        return new Response(ob_get_clean(), 200);
    }
}