<?php
/**
*
* @version $Id$
* Advanced Polls [Deutsch]
* Translation by Scanialady ( ladyscommunity.de )
* @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @author Clemens Husung (Wolfsblvt)
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ADVANCEDPOLLS_EXT_NAME'				=> 'Advanced Polls',

// Viewtopic
	'AP_VOTES_HIDDEN'						=> 'Abstimmungen verborgen',
	'AP_POLL_RUN_TILL_APPEND'				=> ', bis dahin werden alle Abstimmungen verborgen.',
	'AP_VOTERS'								=> 'Abstimmende Benutzer',
	'AP_NONE'								=> 'Keine',

	'AP_POLL_CANT_VOTE'						=> 'Bei dieser Umfrage kannst du nicht abstimmen. Grund: ',
	'AP_POLL_REASON_NOT_POSTED'				=> 'Du hast in diesem Thema noch keinen Beitrag geschrieben.',
	'AP_POLL_VOTES_ARE_VISIBLE'				=> 'Bitte beachte, dass deine Abstimmung sichtbar sein wird, wenn du abstimmst.',
	'AP_POLL_DONT_VOTE_SHOW_RESULTS'		=> 'Nicht abstimmen, Ergebnis anzeigen',
	'AP_POLL_RESULTS_ARE_ORDERED'			=> 'Bitte beachte, dass die Ergebnisse absteigend nach Anzahl der erhaltenen Stimmen sortiert sind.',
	'AP_POLL_TYPE_MISMATCH'					=> 'Inkonsistente Umfragedaten, interner Fehler.',
	'AP_VOTE_CHANGED'						=> 'Du hast keine Berechtigung deine abgegebenen Stimmen zu ändern.',
	'AP_TOO_MANY_VOTES'						=> 'Du hast versucht, zu viele Stimmen zu vergeben.',

	'AP_MAX_VOTES_SELECT'					=> array(
		1	=> 'Du kannst bis zu <strong>%2$d</strong> Stimmen für die Option <strong>%1$d</strong> abgeben',
		2	=> 'Du kannst bis zu <strong>%2$d</strong> Stimmen unter <strong>%1$d</strong> Optionen abgeben',
	),
	'AP_GUEST_VOTES'						=> array(
		1	=> '%d Stimme von Gästen',
		2	=> '%d Stimmen von Gästen',
	),

// Posting
	'AP_POLL_VOTES_HIDE'					=> 'Abstimmungen verbergen',
	'AP_POLL_VOTES_HIDE_EXPLAIN'			=> 'Wenn diese Option aktiviert ist, werden Abstimmungen verborgen, bis die Umfrage beendet ist.<br>Diese Option funktioniert nur, wenn ein End-Datum für diese Umfrage gesetzt ist.',
	'AP_POLL_VOTERS_SHOW'					=> 'Abstimmende Benutzer anzeigen',
	'AP_POLL_VOTERS_SHOW_EXPLAIN'			=> 'Wenn dies aktiviert ist, werden die abstimmenden Benutzer allen mit der entsprechenden Berechtigung angezeigt. Beachte, dass die abstimmenden Benutzer verborgen bleiben, wenn die Abstimmungen verborgen sind.',
	'AP_POLL_VOTERS_LIMIT'					=> 'Abstimmungen einschränken',
	'AP_POLL_VOTERS_LIMIT_EXPLAIN'			=> 'Wenn dies aktiviert ist, können Benutzer nur dann abstimmen, wenn sie bereits einen Beitrag in diesem Thema verfasst haben.',
	'AP_POLL_SHOW_ORDERED'					=> 'Ergebnisse geordnet anzeigen',
	'AP_POLL_SHOW_ORDERED_EXPLAIN'			=> 'Wenn Ergebnisse angezeigt werden, werden diese nach absteigender Anzahl der erhaltenen Stimmen geordnet (höchste zuerst). Andernfalls wird die Reihenfolge der Stimmoptionen verwendet.',
	'AP_RUN_POLL'							=> 'Umfrage durchführen',
	'AP_RUN_POLL_FOR'						=> 'für',
	'AP_RUN_POLL_UNTIL'						=> 'bis',
	'AP_RUN_POLL_INDEFINITELY'				=> 'unbegrenzt',
	'AP_POLL_END'							=> 'Umfrage endet',
	'AP_POLL_END_EXPLAIN'					=> 'Lege Datum und Zeit fest, wann die Umfrage endet. Wenn eines dieser Felder gefüllt wird, überschreibt es die Umfragedauer. Die leer gelassenen Datumsfelder sind standardmäßig auf das aktuelle Endedatum der Umfrage eingestellt; leer gelassene Stundenfelder stehen standardmäßig auf 0. Wenn du die Dauer der Umfrage wiederherstellen möchtest,  musst du alle diese Felder leeren.',

	'AP_YYYY_MM_DD'							=> 'JJJJ-MM-TT',
	'AP_HH_MM'								=> 'SS:MM',
	'AP_POLL_END_INVALID'					=> 'Die Eingabe für Datum/Zeit ist ungültig.',
	'AP_POLL_TOTAL_LOWER_MAX_VOTES'			=> 'Die maximale Stimmenzahl für eine einzelne Option darf nicht mehr als die Gesamtsumme aller Optionen betragen.',
	'AP_POLL_TOTAL_LOWER_MAX_OPTS'			=> 'Die maximalen Optionen für die Abstimmung können nicht mehr als die Gesamtstimmen sein, die auf alle Optionen verteilt werden.',

	'AP_POLL_MAX_VALUE'						=> 'Maximale Stimmen',
	'AP_POLL_MAX_VALUE_EXPLAIN'				=> 'Dies ist die maximale Anzahl an Stimmen, die ein Benutzer an eine einzelne Option vergeben kann.',
	'AP_POLL_TOTAL_VALUE'					=> 'Gesamtstimmen',
	'AP_POLL_TOTAL_VALUE_EXPLAIN'			=> 'Dies ist die Gesamtzahl der Stimmen, die ein Benutzer unter allen Optionen verteilen kann.',

	'AP_VOTE_GREATER_THAN_MAXVALUE'			=> 'Du kannst keine Anzahl an Stimmen vergeben, die größer ist als der maximal erlaubte Wert.',
));
