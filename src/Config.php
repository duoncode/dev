<?php

declare(strict_types=1);

namespace Duon\Development;

class Config
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
			// Must have the .json extension as we use it in ./.prettierrc.cjs
			'src' => 'vendor/duon/dev/cfg/prettierrc.json',
			'dest' => '.prettierrc',
		],
	];

	public static function deploy(array $include)
	{
		$targets = array_intersect_key(self::CONFIG_MAP, array_flip($include));

		foreach ($targets as $key => $paths) {
			$source = $paths['src'];
			$dest = $paths['dest'];

			if (!file_exists($source)) {
				continue;
			}

			if (file_exists($dest)) {
				continue;
			}

			copy($source, $dest);
		}
	}

	public static function sync()
	{
		self::deploy(['editorconfig', 'markdownlint']);
	}

	public static function prettier()
	{
		self::deploy(['prettier']);
	}
}
