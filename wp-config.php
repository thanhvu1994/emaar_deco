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
define('DB_NAME', 'emaar_deco');

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
define('AUTH_KEY',         'MLyG-uh^e]`x[L(#s`D2Y4[H)!E-]a^&9l9-=>>5##j;6yeR!+G$0r+^D7EAy&7Y');
define('SECURE_AUTH_KEY',  '`&Dv{kyItzE!5MR$N9kO>K:N`)-GJSwcLa>(Y$2)Ylf!5E=H-+:r!<E:^9%X$*ec');
define('LOGGED_IN_KEY',    'q}Uqx/hcbh1<MsR;U@$oeaQ0d4dSJ.>1eq/WMdHC?[v#4%tG&^?Kbh*[gcsi(,$S');
define('NONCE_KEY',        ' }{BB3A,/xRKF}DM=/xjSv}5}yTut6FS+n]90UCA]!BmTZw[dPorDD`rR,j{A9/f');
define('AUTH_SALT',        'P7`[>{z ^,x6zia*c#]WN~8$nDpfZ7/Vpo#:uj[[vyMFHb0N6+rSEsmHjJp^9hk(');
define('SECURE_AUTH_SALT', '@S$QxE)Ht|i.FIfDJJ0F>ib}6[<n#d0N1[?z5^B&khPJ/0]trJ(4o`,1Fk~oRT]{');
define('LOGGED_IN_SALT',   'ax,ro)$K#lq(&)*$UxvC~r*6[,_K~f/&0bZsxs|(9!e9<8_lxNp)Fm$|14>u#k)#');
define('NONCE_SALT',       'h6s5RroOf.*T+6Y>8vK)1_kJn1t3ZYbOL=1/k-&*wAX^4LE9LPAQEj%DNRxxqm=n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'em_';

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
