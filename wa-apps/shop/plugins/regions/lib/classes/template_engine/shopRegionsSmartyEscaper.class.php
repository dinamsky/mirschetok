<?php


class shopRegionsSmartyEscaper
{
	public static function escape($template)
	{
		if (is_array($template))
		{
			$template = reset($template);
		}

		return '{literal}'.$template.'{/literal}';
	}
}