<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
	define('AUTH_KEY',         'erk(kG7!Vkm$aQr@|0?>!UeQHl/LTdFpj;6s_rcB}eY0+%KEfVTUfe a-+>7Nk{8');
	define('SECURE_AUTH_KEY',  ':a`9U6?N;u~=+q8-^^U-)$P6N35y8X^&0>uHYKSPW]~h0K)-atXl/{cT d6tqGGK');
	define('LOGGED_IN_KEY',    'n R?7M:Pun)NYUUfNB_pY,cVy4>;:C,+t$j5]d-P|>,4[xi`G-<0(:hK}1$]P#L]');
	define('NONCE_KEY',        'TpWY-su.44wiG03=G-!a(9+])?&+^G-|vRJx 8MZY:W9s^DQ4[$of8p}F_&QwT5I');
	define('AUTH_SALT',        ']@.F+#^{<T8FL7M~[!*l|vh+RUG0!`=m~;u|T_9E8X3;dq|K}jK+364/W!<-G7`c');
	define('SECURE_AUTH_SALT', 'D:xtrpBWQT};jznL|re|i!>rJT]Cf;*FL0pqk>Z+b?5K|48L7|+tIxq<yH?1X)k.');
	define('LOGGED_IN_SALT',   '_CHp>-m)F{g+wqY~Zy}S?EQnE4&LLfb6=r(Mos%eFHz1Rir1zYk:0DLP&*l^ARTs');
	define('NONCE_SALT',       '<ma_T!Z(ET6$]6sB.n.,(d#2-IwOIUKHDjAB %K6Kns{sxFQp4X`+QTU3$<ys5K1');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WPCF7_AUTOP', false );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
include_once 'new-config.php';
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
