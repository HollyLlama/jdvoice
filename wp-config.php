<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jdvoice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|>km6xmIZz#Hhivc$9@]+GoGRye}$Jyw8w?vdNdA8Mf%~RqQlz %$O^*hUlfq!56' );
define( 'SECURE_AUTH_KEY',  'up5q8Ib*9go^eD3vi(k0~14sL=iP=z.=ZazhfSYK10mF,ETGWm5R(:je4v^Z,=V^' );
define( 'LOGGED_IN_KEY',    'C|.qi6D]pj26tGBX$W{ZG+2_C~AxhxRS*iOQT}lL?s[i H}~I`^!{b2h% ~/`}pC' );
define( 'NONCE_KEY',        '.C2*vb sPj}A]Ra6rQ{2gKgULNRtSe(D0dQ#<}i;p5-}-)Yn*gi>h[G}Ym4a:Q_#' );
define( 'AUTH_SALT',        '4p9?aeJ}fVJ!Q,B/tc0[+vlQt,WRyXX;,r]jt3{A]D~nCqgM]*-CI?bWst(_I.;g' );
define( 'SECURE_AUTH_SALT', 's8PNTn<YMBgUE}R#U<k=lQBF>>(E1($%KHam8*mER{a,!.UEFig#G|m(A7=w(zV/' );
define( 'LOGGED_IN_SALT',   'L7{x@:;-Q<~eaWC1@LK7T*m!eZQf 7|snc5aNd!( 4QJB,roYd;RpCn}C5LNBm~B' );
define( 'NONCE_SALT',       'osv0lqaY/v Vj# Yg.Z!6gFf]LiNJ2 Q9;uWG`*YN[kTxA%|ID]p0/xYSV*m YN[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
