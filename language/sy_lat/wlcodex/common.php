<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
//To do: When done to be trasliterated from Hebrew to Latin script
$lang = array_merge($lang, array(
	' בְּרֵאשִׁית 1:1'	=> '‏בּרִשִית בְּרָא אלָהָא יָת דֵּשְׁמַיָּא וְיָת דֵּאַרְעָא׃',
	'שמות 33:20'	=> '',
	'וַיִּקְרָ֖א 23:6'	=> '',
	'בְּמִדְבַּ֥ר 10:35'	=>  '',
	//In Targum Davarim is Meltae ???
	'דְּבָרִים 8:3'	=> '',

));

// THE END
?>