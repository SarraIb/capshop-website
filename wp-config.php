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
define( 'DB_NAME', 'cap-shop' );

/** Database username */
define( 'DB_USER', 'cap-shop' );

/** Database password */
define( 'DB_PASSWORD', 'cap-shop' );

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
define( 'AUTH_KEY',         'b:@GY^i:J(-[ZFCL=z<:$FT+4U#Gft(k+`{U<xR8X(MD p2oU!i%$|gV2y`=yVli' );
define( 'SECURE_AUTH_KEY',  'Lm@nx@mZ.L`KQX-0R9@HNQM<Rfxj9jXL#VcB~eMKd0vE%]tT3^~9f7,~ sB3X_uw' );
define( 'LOGGED_IN_KEY',    '%a{VKH%zD]SdBebt 7uQfWt6fo!P{H,~rzp)0cnGuIPFuS4m-4-y}i?`2f6AdcSP' );
define( 'NONCE_KEY',        'e,zn7U9R?(<7N$|;]rimN?u~~bl>81$5=PxuTqdqCUg`6`bP2KVm1xk6ws*.twf,' );
define( 'AUTH_SALT',        '87kxJ8azp~ ,2%C8VJu_V+bmG7O+Mwk,QF}$:X!c%sJ$Rf4F<E5#zU4KSU@h@H^T' );
define( 'SECURE_AUTH_SALT', 's}v`]TLT<1OZ~xx|A1kb#=6k=mO5l8*E(fX!rQg1k_kobUp[GB#9hxdJp(?h.=._' );
define( 'LOGGED_IN_SALT',   'eGk{./veBYSU/l|- 8KSLM)D^#e2U|FwCQS`%}|Dq5:F]ixW_$fo)UHX,qV5^Rs{' );
define( 'NONCE_SALT',       '; 3#u@{1L&OCf2KXqF2MJQ1A&`pATjy_+A,F{Fe,G%),6 l1[j4VE4>t0crP*$.3' );

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
