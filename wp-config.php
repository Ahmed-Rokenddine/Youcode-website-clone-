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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '%2fM)+#a*t6b^5.N(t@Eju]|r,EKQI-mT~yG7/aH,DTp8[m{aB}b*KeQ_Yo;+t[Z' );
define( 'SECURE_AUTH_KEY',  'L}&ME$b(N0q~oAU`3J^|z*Ttu^vQ=ZG_leJ?cHJ?iqQasbh99Zdp(TiyBBY?BXgo' );
define( 'LOGGED_IN_KEY',    '3BX:^rhc~2:JYLaezHN%gN;cZY-&bXWM,)JL;4F)*OU0u:DG[x)d-QTBl:voG_47' );
define( 'NONCE_KEY',        '`YU!w8C5_=;cwTR(J.OI=#{3;Qe)8Mhv#[|cWY=vN{o*.M&Y9YskHXwuZpa$R!e`' );
define( 'AUTH_SALT',        '}gO[*3HAqI8TEe0jYGW|u8tGNV5k,++K6M4G8AX/)Tz%[- A!);A%.)Ejiq)Zv!O' );
define( 'SECURE_AUTH_SALT', 'o@{hyPNG(OVe5KiyR>o4oHq*NU@Td9|I-~{a:W~vI@lasv[0<DzqiNq:tNN(ZpD(' );
define( 'LOGGED_IN_SALT',   'dSi$=)DwQb|T^H3cO@+s%%#<14-?MF=W#2IpdG9MxM`_]eZRzj&oh,rsu|&%]OV(' );
define( 'NONCE_SALT',       '&P,!|O/@Vi4g%!8r=WDK~6-nz7 EV[w=V&<1+z<f01t5jM{01(QgS(5/dom~1SgT' );

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
