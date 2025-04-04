Changelog
=========

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), 
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.1.6] - 2024-04-01

### Changed

- Update php-cs-fixer requirement

## [1.1.6] - 2024-11-17

### Changed

- Update export-ignore entries

## [1.1.5] - 2024-11-10

### Changed

- Update root namespace to `Duon`

## [1.1.4] - 2024-08-24

### Changed

- Add `curly_brace_block` to php-cs-fixers `no_extra_blank_lines` rule

## [1.1.3] - 2024-08-15

### Changed

- Base fixer rules on PER-CS2.0
- Use tabs instead of spaces

## [1.1.2] - 2024-08-14

### Changed

- Update namespace

## [1.1.1] - 2023-11-24

### Fixed

- Fix attribute type of DocsTestRunner::$dir

## [1.1.0] - 2023-11-03

### Added

- Add documentation snippets test runner `docs-test-runner` 

## [1.0.2] - 2023-10-23

### Added

- php-cs-fixer rules:
    - `ordered_imports`: set `sort_algorithm` to `alpha`.

## [1.0.1] - 2023-10-02

### Added

- php-cs-fixer rules:
    - `declare_strict_types` enabled.
    - Force blank line before `if` and loops.
    - `no_useless_else` enabled.
    - `no_useless_return` enabled.
    - `no_superfluous_elseif` enabled.
    - `method_chaining_indentation` enabled.
    - `explicit_string_variable` enabled.
    - Update `class_attributes_separation` settings: No line between `const`
      declaration, one line between methods.

## [1.0.0] - 2023-10-02

### Added

- php-cs-fixer rules via `Duon\Development\PhpCsFixer\Config`.
