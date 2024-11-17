<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in(__DIR__ . '/src');
$config = new FiveOrbs\Development\PhpCsFixer\Config();

return $config->setFinder($finder);
