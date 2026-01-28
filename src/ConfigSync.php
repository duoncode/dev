<?php

declare(strict_types=1);

namespace Duon\Development;

class ConfigSync
{
	private const CONFIG_MAP = [
		'editorconfig' => [
			'src' => 'vendor/duon/dev/cfg/editorconfig',
			'dest' => '.editorconfig',
		],
		'markdownlint' => [
			// It is required that a the settings file starts with an `.` or has a custom prefix
			// We have to add the prefix otherwise we couldln't use the file as
			// markdkownlint-cli2 config for this repo. See composer.json
			'src' => 'vendor/duon/dev/cfg/duon.markdownlint.jsonc',
			'dest' => '.markdownlint.jsonc',
		],
		'prettier' => [
			'src' => 'vendor/duon/dev/cfg/prettierrc',
			'dest' => '.prettierrc',
		],
	];

	public static function sync(array $include = [], array $exclude = [])
	{
		$targets = self::CONFIG_MAP;

		// 1. Filter by 'include' if provided
		if (!empty($include)) {
			$targets = array_intersect_key($targets, array_flip($include));
		}

		// 2. Filter out 'exclude' if provided
		if (!empty($exclude)) {
			$targets = array_diff_key($targets, array_flip($exclude));
		}

		foreach ($targets as $key => $paths) {
			$source = $paths['src'];
			$dest = $paths['dest'];

			if (!file_exists($source)) {
				continue;
			}

			if (file_exists($dest) && md5_file($source) === md5_file($dest)) {
				continue;
			}

			copy($source, $dest);
		}
	}

	public static function include(array $files)
	{
		self::sync(include: $files);
	}

	public static function exclude(array $files)
	{
		self::sync(exclude: $files);
	}
}
