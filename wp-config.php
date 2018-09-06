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
define('DB_NAME', 'consult_wp');

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
define('AUTH_KEY',         '(qMO&m`!IiZP2a4<_sU]WH)&E>Zqjg3Ti4@8/sM/:.MHw^_VP}&I#6=k>FCK0Cp;');
define('SECURE_AUTH_KEY',  ' 5 o3YXOs4<,Mu|mw@bw;;C!_@M!JJ44t?Jyle2SA>yrABP2?:qs&$=+dsCRqN$P');
define('LOGGED_IN_KEY',    'Gx=R&ZT[|UKj8<y_au`hU_zj2Kz~*`<IF?/vV+](|&g$&{C77U|^5C:EW*O2MH-e');
define('NONCE_KEY',        '4Kp@9lrtki.N&-W>}_=:wtO4,Ye)`MeMW0pcHz%YOXiLW*l.W8k>kJr.YmhQ@.2p');
define('AUTH_SALT',        '9+Pj/`GAZj `r(^et2a[@K0PL`+AncAq2U&qT/cs-m-M+cl?(]/DM{h/54g#rvw)');
define('SECURE_AUTH_SALT', 'yk[Y|A(-=&VT:B(&^sgK GfliPzD2k!kN8+3CU)v-zZ_Xs?{qEat&k2[|-_#s2U/');
define('LOGGED_IN_SALT',   'g^Tm~H7(bp[av<Khy=go@au_Me720F]!6&-MZguBr0c}CLM|UW|0[TA*wYJ6,8sx');
define('NONCE_SALT',       'By?eJx>j5(YmiLT9V!KzSguA;=1Pt7SI=:3.J|<}^l;$P%,[*9~/#@E2*VU]L.iU');

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
