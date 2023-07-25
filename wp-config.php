<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'stepdovo_women-gamers-db' );

/** Database username */
define( 'DB_USER', 'stepdovo_women-gamers-user' );

/** Database password */
define( 'DB_PASSWORD', 'hdsO$MsWRO34' );

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
define( 'AUTH_KEY',         'bZCC#<l{GC%{D]v_d))wy+YK;}~3^[BJV7qkageS@||WX(ULF^GfLT2#Hp_hWz,q' );
define( 'SECURE_AUTH_KEY',  '~I/>[aO>HadT>!%uGOw)=G|mvAKK4lGLc_N3SK=0:y!/[d71zFhz|Wg-_zN}1sO ' );
define( 'LOGGED_IN_KEY',    'b0$2)y`BZ{_9oS)(gU=9iNlLSw)^da99qXM]Ai8jO-qwu}yD-*31z[[LSmoEpdId' );
define( 'NONCE_KEY',        '^`N}q&Ox4astL Di:+p2$?i?fwe.Gm/83d[B~yv>P6|g)FnhrO8gPx{j_?fCKEV$' );
define( 'AUTH_SALT',        '#QB(MS_{V2~qTpV3o*HcyAn^f3=&yDuEG?r-5.N]GrKteyr64ZklRqb] Q4`v88x' );
define( 'SECURE_AUTH_SALT', '}3P,}G;Ov4N18c <W_S;Sc/C(5Ag=;v^uB.Yg{.]bMyM[@adM_?3Ina.tRc|&;r#' );
define( 'LOGGED_IN_SALT',   'j%Pj14]&j_t~b}y#zI+o:){(5.^X/}PcVT5_?kceXk4T+@` ;Yx6:c/~[G]x>v7g' );
define( 'NONCE_SALT',       'ZvqYzGiLP,POY)`<4>:V.bcLwAKdv`t])&nT-8!BV`AlKDpd@7>RJ$i4 *a?yUTB' );

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



