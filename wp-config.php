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
define( 'DB_NAME', 'hlgdnewnfuernfnerufn' );

/** Database username */
define( 'DB_USER', 'davehlg' );

/** Database password */
define( 'DB_PASSWORD', 'TheDude2001!' );

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
define( 'AUTH_KEY',         'dSAj2oi&4@]l<!Yw`q;qjICmf=Ds>S2y4@F8~DVSHN-=W:mes)uz-DagdW;Y5s(P' );
define( 'SECURE_AUTH_KEY',  '@Bdx2^;.L{=n?N@ cQn.h0`5SH3B4h@=t3:[}tDPTEjW9Wqad=(.yr!;NOwf_Kb|' );
define( 'LOGGED_IN_KEY',    '=nB##Ynj4Q>~w$brl3or#qY_[BLe-3WSA~=;C+0R$U.gEQSd2IDp)+}O1>53V`sw' );
define( 'NONCE_KEY',        'pvtE.ci]rvC8lQ9]~&jk(3m oCr,e~UX XwjL1va!i>lH=wW((+e2oi(o}tS@@9}' );
define( 'AUTH_SALT',        '|R5bY~= 8mo6fd)aszPvcU_yGc0&x&Tb]yIP?-Db*O)2A-Q<l$#jU,0QCDQu|?Qn' );
define( 'SECURE_AUTH_SALT', 'TWsmKhF77*[!EK0Au~Md}r#tAX0qW):<mYeX@ePzLVMJ,O]HzHKca8S{i]!p{Vt3' );
define( 'LOGGED_IN_SALT',   '+5b,d5k?D^dde(_}6;Px]6_aEbdX1B<:]#cr|jKmFY`3B,RX+9et dn Dj(BI#zT' );
define( 'NONCE_SALT',       'U8D-xo%ReECS41!VZKUg6~5~rUQ (zh2qHN13x32^qCR~hs-:hRAe8*VMR,qY/(M' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
