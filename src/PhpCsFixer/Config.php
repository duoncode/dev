<?php

declare(strict_types=1);

namespace Conia\Development\PhpCsFixer;

class Config extends \PhpCsFixer\Config
{
    public function __construct()
    {
        parent::__construct('Conia');

        $this->setRiskyAllowed(true);
    }

    public function getRules(): array
    {
        return [
            '@PSR12' => true,
            'array_indentation' => true,
            'array_syntax' => ['syntax' => 'short'],
            'blank_line_before_statement' => ['statements' => [
                'continue', 'declare', 'return', 'throw', 'try', 'if', 'for', 'foreach', 'while', 'do', 'switch',
            ]],
            'braces_position' => [
                'allow_single_line_empty_anonymous_classes' => true,
                'allow_single_line_anonymous_functions' => true,
            ],
            'cast_spaces' => ['space' => 'none'],
            'class_attributes_separation' => ['elements' => ['case' => 'none', 'property' => 'none', 'const' => 'none', 'method' => 'one']],
            'class_definition' => ['space_before_parenthesis' => true],
            'declare_strict_types' => true,
            'concat_space' => ['spacing' => 'one'],
            'echo_tag_syntax' => ['format' => 'short', 'shorten_simple_statements_only' => true],
            'explicit_string_variable' => true,
            'global_namespace_import' => ['import_classes' => true, 'import_constants' => null, 'import_functions' => null],
            'increment_style' => ['style' => 'post'],
            'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
            'method_chaining_indentation' => true,
            'multiline_comment_opening_closing' => false,
            'multiline_whitespace_before_semicolons' => false,
            'no_alternative_syntax' => ['fix_non_monolithic_code' => false],
            'no_extra_blank_lines' => ['tokens' => ['extra']],
            'no_unused_imports' => false,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_superfluous_elseif' => true,
            'no_whitespace_before_comma_in_array' => true,
            'ordered_imports' => ['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha'],
            'phpdoc_to_comment' => false,
            'semicolon_after_instruction' => false,
            'trailing_comma_in_multiline' => true,
            'types_spaces' => ['space' => 'none', 'space_multiple_catch' => 'single'],
            'yoda_style' => false,
        ];
    }
}
