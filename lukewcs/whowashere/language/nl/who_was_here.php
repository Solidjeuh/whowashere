<?php
/**
*
* LF who was here (2.x) - based on "NV who was here". An extension for the phpBB Forum Software package.
*
* @copyright (c) 2018, LukeWCS, https://www.wcsaga.org/
* @copyright (c) 2015, Anvar, http://phpbbguru.net
* @copyright (c) 2013, nickvergessen, http://www.flying-bits.org/
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Lang_iso     : nl
* Lang_ver     : 2.0.0
* Lang_author  : </Solidjeuh>
* Lang_tab_size: 4
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” … „ “
//

$lang = array_merge($lang, array(
	'LFWWH_TITLE'				=> 'Wie was hier…',
	'LFWWH_LAST1'				=> 'laatst op',
	'LFWWH_LAST2'				=> 'o\'klok',
	'LFWWH_LAST3'				=> 'laatst op',
	'LFWWH_USERS_PREFIX'		=> 'Geregistreerde gebruikers%s:',
	'LFWWH_BOTS_PREFIX'			=> 'Bots%s:',
	'LFWWH_SHOW_INFO_TOOLTIP'	=> 'Toon verborgen info',

	'LFWWH_TOTAL' => array(
		0						=> 'In totaal waren er <strong>0</strong> gebruikers online',
		1						=> 'In totaal was er <strong>%d</strong> gebruiker online',
		2						=> 'In totaal waren er <strong>%d</strong> gebruikers online',
	),
	'LFWWH_TOTAL_SEPARATOR'		=> ' ::',	
	'LFWWH_REG_USERS' => array(
		0						=> '0 geregistreerd',
		1						=> '%d geregistreerd',
		2						=> '%d geregistreerd',
	),
	'LFWWH_HIDDEN' => array(
		0						=> '0 verborgen',
		1						=> '%d verborgen',
		2						=> '%d verborgen',
	),
	'LFWWH_BOTS' => array(
		0						=> '0 bots',
		1						=> '%d bot',
		2						=> '%d bots',
	),
	'LFWWH_GUESTS' => array(
		0						=> '0 gasten',
		1						=> '%d gast',
		2						=> '%d gasten',
	),
	'LFWWH_WORD'				=> ' en',
	'LFWWH_EXP'					=> 'gebaseerd op gebruikers die vandaag actief waren',
	'LFWWH_EXP_TIME'			=> 'gebaseerd op gebruikers die in het verleden actief waren ',
	'LFWWH_HOURS' => array(
		0						=> '',
		1						=> '%%s %1$s uur',
		2						=> '%%s %1$s uren',
	),
	'LFWWH_MINUTES' => array(
		0						=> '',
		1						=> '%%s %1$s minuut',
		2						=> '%%s %1$s minuten',
	),
	'LFWWH_SECONDS' => array(
		0						=> '',
		1						=> '%%s %1$s seconde',
		2						=> '%%s %1$s seconden',
	),
	'LFWWH_RECORD_DAY'			=> 'De meeste gebruikers ooit online was <strong>%1$s</strong> op %2$s',
	'LFWWH_RECORD_TIME'			=> 'De meeste gebruikers ooit online was <strong>%1$s</strong> tussen %2$s en %3$s',
));
