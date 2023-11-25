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
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'planty' );

/** Database password */
define( 'DB_PASSWORD', '12341234' );

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
define( 'AUTH_KEY',         'P5(uJ`qW}U,&O*gTn)h@mlG/!H:w>j1G&3ee2wvgSTTM^v,<whtn.,mU-TK.th(8' );
define( 'SECURE_AUTH_KEY',  'zLkNp+Yo}jsZIH,>fFwotsgm~1;XSqzM$S$oA<IP6I!D-U<a#gxs(o]wr.q3TFDL' );
define( 'LOGGED_IN_KEY',    '>is$50kSQltg`@`tn=`B/BSb|xnuGO*[6/m7o!T&D;b?v%(rCnB{)0{?&O|:[Tjs' );
define( 'NONCE_KEY',        '<eDP&-obqE0Ur2/sD{(^Vr`Z&41bmpNQ8%G70xO[JHcx[`Xe%fu_b s};Dg !xFl' );
define( 'AUTH_SALT',        '4J5AONKCe0:{IN@+2bwu2S6B9vwz.gX2czSsCl$^bpQH!^N}2Ekt.nu?VOz}Wvq:' );
define( 'SECURE_AUTH_SALT', '+)ZDi:2|WB(L`fypVj#%iv9Cf%zs|X{qqFS+@nqx;-?]4XR%%i*]*kxHOWA4a^yI' );
define( 'LOGGED_IN_SALT',   '`TkFnpIo~|+TKgbm[KKd.E-YXn}zoH#I^kC5A;+[O4SIn9lXGatUE&eT8Sd}iZDr' );
define( 'NONCE_SALT',       'g]pN]d&$A3><*<42q)Jaw[nHrq~gbr2>U78`&yA^Tir5]2,hn26_L0[!+lyW+j*|' );

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
