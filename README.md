Conia Development Settings
==========================

## Installation 

    composer require conia/development

## Usage

### php-cs-fixer

Add the following to your `.php-cs-fixer.dist.php`:

```php
<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in(__DIR__);
$config = new Conia\Development\PhpCsFixer\Config();

return $config->setFinder($finder);
```
