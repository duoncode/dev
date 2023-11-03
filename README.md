Conia Development Settings and Tools
====================================

## Installation 

    composer require conia/development

## Usage

### Documentation snippets test runner

    ./vendor/bin/docs-test-runner path/to/docs/snippets

### php-cs-fixer

Add the following to your `.php-cs-fixer.dist.php`:

```php
<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in([__DIR__ . '/src', __DIR__ . '/tests']);
$config = new Conia\Development\PhpCsFixer\Config();

return $config->setFinder($finder);
```
