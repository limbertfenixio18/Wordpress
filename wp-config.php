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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|5Zp% $z%[Vhp}tr-ue%*S]BhjB/p(J 0@ #ke+B-4C$:P5^HpqqSR)_=TxO!=n_' );
define( 'SECURE_AUTH_KEY',  'PaAbrHSg*#Fzu{4%Rg@whrO2pOP%r[*i2Vs6P~6[N$TkW&S(wZRUL&^*bvgl}ZdL' );
define( 'LOGGED_IN_KEY',    ')07*i8KvDqWJr(`U9bMXkRhF;:TC%G|fryNTXb9(]#:ZDo&jP2hTeS>uZ^7@=-9&' );
define( 'NONCE_KEY',        '[Gla1T-vW;(2Ql8p,Q#!I*k}t.B[!-$IWzDcDdyX45V)N&RhMR*M^,3 ^FFl]8lZ' );
define( 'AUTH_SALT',        '_ZPP54t+#*/iPKe I&!kww+Gc(~p7)%Yg;P)Gw2BraR,d%J }*Ca&g+51DeDjPT#' );
define( 'SECURE_AUTH_SALT', ' sXj@4~b71;NQQ(51>a0)=iY-nwTr886^CK[{h !/3qOoojpZe40rE&s;ed6fF!i' );
define( 'LOGGED_IN_SALT',   ':5U]s#vz*!*Dae*uq!2YM{8R/wcU<**o<7u6uiOw$oW:1JM~YczTQ8#)$U R.2!]' );
define( 'NONCE_SALT',       'sEBq>qJ_h,~_Sl%N-{E6$aau#d-C)yENUMnu!8bfqcgH2_FBN>:Y*aK4@ 4o[&Qo' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';