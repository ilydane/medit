<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'medit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3AARq$+7pH@c L$x^=tQ-wcky!>Z_tWOpXR]V+pu`Kl3~4`#wxy42Rub,W#(WXLp' );
define( 'SECURE_AUTH_KEY',  'tTsyNUPgg!~q.G(620VQInwM#MxP).dvQNa]U_I9YBtxBF(c1AFn[)ZEhOuQ.*!e' );
define( 'LOGGED_IN_KEY',    'zJ/M~).B*EqR-X4-9Ya0q;Wu/Z;8Sb*Psy)w-Z W<hNKM7{%3$bL!$`ip<6[U>6_' );
define( 'NONCE_KEY',        'hcq&N0QX*p8Gk-3X($+A#F?!Q]f8hd~y{Z[&13,0Xz cjzBE_~V9MU[_qpHZDfT/' );
define( 'AUTH_SALT',        ',68S%AU|AA _eK2pYl4Qm2s95fnnzb&$5:A cljF{ka@P_7[5<R?9o,w1A[9FyWP' );
define( 'SECURE_AUTH_SALT', '=+/5v{$)6aKj60p={wE?#r]bD.(BS,vh{jfL%NgS(=DAh/Dw#LMynlBWL%550$%q' );
define( 'LOGGED_IN_SALT',   '{[;0gLSc:`3jajiG3S6461bh-rLlI.JAf|T`MoDKiz/.39f7j]KQgB#bx+C;&Q[a' );
define( 'NONCE_SALT',       '~UgY8.|Z&CR#y)46[olgp7^%;k1%AbBNv}AD$rJ8?9|cjMbMo$lDo+nZ56a9 :rm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
