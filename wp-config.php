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
define('DB_NAME', 'transtex_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6D#<(HOq/B s?Ua0B#h^bkk1;~#H%>O?8 cCzRNyh~ucGnbSU+NYZ^CaVs:rV-<C');
define('SECURE_AUTH_KEY',  '_#fAVC.>)& >={/{.u)-?$aHO`osI`X9;c1MgkDX!Lez-}:yIbB,,IE.k:g@fHqR');
define('LOGGED_IN_KEY',    ':XCQ0lRRzaqC7B[+83DE@J{*o[#@-(i8u/gKI{Otzee^~{1EDp^|d/j%Bpn,?7Hx');
define('NONCE_KEY',        'ZMr41JP};Nx{!{]y)Z8aU>r[fj?rp8/avo@xB24;7hlfsQq~?H%D%^Wj0T>aa=v8');
define('AUTH_SALT',        'TR[n?%uvh+K*h[7`tqxDFr<^_Q^r-U%xuH9y8R*5(Y^$8q^~EWN#X2IF~F5]Z|@z');
define('SECURE_AUTH_SALT', 'JI1eulJNheg1>Z4d76_G3[oFYoSB&9t{}{utG3#!u%RC(YL5)NHVm~:MduX=rN+=');
define('LOGGED_IN_SALT',   ':g_$z0fxKNva>RvMmJW qFfl>_F!V0WRp3Y`G]!.Bfy,@~rO{0kzYz,`e9I,(d0J');
define('NONCE_SALT',       'Fw34GNe649oOs/L5eo9%:8w%yP?/&%K2rewC0DcF?c{_GpZ++zqa4<3<^>e,.{3<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'transtex_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
