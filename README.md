# Duon Development Settings and Tools

## Installation

```sh
composer require duon/dev
```

## Usage

### Documentation snippets test runner

```sh
./vendor/bin/docs-test-runner path/to/docs/snippets
```

### php-cs-fixer

Add the following to your `.php-cs-fixer.dist.php`:

```php
<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in([__DIR__ . '/src', __DIR__ . '/tests']);
$config = new Duon\Development\PhpCsFixer\Config();

return $config->setFinder($finder);
```

## Shared Configuration Sync

This package provides a centralized way to manage configuration files (like `.editorconfig`, `.markdownlint.json`, etc.) across all projects. Instead of manual copying, use the built-in `ConfigSync` helper via Composer.

### 1. Project Setup

Add the sync command to your project's `composer.json` file. It will automatically update the configurations whenever `composer install` or `update` is run in a development environment.

```json
{
    "scripts": {
        "post-install-cmd": [
            "Duon\\Dev\\ConfigSync::sync"
        ],
        "post-update-cmd": [
            "Duon\\Dev\\ConfigSync::sync"
        ]
    }
}

```

### 2. Customizing Synced Files

You can use PHP named arguments to include only specific files or exclude others. This is particularly useful for projects that may not use every tool in the package.

#### Example: Exclude specific files

```json
"post-install-cmd": [
"Duon\\Dev\\ConfigSync::sync(exclude: ['prettier'])"
]

```

#### Example: Include only specific files

```json
"post-install-cmd": [
"Duon\\Dev\\ConfigSync::sync(include: ['editorconfig', 'phpcs'])"
]

```

Available keys: `editorconfig`, `markdownlint`, `prettier`, `phpcs`.

---

Would you like me to help you format the `CONFIG_MAP` in the PHP class to include any additional files from your `cfg` directory?
Available keys: `editorconfig`, `markdownlint`, `prettier`.

### 3. Recommended .gitignore

To ensure the "Source of Truth" remains within this package, add the synced files to your project's `.gitignore`:

```text
/.editorconfig
/.markdownlint.json
/.prettierrc
```
