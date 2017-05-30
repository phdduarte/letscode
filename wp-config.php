<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
ini_set( 'display_errors', 0 );
ini_set( 'log_errors', 1 );
ini_set( 'error_log', dirname(__FILE__) . '/wp-content/debug.log' );
ini_set( 'error_reporting', E_ALL ^ E_NOTICE );
define( 'WP_DEBUG', true );

define('WP_MEMORY_LIMIT', '3000M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress487');

/** MySQL database username */
define('DB_USER', 'wordpressuser487');

/** MySQL database password */
define('DB_PASSWORD', 'bqJih^2KDd*!');

/** MySQL hostname */
// define('DB_HOST', 'localhost');
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'FS_METHOD', 'direct' );
define('FTP_HOST', 'ftp.letscode-academy.com:21');
define('FTP_USER', 'Administrator');
define('FTP_PASS', 'K$Qxz2fDsm');
define( 'FTP_BASE', '/' );
define( 'FTP_CONTENT_DIR', '/wp-content/' );
define( 'FTP_PLUGIN_DIR ', '/wp-content/plugins/' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3RBF3[bs4Apw/bC|+*P}?{_>BGR>#k$7?`7)YT65CGX.$TRjc,^AY8dr1W@KNj;{');
define('SECURE_AUTH_KEY',  '(5?ztio>_vEzDb>}j}Y(N[d)0jb n9X.&Ql`keqScnCPVVnE+J;WZI;&.5S!{Ost');
define('LOGGED_IN_KEY',    '}YVX%P>D2=Q!`sWCgnIwbINuP{=cLKi7.xJmhs=8ycwVF-)gIXPCf8P3 lih( m2');
define('NONCE_KEY',        '}8we`v-wV;daG(U@<%TA^TqKZ*dnm{Fb/0f)p!6M8$()K%%EARw>+~(hfapw/ldx');
define('AUTH_SALT',        'lM!]/S8kmA5b][P:qAW4+~2w 36WYxL~lWb:MM&=&C%6j7I15l(6A?Y:(*lU!dve');
define('SECURE_AUTH_SALT', 'A+|}U9`Te<n]el]khd<o[Q?)rf[h:7]-0(d$e[i7^&gmB%onMahlQsArbu%sKfLa');
define('LOGGED_IN_SALT',   '2AV^QQ_*wa.((2EP,gkqNUwv~x(mGJ273/;)|]^p(8Ue*Z=>3i|ETdnv<=:Ex|mN');
define('NONCE_SALT',       'Ggo!+4<aMT`l8XuoKFL?0E7-={jXGMJJ<H;k.<ukG$ZW(uPh]^(;h+u3V0#78#px');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');