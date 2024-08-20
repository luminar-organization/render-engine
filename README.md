# Luminar Render Engine
![Tests Status](https://img.shields.io/github/actions/workflow/status/luminar-organization/render-engine/tests.yml?label=Tests)

A custom render engine designed for the Luminar PHP Framework.

## Features
- **Basic Engine**: Simple and effective PHP-based templating.
- **TwigEngine**: Integration with Twig for powerful templating.
- **View**: Manages rendering using different engines.
## Installation

Install via composer
```shell
composer require luminar-organization/render-engine
```

## Usage
Using the BasicEngine

```php
use Luminar\RenderEngine\Engine\BasicEngine;
use Luminar\RenderEngine\View;

$engine = new BasicEngine('/path/to/views');
$view = new View($renderer);

echo $view->render('example', ['name' => 'Luminar'])->getResponse();
```
Using the TwigEngine
```php
use Luminar\RenderEngine\Engine\TwigEngine;
use Luminar\RenderEngine\View;

$engine = new TwigEngine('/path/to/views');
$view = new View($engine);

echo $view->render('example', ['name' => 'Luminar'])->getResponse();
```

## Contributing
Please see the CONTRIBUTING.md for guidelines in our core repo.

## License
This package is licensed under the [MIT License](LICENSE)

## Integration

With these components, you'll have a flexible rendering system in your framework that supports both a simple PHP templating engine and the more advanced Twig templating engine. The setup is extensible, so you can add more engines or features as needed.