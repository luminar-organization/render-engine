<?php

namespace Luminar\RenderEngine\Engine;

use Luminar\Http\Controller\AbstractController;
use Luminar\Http\Response;
use Luminar\RenderEngine\Exceptions\EngineException;

class BasicEngine implements RenderEngineInterface
{
    /**
     * @var string $viewsPath
     */
    protected string $viewsPath;

    /**
     * @var AbstractController $abstractController
     */
    protected AbstractController $abstractController;

    public function __construct(string $viewsPath, AbstractController $abstractController, array $options = [])
    {
        $this->viewsPath = rtrim($viewsPath, '/');
        $this->abstractController = $abstractController;
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
        return new Response(ob_get_clean(), 200, $this->abstractController);
    }
}