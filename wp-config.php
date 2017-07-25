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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv("DATABASE_NAME"));

/** MySQL database username */
define('DB_USER', getenv("DATABASE_USER"));

/** MySQL database password */
define('DB_PASSWORD', getenv("DATABASE_PASSWORD"));

/** MySQL hostname */
define('DB_HOST', getenv("MARIADB_SERVICE_HOST"));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H;-yRSj:auP8G:R0|k!2{_-)y@eiuCVb7 U* [6Y&^B6(]vcej#O;KNp0b?`C3pT');
define('SECURE_AUTH_KEY',  ')fPsp/^Ym@#n74B>`bcW_YSJ_`R)Q3TW+5$Kq~x{d>TVp8U{LVWQB6~[u:@,:@PV');
define('LOGGED_IN_KEY',    '7h^V54%V%-OkpzyPtE4f)/BYCR!>&j^<Cs2c)+I>l,pP]q)[]qW[P{pRti A&>`D');
define('NONCE_KEY',        'Hu+1Q663!bz!a~ZMy[g7^<+yYRTi[pyP5*wieUxj~8t=ivu1K7Q=!B#$vMDp~:`W');
define('AUTH_SALT',        '<.[8y%e(wYee^R7,=Z<Q7^]YP?a;vamPY5[#MRB$OndL1;_:PT<2yXxo2wDpkwL:');
define('SECURE_AUTH_SALT', 'u&  M68M0p|2.(q/17E;e)|WUI5v }M6=4#_2jBOM@JO5a]nH5$CKi/63QY+S,i!');
define('LOGGED_IN_SALT',   'z|,K^_$[=]H:4xTkP.LR<K#b=+BzeI@eylh_Zh1 fc8miB9m|C.K]N{AJR] vJq,');
define('NONCE_SALT',       'xo5w/ji79-59?DC[dXMhGEXj[rnkK%8s@bVbZh38E5~OZlnz{$z-9SG_UFAo8}LZ');

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
