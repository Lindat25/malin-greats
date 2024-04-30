<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'greats' );

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
define( 'AUTH_KEY',         'nQ8`w|PfeH#}B~?G@{}YVO *RzU/Eck{EL^DM2Wn]{:Yn$t|WEDQ7?0z60b`;m6K' );
define( 'SECURE_AUTH_KEY',  'a6QRUqq0($BbcqGc)3#Tz[M]SII/H;ql%BY<VLW+ 9uDVKj](JjwdI)i Cejt#JN' );
define( 'LOGGED_IN_KEY',    'yIGx[.t-b7=JDb9~~w:g8K;VAR<9yYMe!S}AWDN$=E>$G:I@&{6K$A0 6=XD^-DW' );
define( 'NONCE_KEY',        '_E:B%)F,*w_=cXDf7Y21JW7EIT^GA9%o.C@L,Czf3_w5xDw%_u^jlog*e2nNPa>a' );
define( 'AUTH_SALT',        'W5UBx 2`Qr32[Bk(NKuC:HFs8m*^tDVp+%4 JVyyNg3Ll^kHadqfb{Md/|I[iX<n' );
define( 'SECURE_AUTH_SALT', 'Mk(I=@[!O2@6|N;K=by()CqK[E:&++^jPY0a.++rYO@V,K`}{>P$}{H#MuQTm*##' );
define( 'LOGGED_IN_SALT',   '50{SD?<PXH2r%D&*W`t/&ISZ@w:1302#`00 -_MH;%u^Ysn-`+-A~Z6{z=[07!}$' );
define( 'NONCE_SALT',       '2NnJ=>#Q6x$5NQkl]J%iar`)?jvQL^^7f{Kpf2f;@$9/#ip8g1!b3x|b/fA3x+Nr' );

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
