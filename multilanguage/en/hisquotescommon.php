<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.cins>
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
 /*
* Note that You should also activate every language also uploaded in the main phpBB/language directory. 
* 
 To Do: We should think on a dedicated directory for multilangual files such as 'multilang' 
			for the files we are currently storing in language subdirectories from were we can import 
			or export using a ACP feature all the keys and values using DB table as FAQ Manager does.
*/ 
$lang = array_merge($lang, array(
	'Iūoḥēnān 6:35, Khabouris_C'	=> 'Says to them Yêshūoa: I! I Bread of Lifes from (those that) cometh towards-Me shall not hunger and from of believing in Me will not thirst to eternity .',
	'Iūoḥēnān 6:51, Khabouris_C'	=> 'I! I bread that will descend from heavens .',
	//To do: 6:47 ;
	'Iūoḥēnān 6:48, Khabouris_C'	=> 'I! I Bread Living (pl. art: of lifes) .',
	'Iūoḥēnān 6:51, Khabouris_C'	=> 'I! I Bread Alive, that from heavens descended! And if man will eat from this bread will live to eternity. And bread of witch I give My body, he to (the) My face lives, him I give the edge .',
	'Iūoḥēnān 8:28, Khabouris_C'	=> 'Says to them Good Yêshūoa: -Whenever the lifting of the Son of Man then Ye know of Me! Me and things from my soul desire not do Myself, but as-teached-Me My-Daddy likewise Him worded Myself .',
	'Iūoḥēnān 10:7, Khabouris_C'	=> 'Says to them, therefore, Good Yêshūoa, -Amen! Amen I say to you: I! I Doorkeeper (lit. Door) of flok .',
	'Iūoḥēnān 10:9, Khabouris_C'	=> 'I! I Doorkeeper (lit: Door) and even if man will enter will live (pl.) and will enter and will exit and pasturage will find .',
	'Iūoḥēnān 10:11, Khabouris_C'	=> 'I! I Good Shepperd! Good Shepperd His soul puts înstead His flok .',
	'Iūoḥēnān 10:14, Khabouris_C'	=> 'I! I Good Shepperd and known I to my-own (my-selves) and I even known from my-own (my-selves) .',
	'Iūoḥēnān 11:25, Khabouris_C'	=> 'Says to Yêshūoa: I! I Conforter (Nūoḥāmāe)! And life from (those that) of believing in Me even-if will die will live .',
	'Iūoḥēnān 13:19, Khabouris_C'	=> 'From now I say to you, from before it will be of when it is (you) will believe Me that I(`m) ! .',
	'Iūoḥēnān 14:6, Khabouris_C'	=> 'Says to Yêshūoa: -I! I Way and Veridicity and Life! No man come toward My-Daddy but/unless if (he) in Me .',
	'Acts of Emisars 9:5, Khabouris_C'	=> 'I was! And say: For You My Lord and (our) Lord says: I! I Yêshūoa Nazareen (Nāṭârāiāe); I of You persecuted; You! '
));

// THE END
?>