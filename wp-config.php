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
define( 'DB_NAME', 'geovu' );

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
define( 'AUTH_KEY',         'WgO0L:RiM5T`[Y/n#,AjTMK3rOPyaz@{]azS}71[P.HzT6tSKne+}Lo6<Lllfb?-' );
define( 'SECURE_AUTH_KEY',  'x}=qp~hW:>32,5]{R9FJQ1(,U_[0kUBY@amAQ22ZtB]RlXfmn^Y//0$}r!yBObDE' );
define( 'LOGGED_IN_KEY',    '?^g4r!Tz4eb6dM)m5cnKu~m*vD:Q;]UpW9AGKZcEl]>`=/vWH^^$O3rh~!m32fhd' );
define( 'NONCE_KEY',        'eUCMxzR;;q,)Ep5/.7<BR6(6:b68Wd?5qpDA;xlkGatzf)d?6VS3gavjnr[-H;`+' );
define( 'AUTH_SALT',        'Sq(7VeaXDcN|uUF)G^NrR<H6bM1*_Kw*q~I/]rK5>d/`cCE<_<&`{-{}L&0Z%hx<' );
define( 'SECURE_AUTH_SALT', 'YEvUNvMj>baXCmxAexVd.oX*_tiE|iH%QHvJd%Nig/Fovga:bo_{G,??a1i$]Gjq' );
define( 'LOGGED_IN_SALT',   '^q7s:9<ZTv$V/.`%4o&n`&zAL2 `#9shfkU^hVitrd|yC.KLd!Z!6knr7Ln%{#v!' );
define( 'NONCE_SALT',       'D(5gKGW>JpI9@W7)ht*&ML`B#[.wLCr$k]T[R;:Z?Gzejm_Ei&y.Y:ijb2b!BsGW' );

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
