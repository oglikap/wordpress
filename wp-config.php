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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser2');

/** MySQL database password */
define('DB_PASSWORD', 'Thee666');

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
define('AUTH_KEY',         ' U)I^6X?Ke&Hhw?I#1YO`DXHLeN,wCQcx9#RhN5)unZqCK(H|53Tts8DoM[y7RGa');
define('SECURE_AUTH_KEY',  'ETS#Hz5>l=K,PY5`BF,>7Y,;TrDFfjV|)) H29 >(K|Vlgklz)C<VKw@1v:~/.V~');
define('LOGGED_IN_KEY',    'UO>)#jnU=#.qBhl^/|7QMH=Q~arM/r!@8|OWl;KXX(.U]dvT~Wh,!w?pzBx>fG_#');
define('NONCE_KEY',        '[/Rrt[sHW&WLQ/.[r|$cQZ5Yml|]$_]}&9y:)y q`M|ch6}SB}qY]!l<+Wh3io&v');
define('AUTH_SALT',        'VnUV*I{Ox|7bnOtd{pf=%F<bnOca15Lz.<p4K5w@1/%`&Eyz]oiJ.R#{JCU* WU8');
define('SECURE_AUTH_SALT', 'kMD%N9,}?Kw/Cxz2xa07~kT#]+!8zyPG~H!GTj-N)PDPO 1N<[-yzg<l?SS)q?20');
define('LOGGED_IN_SALT',   'r{8wK0:tS>F}3d,m!.o0MKYsZZ{(;42|`[G#KNR~0D?ov8SRi/!=a^]_luOX0Pg>');
define('NONCE_SALT',       '&n/2[JNisut9`7.(CCE#y#vIwnm(|V_:FCSd1~ pT52_O0)cl&o!FN<.%a,T Rzy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
