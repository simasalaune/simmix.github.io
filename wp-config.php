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
define( 'AUTH_KEY',         's5mGP,=vxV.8Gf9{fv|C0@P6`g}:uUD$Ts~.!l+rL&.>e&OJ=H0icG@O,t~txTl]' );
define( 'SECURE_AUTH_KEY',  'sLc!hx,*zm+edinOnB4&)oEoHZcSbV#QpsII^|^Sv3.X]~fub5F<H`4i>Cyg<B.B' );
define( 'LOGGED_IN_KEY',    'R9/q!k,}3.0yrDiuc:Km|AMj%_uF~b]sBy_n-!NeGjD/zuDJkC|=3-sV@r5S##J]' );
define( 'NONCE_KEY',        'Q@=ULzOQtVN3a|Y`T}Fbl!fv ,W[>u6+%.}8!Dn`>/PJSi>urH+:Elt!}.dReE!B' );
define( 'AUTH_SALT',        'gh.ZDf0x~Y{KF{jB}X+>ef(@;q<qb$fTX?{wU%Ve1Pz$!N/C}M7.YQIZGq=A>OZv' );
define( 'SECURE_AUTH_SALT', '!p|=5YP=1mngM%Q5}op?jl$F#H@lzKl%WQ05S.,*(pz_sjne+X,K(p(#0MGcvE8I' );
define( 'LOGGED_IN_SALT',   '#N8c]2$=XiwoI6a!ze3Etd#|he+=-o MR}G/w,w_(MG+D<;*d/Kg`{,r|[lr_a=y' );
define( 'NONCE_SALT',       '@6R!0cN ~W*73kj*b.TB2WPzufV!@NJ/<KTBfnp*[,dr,azFtlTgDI5ajPTDTA$T' );

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
