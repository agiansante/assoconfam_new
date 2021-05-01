<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'assoconfam_new' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'user' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'password' );

/** Hostname MySQL  */
define( 'DB_HOST', '127.0.0.1' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AC}g)(X;9+,|h}9wc@&EtYWz8VlZ(vYqRGmPOMGv}y|Pu<2SMm#p9URq[nH=?*%P' );
define( 'SECURE_AUTH_KEY',  '&`E`FAQe*}>h{~jQ1O:#nG[xT0N=$c_fRK}$slE4Yzsb2YU)y3epC ,V{g4AmGeN' );
define( 'LOGGED_IN_KEY',    'i%WwglBOt_nn*Av2y.]/SaJ#ZgWXOP04ctcS!cw%dV$#g#wN:o+k3xZR)zyQ ;*V' );
define( 'NONCE_KEY',        'RR#fj)F/I80fm(Lizt48$`C}L|Lvd.F+H#]K`YX)<wa*zxos)1{f^=8}=kf>/>m`' );
define( 'AUTH_SALT',        'Z,H1/nNB}+XZ6BSvQ(jyA#fIb/%?x#KWWLFC][s3E?8pWhuBFGxr`u_n;2U]]6|F' );
define( 'SECURE_AUTH_SALT', '7f_KTz@g>X8&z)yK5<Dk9FykP$%tSRq!LU;8ihZ~.t`v`7RM 0dgD7r(^2t]+$,1' );
define( 'LOGGED_IN_SALT',   'Po#8&$!) <&22mfD*BJ!,%}C[OHVG3X$|/H%79`Q[x1$[NftQX`6RJX&1`ZEMyha' );
define( 'NONCE_SALT',       '+niuYw/b?)D=.#BQvMJ6I@,jqQBkP-K}OC0v}rkPkvG+>%I-3FPKEu}CGb:Et!:l' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
