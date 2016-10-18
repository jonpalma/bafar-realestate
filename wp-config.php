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
define('DB_NAME', 'wp_bafar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'fhxsM%yt#:80mAcur<*^zT~mJUlhS;vbQNO1z M,x9WT|u(Kq~[__^WW==!k(B(4');
define('SECURE_AUTH_KEY',  ']^& L[`B]tM@[+~OF(Nt8LlJ]O!U5f@[.rpRb#a%^F*g&H#v(ZNZuH7^S?nnE?G6');
define('LOGGED_IN_KEY',    '!y_E/EQ~s:@OW|^D^z_BJ7^qT?D1nBsQ,e[9PGA#51BhyvN?B9X^$n}f%sw<C*qU');
define('NONCE_KEY',        's`VITEK8l-y%*(7&NXjo1W]Z6(tPOHGx<CswkTPzB)e4s@E$IEi2?#Ua!`$gbL[p');
define('AUTH_SALT',        '>Gb9aPmls~688P%YxF0+GGgl+W<x`7igsj1s~&YBdTGZj~YoR44RP!P4]Zv`yUOi');
define('SECURE_AUTH_SALT', 'jb+gPS&#GpFWXRDoyga`o[xD?*u~km{9sCcvCZ.a/V^%fKfK~U)=>nZtKI-:GpNG');
define('LOGGED_IN_SALT',   '=*?L2lu`Cd2}}BK_L/gRT*11EH_<t$48!)K*EDmK<f. t4oCh!)/qPS*nH7Y$*Y~');
define('NONCE_SALT',       'B:>ed>W![7x0!j0$kGlc6wyFR<@wgH5z-sqOs~,Cu4^~r2alphD#f1`a 5$DP,FH');

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
