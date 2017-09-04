<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'piraci');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'lucas');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'lucas');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':X=H6>F6.O-%`l%ag^#Fbqu#|s^)zRC0-%XXXS-gyi-y@%0!iBI[+CsS&;}BKid>');
define('SECURE_AUTH_KEY',  '0A#2J#_*)aN_66((-NkjO_oY,CC=k~Q:~u]rA<{WA|R)r~jB0l}HM%[YBTLBf`mq');
define('LOGGED_IN_KEY',    '@98/UhcW`9qI;JD7v/HGJsF((Z2+@7@aQr0!u~ Ovkf+V h5O,}[/tz[Z=p@K$pu');
define('NONCE_KEY',        'g7-y-<~kPY%+){up%G:Br@nQFs>_,JO:7a2-|9$RRUeH$|FSaKk?aGl0W6sopT$M');
define('AUTH_SALT',        '@p.>~A5`1Fh|1T^?[?{G w$31kaJc,}%YCmZr34,!.L;T-r$YlDPFd|+-+kPir@ ');
define('SECURE_AUTH_SALT', 'K6t0|jQa>+d;+6mF?|#u|n2g{+ez82H?nuBJ,&S(.VnZz+J~+H.IS[6+{)Ce591L');
define('LOGGED_IN_SALT',   '+R)Gm6:(0rOixw$2SdG+5*>Cta~60OWXtB:0JW|d{M#CW,vb3AXt?j*Sgw@imAB1');
define('NONCE_SALT',       'Uce|M/.1z,(DsY9o+9mVu@`-+670./I}6ENDbHksoA|c[UqKq=6:{@!EI5|7Oqv3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
