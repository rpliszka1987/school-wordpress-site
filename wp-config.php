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
define('DB_NAME', 'school1');

/** MySQL database username */
define('DB_USER', 'school');

/** MySQL database password */
define('DB_PASSWORD', 'school');

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
define('AUTH_KEY',         '-kkqi6.1uX]gHwR/s.dHIX,ezj6O`%5=4~JW]wOwBJt|&*ilG6;.]QjQKTmS{b8`');
define('SECURE_AUTH_KEY',  'X?iB4,):x&kuo-r8zVT)jlqbqy6mm?2JskG*@FW.rF)8K_T)TDmOBA5%hc~evu$b');
define('LOGGED_IN_KEY',    'o,1f-&:)Zb?K<`q^v8QUdO6 m7C=jETW?|LQ t}~QrD!m[lgbZORI}x=P(Y!>SYL');
define('NONCE_KEY',        'tdM|qAu^+;.  yKlye+vVZq}L2x5n<,GQ{{Ze}29}V-UAhG9 _9YR G Lp)hmC`F');
define('AUTH_SALT',        'Habs6ge)-1%mI[TpXQ2GGmq7CBTO^vj^!EoZaU:a`+$[|wPSgr-}U>3Bo.6uuenB');
define('SECURE_AUTH_SALT', '`Dc?VJ9_K`Od02QOWvOhU_C7-Z2*}x:3MhnF?L&6-c!6DQa/:OJ.WhJx71Wm-$o(');
define('LOGGED_IN_SALT',   ']|*>9~&2c)=~78G ]6(v4KwEr.oTTK#Rwsouc7a> DYHA{,2K4mQ/exgIyKOim-B');
define('NONCE_SALT',       'n[`a>DM+Rj:W>,YC-1_UdK!sI{bY1HR3+:.l~513xN1<R_pbaxP%dKI5t<P8CBa|');

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
