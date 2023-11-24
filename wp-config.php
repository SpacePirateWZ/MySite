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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '&*pb9V.QwN(Su]!' );

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
define( 'AUTH_KEY',         'w _9;M6/ofpVx}+hRw}RVwf~@1/?s*)tV[nH,Wa$!s]XBfI(VHmv>3obAi#Zr#cA' );
define( 'SECURE_AUTH_KEY',  '_qk+cMAw?}|-_*Na%ib>gebq44xb$uVXgJd{FLZs}e!-9:ngGpj 6~s^52ef3+jl' );
define( 'LOGGED_IN_KEY',    '-Sh{)J9_FH[8v};v!$8Q-/8{T.~I_K9mZi<+c`4O2(r2=s`/],Tdp{{|g=r5k~&t' );
define( 'NONCE_KEY',        ' `qxLz=c?!7H)Q;?Fz+zs@6>:{UFI3FP_.x@W1*a}bl~f(5efhhHuF[><.0~11BU' );
define( 'AUTH_SALT',        '7xL#:zA?2M9V&(2UK`Y9l9!(oz|d?W?;zEonWX{tc:uR}%:ny93K8s-tqBMI9=cy' );
define( 'SECURE_AUTH_SALT', 'TP<x0vrjj?a8a:7  WY![VBe=v^omRBiZmt_vReBq:xF#9:uR[UA9ZRy&b(+ 3FT' );
define( 'LOGGED_IN_SALT',   '-Du-L&#,AFHdgIq_^0_b/ibKv5VHNg1.Z< ,o|JDdBYXMqxH>jny|fZ.26ygJ7+M' );
define( 'NONCE_SALT',       'OR-/pgl~Wuf`o=EA<R|9h51w?>ut|,c%cs?dEjOD[^2+ONU%mTOANx<{qh9<kI:;' );

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
