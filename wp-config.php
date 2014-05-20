<?php

/** Enable W3 Total Cache */
   define('WP_CACHE', true); // Added by W3 Total Cache

// ===================================================
// Load database info and local development parameters
// ===================================================

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

    // Local Environment
    define('WP_ENV', 'local');
    define('WP_DEBUG', true);

    require( 'wp-config-local.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-staging.php' ) ) {

    // Playground Environment
    define('WP_ENV', 'staging');
    define('WP_DEBUG', true);

    require( 'wp-config-staging.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-production.php' ) ) {

    // Production Environment
    define('WP_ENV', 'production');
    define('WP_DEBUG', false);

    require( 'wp-config-production.php' );
}


// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ========================
// Authentication Unique Keys and Salts.
// Change these to different unique phrases!
// Generate these {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
// ========================
define('AUTH_KEY',         '(EL}lE7mEY7T{#WA<bi:vDJxr08lltttL|5ovI(&r&uINv`?+9_j;6g,5,$QQ)?+');
define('SECURE_AUTH_KEY',  '18l|E(3lcP`sZ1Bj.PIOB+`}M_]L|/l/tdYFGMpyHgZIm=Q^JyrjSzDjXuQZc!Zh');
define('LOGGED_IN_KEY',    'F[0*;iQ)@6,`Wj0o$WkSz<onoZU{SqQ~=Gq}Zu^PGleS>gD7j*E/{|06=VW`.4a!');
define('NONCE_KEY',        'oCRBAv*Xy%E>Lu)r/&P7h+]Uu t=S7dLfFqx.oi|g3OpYtyn+{V|28%oiubGda9M');
define('AUTH_SALT',        '[N$hA$NL-V+S^N,RX=h4)I`^neU|/tMg|0Qk27wfG?K`pRHXT:?Pj^5.4}+q`eX!');
define('SECURE_AUTH_SALT', 'H59o/C!J4e$THR9|T+Xx~A+37Hr]N3$G:pM7E`n g8xKX}t+XC&FC0Ea@pLh*}xh');
define('LOGGED_IN_SALT',   'I:d#f_k!oKhFPO-o_wmp^Ux[topJjSc;@bQ<fU3n $g)rLIkQHD!Or4l|bkZ4Oe)');
define('NONCE_SALT',       '-^qsX66G`1-l+Wn8n-^=Ox!2V>.sH*|ef$#lu!9Axd}z5@V9Qqq9al0#-5h|#Z~t');

// ========================
// WordPress Table Prefix
// ========================
$table_prefix = 'wpm_';


// ===============================
// Switch SITEURL & HOME Constants
// ===============================

define( 'RELOCATE', true);

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );


//==================================
//Bypass FTP connection credentials:
//==================================
define('FS_METHOD','direct');
