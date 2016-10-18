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
define('DB_NAME', 'db172894_bafar_real');

/** MySQL database username */
define('DB_USER', 'db172894_mixen');

/** MySQL database password */
define('DB_PASSWORD', 'Now.9537@@');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s172894.gridserver.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mMu*,-`G|<t@&S}}/KrQ*d5CDGZ>@jPAg&6Fi.,,C;vAFf/aL]r Nluz^,7O]kjJ');
define('SECURE_AUTH_KEY',  'a#3}@Bdi73I]xVDmk/e&f_V`bO2NN*<e~%Wx _jJStF2,C3@=(1PvP<#Z=L~SJJ:');
define('LOGGED_IN_KEY',    '{B{D%3~h&?rhC>zl`LcvxB6%=$IW9Z 3$3>Q,|u0TC|wP$unm= e00mBB$vzr}x]');
define('NONCE_KEY',        'VsDFnum.,xkf@8nDGCU6Z(d%AC%5[<8@Oqz*hYl{{Z:W[R^m9k9&i78?n:w.^+j9');
define('AUTH_SALT',        'C1G?P.=xV}m}!a#cWM0bjV*|YRoiXfXwT<}XG}Ma8{hyCsLQjy#C*JK]{_(J_Rz.');
define('SECURE_AUTH_SALT', '1HqDQ|L:?ga%jJN$}~MX9ZzXe{(z&P1j[3 9j^;M#@GNe<MnG)pp[t(+l/CwHIH<');
define('LOGGED_IN_SALT',   '=:^c]dfx?y^z5Pc)H(G^j+xaG}&Wz~t:VuILH(,eU#>;B,3)Gxj!S!*Qt&vsrDLb');
define('NONCE_SALT',       'RNRbUcq^/+*wN<Md3/uECzw_e/;`lB9$zI@yg-}c/bp.^n1D!8Lw#fHl=F{]^l]x');

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
