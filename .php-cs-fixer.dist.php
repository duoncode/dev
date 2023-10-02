<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create();
$config = new Conia\Development\PhpCsFixer\Config();

return $config->setFinder($finder);
