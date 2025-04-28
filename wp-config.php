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
define( 'DB_NAME', 'baocaocuoiky' );

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
define( 'AUTH_KEY',         '?A<p&~wa$px<&ez1b<_7>:IWSmpmxDWQ{/b{yaOPtL;BzVNt>ug)N2]3P/]-BNie' );
define( 'SECURE_AUTH_KEY',  'DkbjZg.IVM]<g;,j~7bgW08]1B2/M5NF{R>kkwmwb>M0^RxicEr?*PWY~4HLt9U(' );
define( 'LOGGED_IN_KEY',    'uBe[ZeRD#,x1 U+QRM}g(b!uw{&igpY5<gA/Y![k+9I! @>_R;T{8KiqE;XgpyvV' );
define( 'NONCE_KEY',        'zp@Ta+M%;|mv=M>v.7BxJk`3xwMPS,cQX9yg?5%|;IHHW{S0!3Qe4pO=}08&N_hl' );
define( 'AUTH_SALT',        'pz!h4e7l;f*;jHqQTTh[BZoxj88C(hnAh9[,8{x#xXh^`_fH}RZo -SF)<DptA5c' );
define( 'SECURE_AUTH_SALT', '#OAOp8OcWU+@bALbNx:-EqJfPW,!*pYUZ?Z^p(%hvqE|AR/uV J:liz)Gl3,@V6G' );
define( 'LOGGED_IN_SALT',   ':u@OO5Wx@1wP@uw=&#M(%N9^v|7#/$571NqDy{{!g7]jRg61;0Mq#,d0(e9wJ&9M' );
define( 'NONCE_SALT',       '~&%0~PSv~8DVNVEXYX:U{3Jarbx6y/~lyRHm@Q-=dTA8QEDjl9@T+-UC-f1}`]Z~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
