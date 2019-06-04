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
* Lang_iso     : en
* Lang_ver     : 2.0.0
* Lang_author  : LukeWCS
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
	// navigation
	'LFWWH_NAV_TITLE'					=> 'Wie was hier? (2.x)',
	'LFWWH_NAV_CONFIG'					=> 'Instellingen',

	// config head
	'LFWWH_CONFIG_TITLE'				=> 'Wie was hier? [%s]',
	'LFWWH_INSTALLED' 					=> 'Geïnstalleerde versie: %s &bull; Discussie: <a href="https://www.phpbb.com/community/viewtopic.php?f=456&t=2506381">Onderwerp op phpbb.com</a>',

	// config section 1
	'LFWWH_SECTION_PERMISSIONS'			=> 'Permissies',
	'LFWWH_ADMIN_MODE'					=> 'Beheerdersmodus',
	'LFWWH_ADMIN_MODE_EXP'				=> 'Deze modus heft alle permissie systemen op en alleen gebruikers met beheerder permissies kunnen de WWH weergave zien. Handig als WWH op korte termijn niet zichtbaar zou moeten zijn voor anderen.',
	'LFWWH_USE_PERMISSIONS'				=> 'Gebruik het permissies systeem van phpBB',
	'LFWWH_USE_PERMISSIONS_EXP'			=> 'Hiermee kunt u voor elke gebruikersgroep afzonderlijk opgeven in welke mate de weergave moet worden gemaakt. De rechten kunnen als volgt worden ingesteld: "PERMISSIES » Groepspermissies » [gebruikersgroep] » Gebruikerspermissies » Geavanceerde permissies » Profiel".',
	'LFWWH_SECTION_DISP_1'				=> 'Weergave instellingen 1',
	'LFWWH_DISP_FOR_GUESTS'				=> 'Weergeven voor gasten',
	'LFWWH_DISP_FOR_GUESTS_EXP'			=> 'Bepaalt wat gasten kunnen zien. “Statistieken” toont alleen de anonieme nummers en “Niets” schakelt de WWH weergave volledig uit voor gasten.',
	'LFWWH_DISP_FOR_GUESTS_1'			=> 'Statistieken en leden',
	'LFWWH_DISP_FOR_GUESTS_3'			=> 'Leden',
	'LFWWH_DISP_FOR_GUESTS_0'			=> 'Statistieken',
	'LFWWH_DISP_FOR_GUESTS_2'			=> 'Niets',

	// config section 2
	'LFWWH_DISP_REG_USERS'				=> 'Toon zichtbare gebruikers (nummer)',
	'LFWWH_DISP_REG_USERS_EXP'			=> 'Het aantal zichtbare gebruikers wordt weergegeven.',
	'LFWWH_DISP_HIDDEN'					=> 'Toon onzichtbare gebruikers (nummer en namen)',
	'LFWWH_DISP_HIDDEN_EXP'				=> 'Onzichtbare gebruikers worden ook weergegeven in de gebruikerslijst. (Permissie vereist, zoals bij “Wie is online”.)',
	'LFWWH_DISP_BOTS'					=> 'Bots weergeven (nummer en namen)',
	'LFWWH_DISP_BOTS_EXP'				=> 'Sommige gebruikers vragen zich misschien af wat bots zijn en zijn bang voor hen.',
	'LFWWH_DISP_BOTS_1'					=> 'Met de gebruikers',
	'LFWWH_DISP_BOTS_2'					=> 'Op een aparte regel',
	'LFWWH_DISP_BOTS_0'					=> 'Nee',
	'LFWWH_DISP_BOTS_ONLY_ADMIN'		=> 'Toon de bot namen alleen met beheerder permissies',
	'LFWWH_DISP_BOTS_ONLY_ADMIN_EXP'	=> 'Alleen gebruikers met beheerder permissies kunnen de namen van de bots zien. Het aantal bots blijft voor iedereen zichtbaar.',
	'LFWWH_DISP_GUESTS'					=> 'Toon gasten (nummer)',
	'LFWWH_DISP_GUESTS_EXP'				=> 'Het aantal gasten wordt weergegeven.',
	'LFWWH_DISP_TIME'					=> 'Toon tijd van gebruikers',
	'LFWWH_DISP_TIME_EXP'				=> '“Bij zweven” toont ook een infosymbool waarmee de tijden ook direct kunnen worden weergegeven. Handig voor smartphones en tabletcomputers. (Alle gebruikers zien het of geen, geen speciale functie voor beheerders.)',
	'LFWWH_DISP_TIME_1'					=> 'Achter de naam',
	'LFWWH_DISP_TIME_2'					=> 'Bij zweven',
	'LFWWH_DISP_TIME_0'					=> 'Nee',
	'LFWWH_DISP_TIME_BOTS'				=> 'Laat de tijd van bots zien',
	'LFWWH_DISP_TIME_FORMAT'			=> 'Tijd formaat',
	'LFWWH_DISP_TIME_FORMAT_EXP'		=> 'Het formaat komt overeen met de syntaxis van de PHP functie <a href="http://www.php.net/date">date()</a>. Speciale plaatshouder: $1 = “%1$s”, $2 = “%2$s”, $3 = “%3$s”.',
	'LFWWH_DISP_IP'						=> 'Toon gebruikers IP',
	'LFWWH_DISP_IP_EXP'					=> '“Bij zweven” geeft ook een infolabel weer waarmee de IP’s ook direct kunnen worden weergegeven. Handig voor smartphones en tabletcomputers. (Alleen voor gebruikers met beheerder permissies, zoals bij “Wie is online”.)',

	// config section 3
	'LFWWH_SECTION_DISP_2'				=> 'Weergave instellingen 2',
	'LFWWH_TIME_MODE'					=> 'Weergave van de bezoekers van ...',
	'LFWWH_TIME_MODE_EXP'				=> 'Weergave van de bezoekers van vandaag (sinds 00:00 tijd op het forum), of de tijdsperiode die is ingesteld bij de volgende instelling.',
	'LFWWH_TIME_MODE_1'					=> 'Vandaag',
	'LFWWH_TIME_MODE_0'					=> 'Tijd periode',
	'LFWWH_SORT_BY'						=> 'Sorteer gebruikers op',
	'LFWWH_SORT_BY_EXP'					=> 'Dit bepaalt de volgorde waarin gebruikers worden weergegeven.',
	'LFWWH_SORT_BY_0'					=> 'Gebruikersnaam A -> Z',
	'LFWWH_SORT_BY_1'					=> 'Gebruikersnaam Z -> A',
	'LFWWH_SORT_BY_2'					=> 'Tijd van bezoek oplopend',
	'LFWWH_SORT_BY_3'					=> 'Tijd van bezoek aflopend',
	'LFWWH_SORT_BY_4'					=> 'Gebruikers-ID oplopend',
	'LFWWH_SORT_BY_5'					=> 'Gebruikers-ID aflopend',
	'LFWWH_RECORD'						=> 'Bezoekersrecord',
	'LFWWH_RECORD_EXP'					=> 'Toon en bewaar het bezoekersrecord.',
	'LFWWH_RECORD_TIME_FORMAT'			=> 'Datum formaat voor het bezoekersrecord',
	'LFWWH_RECORD_TIME_FORMAT_EXP'		=> 'Het formaat komt overeen met de syntaxis van de PHP functie <a href="http://www.php.net/date">date()</a>.',
	'LFWWH_DISP_TEMPLATE_POS'			=> 'Positie van de weergave',
	'LFWWH_DISP_TEMPLATE_POS_EXP'		=> 'Bepaalt waar de WWH weergave moet worden geplaatst in het gedeelte Online/ tatistiek. “Boven” is de positie boven dit gedeelte en “Onder” is de positie hieronder.',
	'LFWWH_DISP_TEMPLATE_POS_0'			=> 'Boven',
	'LFWWH_DISP_TEMPLATE_POS_2'			=> 'Voor verjaardagen',
	'LFWWH_DISP_TEMPLATE_POS_1'			=> 'Onder',

	// config section 4
	'LFWWH_SECTION_OTHERS'				=> 'Andere',
	'LFWWH_API_MODE'					=> 'API modus',
	'LFWWH_API_MODE_EXP'				=> 'Dit deactiveert de weergave van WWH en maakt alleen de sjabloonvariabelen. Deze modus is voor forums waar WWH al wordt vertegenwoordigd door andere extensies (zoals "Stat Block").',
	'LFWWH_CLEAR_UP'					=> 'Verwijder automatisch verwijderde gebruikers',
	'LFWWH_CLEAR_UP_EXP'				=> 'Als gebruikersaccounts worden verwijderd, worden de tabel en weergave van WWH ook onmiddellijk gewist.',
	'LFWWH_DISP_TEMPLATE_POS_ALL'		=> 'Toon alle sjabloonposities op hetzelfde moment',
	'LFWWH_DISP_TEMPLATE_POS_ALL_EXP'	=> 'WWH wordt op alle posities op hetzelfde moment weergegeven. Dit is alleen voor testen en moet tijdens normaal gebruik worden uitgeschakeld.',
	'LFWWH_CREATE_HIDDEN_INFO'			=> 'Maak verborgen informatie',
	'LFWWH_CREATE_HIDDEN_INFO_EXP'		=> 'Als de weergave van de tijd of IP is ingesteld op "Bij zweven", wordt deze informatie ook verborgen en een knop gemaakt, waarmee ze kunnen worden weergegeven.',

	// config section 5
	'LFWWH_SECTION_LOAD_SETTINGS'		=> 'Laad instellingen',
	'LFWWH_USE_CACHE'					=> 'Gebruik cache voor de bezoekerslijst',
	'LFWWH_USE_CACHE_EXP'				=> 'Wanneer de cache is ingeschakeld, wordt de cachetabel gebruikt wanneer de forumindex wordt aangeroepen. Als gevolg hiervan worden nieuwe bezoekers pas na een bepaalde vertraging weergegeven. Als de cache is gedeactiveerd, wordt telkens wanneer de forumindex wordt aangeroepen een nieuwe MySQL query uitgevoerd, wat kan leiden tot prestatieproblemen op grote forums.',
	'LFWWH_USE_ONLINE_TIME'				=> 'Update met de weergave van de online tijdsduur”',
	'LFWWH_USE_ONLINE_TIME_EXP'			=> 'Indien ingeschakeld, wordt de volgende instelling gebruikt voor het update-interval: “ALGEMEEN » SERVER INSTELLINGEN » Laad instellingen » Algemene instellingen » Bekijk online tijdsduur”. Dit komt overeen met het standaardgedrag van WWH.',
	'LFWWH_CACHE_TIME'					=> 'Interval van de update',
	'LFWWH_CACHE_TIME_EXP'				=> 'Het interval bepaalt hoe vaak de weergave van de statistieken en gebruikerslijst wordt bijgewerkt.',

	// config section 6
	'LFWWH_SECTION_RESET'				=> 'Reset',
	'LFWWH_DEFAULTS'					=> 'Reset instellingen',
	'LFWWH_DEFAULTS_EXP'				=> 'Zet alle instellingen van deze pagina terug naar de installatie standaard. (Heeft geen invloed op “Reset bezoekersrecord”)',
	'LFWWH_BUTTON_DEFAULTS'				=> 'Standaard',
	'LFWWH_RECORD_RESET'				=> 'Reset bezoekersrecord',
	'LFWWH_RECORD_RESET_EXP'			=> 'Stelt de tijd en teller opnieuw in voor het bezoekersrecord.',
	'LFWWH_RECORD_RESET_TIME_HINT'		=> '(Reset op: %s)',

	// messages
	'LFWWH_MSG_SAVED_SETTINGS'			=> 'Wie was hier: configuratie succesvol bijgewerkt.',
	'LFWWH_MSG_CONFIRM_RECORD_RESET'	=> 'Wie was hier: zodra u de pagina opslaat met de instellingen, wordt het bezoekersrecord gereset.', // \n is the beginning of a new line
));
