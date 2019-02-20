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
define('DB_NAME', 'Blogku');

/** MySQL database username */
define('DB_USER', 'Guntur Williantoro2');

/** MySQL database password */
define('DB_PASSWORD', 'guntur22111994..');

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
define('AUTH_KEY',         'lUyt`@j[v-#V=2tS/MpGE]_34ZR :/P?_]-U(?%)zXh]lJk-<Vzh>e$7w_N[tdQX');
define('SECURE_AUTH_KEY',  '?_/s,D1Zc~jeUn3r$&iNu*ER-P^EFQrvDuj&xiBI5[+Mz$F-VI,Ba%;~huT,IuZc');
define('LOGGED_IN_KEY',    '0aNqqMMSy]UeAaU@&(V4cp])gwy;qJaWXp!/6zh9~^:U@z=Cp#afx`)q03:ZZ;1M');
define('NONCE_KEY',        'dqv*.yAj1ZT&JgSwRJX]Jo)aTjNeFFaIKg{?99ud#%De0)7Q@6B-@cL#+T{qi!CD');
define('AUTH_SALT',        'T(h?1/8qo$^OZwN[rpe*u5J0<.xpDawN&2_O&wf]0{{Ru=$25`c><v<b-5TKT,s`');
define('SECURE_AUTH_SALT', '9~NRP*Y&qsS_yC2RXGl5IAmq9M/noh#-@wYrcp?T*H79n;)86kte*SW&9AJ&p[z8');
define('LOGGED_IN_SALT',   '(gY4<:5U G2cM9msSZN<c+si6(h1jUNNM8S0q1a8Dzl%s>,[6n_)_2g$r9c&a/5&');
define('NONCE_SALT',       'z/Z3V.A:>WUbTzZ(O4nFX+fX*2AFi$b{!1+!?10T:7^H<6+mBQtpCb5gY+|;B0#m');

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
