<?php

namespace Unopar\Core;

class ValidadorUrl
{
	public static function validar($page = null)
	{
		if (isset($page)) {
			return file_exists(sprintf('%s/../Pages/%s.php', __DIR__, $page));
		}

		return false;
	}
}