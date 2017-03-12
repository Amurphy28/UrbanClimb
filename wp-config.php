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
define('DB_NAME', 'UrbanClimbWordpress');

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
define('AUTH_KEY',         '8bO`[*F_# H1H[)Ts-LrJ)&u|,8uir/fx%coHm(.8 {Brv4fx-<u)WxeyNCy4A4O');
define('SECURE_AUTH_KEY',  'iu*o!8} $XP>QOn_q(XP~yDs6_/tcG#_cdIqF+xkYGbv]LlBT1$}M[nw@.@LbCWe');
define('LOGGED_IN_KEY',    'KERecB&Sb.RA{]1pKs_>og]-3gdhv:vIT>bc4vguH<I+y}+L21h9@%P>.VqrZ)!~');
define('NONCE_KEY',        '9C?!BjSSlRhkE180xbKAYMs(^:ahm !.k^=Js`6$;-vJJT>xgtfl*ZuzM~#rjVUA');
define('AUTH_SALT',        'BaxBhNHKz(t0qTHT_clYgkz*/$EYuLJ+Uys*)sMc|^MWw`Cej^W2w:XB])!yo1.)');
define('SECURE_AUTH_SALT', '&M}&&z%usodDb1GOBtC<))3!J/B%(PtL;rWBK|LPmpp/ep1RDwt+rAGp::2+JF4N');
define('LOGGED_IN_SALT',   '?N=(DG]y:gg3;.$LHeJRtq6a^a#`nC;Ac$b?x.Vln>_ohyw,Sd^:a)+MMv4#*F>h');
define('NONCE_SALT',       '9g4vkQfW<SA$H&fub;sZC|:{R;Lf#r4*xN*FR-,fH]~qwW!#S5Xq1$<+Nd@=1[3v');

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
