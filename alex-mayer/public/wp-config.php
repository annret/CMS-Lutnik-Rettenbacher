<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als „wp-config.php“ mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen - Diese Zugangsdaten bekommst du von deinem Webhoster. ** //
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'db_alex' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'dbuser_alex' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define( 'DB_PASSWORD', 'alex' );

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define( 'DB_HOST', '127.0.0.1' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

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
 *
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@v+uVc*u#Pga,/Jlm+p*H?pr3%#BxXzx|;XaoRORHmv~Uw5XXYU|pZ/:5~mvPF8h' );
define( 'SECURE_AUTH_KEY',  'LH9[^_)[h/1Vrti9:C}TwR1[m ~=&eF#$,OOhbcAYq{Vr19C*k*tCfOoDtzl>ogJ' );
define( 'LOGGED_IN_KEY',    'W08#a(*x>#OhVpSm8V>j1Cp>=(.O[^{iR5y`b;5%E9u,d:^Iu`i.eWAmFp%QnGiK' );
define( 'NONCE_KEY',        '*X</E~d[~1Fg*nHP-,-A*]=KT3>;%RVfY7}NL >De>&1UcX2{ Ee]PNK(pb/Gt`9' );
define( 'AUTH_SALT',        'D|Gt%#m=S|z*b}TR!xYD4#ar%]Agq+[teB%2xYo-H4!x0-pI-@@[<*5Mu5hNY2nL' );
define( 'SECURE_AUTH_SALT', '&uzuJ#qciMM>shAPQm^mh,iJi_-3YTAR1=H~PK|S~S;jcw]C%NrtPzw5EZiG<k^K' );
define( 'LOGGED_IN_SALT',   'L:7g%1MjntS&k3B{fL5g3@a=lNgY]Ut<modvD?a-5:i|.5u:Ri+n~)|*BPmQf*1d' );
define( 'NONCE_SALT',       ',aGO%BqZl+>1b=pfmBNfJ0Z4@Ws]SZ?ZM| LgQ;nKh`vF+aiw&|X)e1~|)N.Mqu%' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Füge individuelle Werte zwischen dieser Zeile und der „Schluss mit dem Bearbeiten“ Zeile ein. */

define( 'UPLOADS', 'wp-content/uploads' );



/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once ABSPATH . 'wp-settings.php';
