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
	'AP_TITLE_ACP'					=> 'Advanced Polls',
	'AP_SETTINGS_ACP'				=> 'Einstellungen',

	'AP_TITLE'						=> 'Advanced Polls',
	'AP_TITLE_EXPLAIN'				=> 'Erweitert das eingebaute Umfragesystem von phpBB um neue Funktionen, wie das Ausblenden von Abstimmungen bis zum Ende der Umfrage, das Zeigen von abstimmenden Benutzern, das Einschränken von Abstimmungen, und mehr.',
	'AP_COPYRIGHT'					=> '© 2015 Wolfsblvt (www.pinkes-forum.de) [<a href="http://pinkes-forum.de/dev/find.php">Mehr Erweiterungen von Wolfsblvt</a>]',

	'AP_SETTINGS'					=> 'Advanced Polls Einstellungen',
	'AP_GLOBAL_SETTINGS'			=> 'Advanced Polls globale Einstellungen (wirken in allen Umfragen)',
	'AP_PER_POLL_SETTINGS'			=> 'Advanced Polls Einstellungen je Umfrage (wählbar je Umfrage, mit hier gesetztem Standardwert)',

	'AP_ACT_VOTES_HIDE'				=> 'Aktiviere Verbergen der Abstimmungen',
	'AP_ACT_VOTES_HIDE_EXPLAIN'		=> 'Aktiviert die Auswahlmöglichkeit, dass Abstimmungen bis zum Ende der Umfrage verborgen bleiben.',
	'AP_ACT_VOTERS_SHOW'			=> 'Aktiviere Anzeige abstimmender Benutzer',
	'AP_ACT_VOTERS_SHOW_EXPLAIN'	=> 'Aktiviert die Auswahlmöglichkeit, dass abstimmende Benutzer für jede Umfrageoption angezeigt werden.',
	'AP_ACT_VOTERS_LIMIT'			=> 'Aktiviere Einschränkung abstimmender Benutzer',
	'AP_ACT_VOTERS_LIMIT_EXPLAIN'	=> 'Aktiviert die Option, die Abstimmung für eine Umfrage auf Benutzer einzuschränken, die in diesem Thema bereits Beiträge verfasst haben.',
	'AP_ACT_POLL_NO_VOTE'			=> 'Aktiviere „Nicht abstimmen“',
	'AP_ACT_POLL_NO_VOTE_EXPLAIN'	=> 'Ändert den standardmäßigen „Ergebnisse anzeigen“-Link zu einem „Nicht abstimmen, zeige Ergebnisse“-Link, der keine Abstimmung erlaubt, außer „Abstimmung ändern“ ist ausgewählt.',
	'AP_ACT_SHOW_ORDERED'			=> 'Aktiviere geordnete Anzeige',
	'AP_ACT_SHOW_ORDERED_EXPLAIN'	=> 'Aktiviert die Auswahlmöglichkeit, die Ergebnisse in absteigender Reihenfolge der erhaltenen Stimmen anzuzeigen (höchste zuerst).',
	'AP_ACT_POLL_SCORING'			=> 'Aktiviere bewertete Umfragen',
	'AP_ACT_POLL_SCORING_EXPLAIN'	=> 'Aktiviert die Möglichkeit, den einzelnen Umfrageoptionen eine Gewichtung zuzuweisen.',
	'AP_ACT_INCREMENTAL_VOTES'		=> 'Activate incremental voting',
	'AP_ACT_INCREMENTAL_VOTES_EXPLAIN'	=> 'Aktiviert die Möglichkeit, inkrementell abzustimmen, wenn du deine verfügbaren Abstimmungsmöglichkeiten nicht ausgeschöpft hast.',
	'AP_ACT_CLOSED_VOTING'			=> 'Aktiviere geschlossene Abstimmung',
	'AP_ACT_CLOSED_VOTING_EXPLAIN'	=> 'Aktiviert die Möglichkeit der Abstimmung einer offenen Umfrage, auch wenn das korrespondierende Thema für Beiträge geschlossen ist.',
	'AP_ACT_POLL_END'				=> 'Aktiviere Umfrageende',
	'AP_ACT_POLL_END_EXPLAIN'		=> 'Ermöglicht die Angabe, wann eine Umfrage nach Datum / Uhrzeit enden soll, anstatt nur eine Umfragedauer seit dem Beginn der Umfrage anzugeben.',
	'AP_ACT_POLL_NOTIFICATIONS'				=> 'Aktiviere Umfragebenachrichtigungen',
	'AP_ACT_POLL_NOTIFICATIONS_EXPLAIN'		=> 'Aktiviert das Senden von Benachrichtigungen an alle Abstimmer einer versteckten Umfrage, wenn die Umfrage beendet wurde und die Ergebnisse sichtbar sind.',

	'AP_DEFAULT_VOTES_CHANGE'		=> 'Gewählter Standard für die Änderung der Abstimmung',
	'AP_DEFAULT_VOTES_HIDE'			=> 'Gewählter Standard für das Verbergen der Abstimmungen',
	'AP_DEFAULT_VOTERS_SHOW'		=> 'Gewählter Standard für die Anzeige der abstimmenden Benutzer',
	'AP_DEFAULT_VOTERS_LIMIT'		=> 'Gewählter Standard für die Einschränkung der abstimmenden Benutzer',
	'AP_DEFAULT_SHOW_ORDERED'		=> 'Gewählter Standard für die geordnete Anzeige',
));
