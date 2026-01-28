<?php

declare(strict_types=1);

namespace Duon\Development\PhpCsFixer;

class Config extends \PhpCsFixer\Config
{
	public function __construct()
	{
		parent::__construct('Duon');

		$this->setRiskyAllowed(true);
		$this->setIndent("\t");
		$this->setLineEnding("\n");
		$this->setParallelConfig(\PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());
	}

	public function getRules(): array
	{
		return [
			'@PER-CS3x0' => true,
			'class_attributes_separation' => ['elements' => ['method' => 'one']],
			'declare_strict_types' => true,
			'echo_tag_syntax' => ['format' => 'short', 'shorten_simple_statements_only' => true],
			'explicit_string_variable' => true,
			'global_namespace_import' => ['import_classes' => true],
			'method_chaining_indentation' => true,
			'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
			'no_alternative_syntax' => ['fix_non_monolithic_code' => false],
			'no_useless_else' => true,
			'no_useless_return' => true,
			'no_superfluous_elseif' => true,
			'no_whitespace_before_comma_in_array' => true,
			'ordered_imports' => ['imports_order' => ['class', 'function', 'const']],
		];
	}
}
