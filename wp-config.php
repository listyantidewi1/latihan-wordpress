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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'xn#lS)|d/N*:^uUEq{OrBBIpQ6jKb.%(sOdS)YV#2DGf&-`bHa;sH^?al,[n5Rm:' );
define( 'SECURE_AUTH_KEY',  'g>2q>v{Ujt{z;<4sd,@PWrLY{2P$ksAY`{fd&3cA7$dG^gkIR:cW-fY2+5zg4|3x' );
define( 'LOGGED_IN_KEY',    't+yF|q&(|E(lXx{Z#l*(eI~d[lwbziAk+Y E8TsGF):la{!3P:wWuSHjGFX9*s=j' );
define( 'NONCE_KEY',        'WlrN*x.=1>dh(]T$gpc1QNkl-*wnzP_if;(?$1(I)mak8M>)~fKMAKcTNcN2*#Cq' );
define( 'AUTH_SALT',        'ow?ib^g_(?Is2~292drt-<%euRnbTpIgp4+E]/&JOL7.0j.4uIV,n|Ryen2-Whs.' );
define( 'SECURE_AUTH_SALT', 'MQK{c*yaF?_(k+I{80IT`UBq]P!_w=BH#!|3GPQm+-ioXFdYRCJm&AUf/eJV%(%L' );
define( 'LOGGED_IN_SALT',   'P]3f~ff0cK /3ujZZJM}D_A,EuV9tm83q%0L4ze!`)0?|ItZ;eV! 2fg3?u0kibN' );
define( 'NONCE_SALT',       '}l=BG@2Rg>X#WzXjjcd-] >a%j+oqE0#aoj/lG{EixSRjI@Me0@E|Yd@_rnT#k<,' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
