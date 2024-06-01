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
define( 'DB_PASSWORD', 'canmp168' );

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
define( 'AUTH_KEY',         'W<,7/#h&u%zM/a/[)M<x:=>N4ERWZa]8/pCje4xj<Gfv_NXPaY8^=Gz.h<%pQE|Y' );
define( 'SECURE_AUTH_KEY',  'n)3OWmHIUJ^.bPQP}Ai<(3{Sxc,]3m{9}Y&v~v.R)u[X5B/f(zzo]|2Ou_K:;. R' );
define( 'LOGGED_IN_KEY',    'qh$T/o87BeK^ @J~DiuBavD}:wSIC]OH0ki##WhZ5(/3B6%ntP-x_G~b^-fSvOhG' );
define( 'NONCE_KEY',        'eQuEQB1hqo5,HN~~u}5%s%}b>X$-~~b}IHaOCA.%R oeX2nx]>K-*e~++tJvx?&p' );
define( 'AUTH_SALT',        '62bH/xvu~MI[Xu[fk|w.9?+$YmutKM~7!|,.LQ[|i*(1XJ}ap%l7bsbM3+qj;/_2' );
define( 'SECURE_AUTH_SALT', '?CTGzDC^:T^}{8tt^^2b.F.{6EOaM-M|E{j50gGY$cl3.dh&ExM087>q`UD_l:>D' );
define( 'LOGGED_IN_SALT',   'fPq6Wfyt54bL%UU*:!l?r1*25I:ar,FARe X[|Q W!e_$|{LnIOdEFze{aW#t0Mh' );
define( 'NONCE_SALT',       ']q$TQcm1kK_x]xzp^k(OC0$KX4ngzT:X))2Y*3|Ts$tgOouNl9c]r{~L8b+AdB-i' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
