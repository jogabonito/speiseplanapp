<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'wordpress');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', '');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yUzHxr2EY nzWe<4[>%xF$](]WK[+zUfj?)g24._Z6=INi@Sv4fw`jW}6:.M4p3B');
define('SECURE_AUTH_KEY',  'm66pV3VPOS&XgRMD=}&YEh$l1B8~fqPhn>!ywpYpu/f-sCL`_g`-7v^a=Z01.O~B');
define('LOGGED_IN_KEY',    '76!, L8lMvP}J:mY)C~#{XH/saj86(%v,L]=Kjsjl4<d^Kp@2oYJ8CNk5v/T)N_A');
define('NONCE_KEY',        '&B><R}^ X2;Pc6+k]3Hxl%W4xe05duiC#+Q_-Y/Q1=cKE|S|}[dI0i_~0>~xVF6&');
define('AUTH_SALT',        '>w/#L73jb|(7?}!u^Lxhycq{m6@p.Q=6y6v/@5Q-Oz=HSr.ofyuR&xwlwY)$VON0');
define('SECURE_AUTH_SALT', 'ri3#NE#A8O9:W-miyB0~K2Dw+qgzpP7BiaX3J~]n:,Ql$8G0dF+o&=iz8l*A5uKR');
define('LOGGED_IN_SALT',   '2I)/l?M&~v*&z[q/T[.gE]3;JqMs#WAv1k(L6R_8pFiLf#-9DEn>fHKAj?bdn26t');
define('NONCE_SALT',       'm4z<Cf|0%1;HL]pgHU_Pu2(]?wWQ$AW<r{k(8tx}8(t[jMJyCX7L+w;S}[,0ttvv');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
