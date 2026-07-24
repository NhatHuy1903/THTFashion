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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u239154339_NHazO' );

/** Database username */
define( 'DB_USER', 'u239154339_A0K4w' );

/** Database password */
define( 'DB_PASSWORD', 'WPCNrPaPlz' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'hh#0)i91N}vt/X.$1ZfpPi xjP2o3-*C(KUs:*aHa^$iFMI(wI~sq!DDK-67_(&_' );
define( 'SECURE_AUTH_KEY',   'CYtmjaa~3ts,+,KsZ2rs8FiQ0_U&!d 2xXAFP ^8%vgE?Z^(|}e[N{dRwZwX>;av' );
define( 'LOGGED_IN_KEY',     'D1/&>k *Pm@l4|cFKDsV{oMlPEPjp H$%1)*PfA7v*TUET6ZGqmA~da@59mZ|H-f' );
define( 'NONCE_KEY',         'w-P`)!C4mMoJzJu^us|A[3]b18VgdHS[2e^|M31y+[_{qlw(si9^^1#8vZ:vV!}P' );
define( 'AUTH_SALT',         '@%0CF9stF=y$}H7iZp?wUp+!A|EcV/StqA>E[[;ul0/)K/,Qj8v/rU%>b2U6HMKJ' );
define( 'SECURE_AUTH_SALT',  'I?~]Nu-|(MD~p&t5+Y!E}0<)Vq`m)X}&g~G*t]6]t5(bRm82TUC@?19(P)O.KRwL' );
define( 'LOGGED_IN_SALT',    'mLm^2F%|P;MdVP%V#!M!ZuD{VE$Sq5`QVtQ)IB^kzIUnvh{db}Di,,#-fFDrjBYD' );
define( 'NONCE_SALT',        'mx-*]^7b$<=P@7Xu3kxcsPnE^]G7cy|i,W+1Ij[&($g[mL,s}F 7hTm(e7w@1!Z]' );
define( 'WP_CACHE_KEY_SALT', 'tf97bQ! Cc 9,8^STzuI-2l[2<w/G/<,|rZ%#RBe=t2BWPkW= Y)+U+coFqEiOM#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3f40c39b97bc05fd20e176f3985830fe' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
