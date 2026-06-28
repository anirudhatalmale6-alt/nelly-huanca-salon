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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_nelly_salon' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'WpSalon2026!' );

/** Database hostname */
define( 'DB_HOST', 'localhost:/tmp/wp_mysql_40532538/socket/mysql.sock' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'KlK}%V^_vW-E-_>#?H=Fzkw(xFQ8-P9HUjn%uXI-WW,Ovlh3-k%_~2?rkN)vUC.z' );
define( 'SECURE_AUTH_KEY',   'Nq`]&H?Fwo-5he3 7A}TDgw^UXnZP MK,pH->[r@hN3]U,{_V0y$;#S=4dK?;;5!' );
define( 'LOGGED_IN_KEY',     '_/8:-,zao=uzoMlGb<x^wA^l-t#!54%5~eum<O?{HcBjfg.x>~=Y$G5 6*7?b!<n' );
define( 'NONCE_KEY',         'C%y y6);`4:3.:F~ ]CW#.v+gE*q>MGL sZ3,E9~7:B_(tRFv(jF+ZgmF>dP4,Zv' );
define( 'AUTH_SALT',         'qr2lP!k4C?m pW[tVbY-]ba`>g,/8!_>}u4c: })2&dGC36}NW(+17)H 9O@s?mY' );
define( 'SECURE_AUTH_SALT',  '-&|^ykb{R9jibX9u Lkz{Dks+LI#&@%K-:vndtOzfdEKTzRrad,^CK4M^c)r//fP' );
define( 'LOGGED_IN_SALT',    'Ynp!H,0#(L?H9Y$GIB^>3-3[#K5RsI]0K&XX{>slYI-}KQ`9<262Jp278I2M:F]Z' );
define( 'NONCE_SALT',        'KZ7Pd+9(&S%~ 6P8@Wo*m8G[-GzCVo(&6x`bxm6f?N$v7P`n9%v]*R`fq?g;R7l5' );
define( 'WP_CACHE_KEY_SALT', 'W+8dUTg}U*343M.s+9TZ.BsnCq[Bw~}Y<.&dSt{&k*-uM|?y}P@VU3VSc vBP|f5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
