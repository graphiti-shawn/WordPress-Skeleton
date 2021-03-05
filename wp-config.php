<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '||je0A|#Np}xUMoxpFBCFAVTE8SDj_nfaj[&kVf~6Ndjo044[!QA|dU,+Is&56 F');
define('SECURE_AUTH_KEY',  'jjKl_UV!#_Uw2 tdK.NZw<DXQ:iW<RK0pMKjN#;RR4 _oLOYd#uW)`TdPYs.y I$');
define('LOGGED_IN_KEY',    'tWjC+txO j_.aRQ YP*E-Nh-#xbEi}rCLhI.&54fXX<*=F?_3(Dr_F|)!u_-K3nQ');
define('NONCE_KEY',        'E%4K@K|;p%4U$<|fh1AY_h4SW+-c{Le6|x|(&~?p;@$ LaZJr2Khkh91st-<jny>');
define('AUTH_SALT',        'i:(`1yb5a.xf-s|A.JpKP1$<z1<v+d;Ye*;]0EMEy+9<2+)t|i~0}<Ti9nf+C]eV');
define('SECURE_AUTH_SALT', '/-TFt?IfH*g{MsJuJ[=mzG</uu7IYTFN3bf$:X|?tE*6zL{T[uzc}W8C#(sOTuS(');
define('LOGGED_IN_SALT',   'QR}OA|>k}Rvvg@43O+]{dqYxi4l)T&4+#1]^OR&E+fLf0J.,,Si/NK#hFQ9&8ZCa');
define('NONCE_SALT',       '<bjch+]uY#;VEA}~=v-s4@yMvDs~QYyil-MjTEo7fCQ>Q%8s-|hYt_(,$)VG|VA+');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
require_once( ABSPATH . 'wp-settings.php' );
