<?php

namespace Luminar\RenderEngine\Engine;

use Luminar\Http\Controller\AbstractController;
use Luminar\Http\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class TwigEngine implements RenderEngineInterface
{
    /**
     * @var Environment $twig
     */
    protected Environment $twig;

    /**
     * @param string $viewsPath
     * @param array $options
     */
    public function __construct(string $viewsPath, array $options = [])
    {
        $loader = new FilesystemLoader($viewsPath);
        $this->twig = new Environment($loader, $options);
    }

    /**
     * @param string $template
     * @param array $data
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function render(string $template, array $data = []): Response
    {
        return new Response($this->twig->render($template . '.twig', $data), 200);
    }
}