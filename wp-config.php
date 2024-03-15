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
define( 'DB_NAME', '83cvrdERGD' );

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
define( 'AUTH_KEY',         ',J34W|ZazRpoxr2LG6/-w@xUN{JA>P))yt`r4VFsu>@Gi;UTaSX24<6<2@rukt0F' );
define( 'SECURE_AUTH_KEY',  's`TC<lPmcpPYe_|gFk}]tC+` RW~@8BK EVrxrW.#VoC_K@G}B{RcV=ysqNVd:<5' );
define( 'LOGGED_IN_KEY',    'S~>!F/6hCeWFc$cGobir@-mu!wRB!Twh?i5PvbekTQH5BQn@|CD$}=`f6W9LO[35' );
define( 'NONCE_KEY',        '>-pf6xNWGqu}II)g=;i7yZX:Sh17IZsH6hq|lTgO!MdJ}2jWB.1WHN^YpHaB1OJb' );
define( 'AUTH_SALT',        '_%k&<%Fz%Ysn@~gTU`K.?7pu8JPU/uhyf%F;P_d}qwb[[r) /ZW{voGRM?S%N32r' );
define( 'SECURE_AUTH_SALT', '`HEs!Zw&r[0Z(_kdWSw6G~Be9?iqk5T;r8cHeqq0:BYzaET0|=h-2cKRf1#bUYq6' );
define( 'LOGGED_IN_SALT',   'yB,*i<#E]7w+M?BLpI5/(HR^O^n#IxH&r9I}X}j;*4D}HO&*!}ZM;t~JSqKA! N5' );
define( 'NONCE_SALT',       'm.>G{&:QY045/=Xo{;%;*tgNr30I-v=j&jb&ItnhY2d|#T2W^x^BCCN9U0aefNx!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rt35o_';

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
