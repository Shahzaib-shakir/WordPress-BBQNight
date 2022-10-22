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
define( 'DB_NAME', 'bbq_nite' );

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
define( 'AUTH_KEY',         '(^[44qQ&zbt|2)6yW^RD0pBd!tKen_+]r-T5H2 s@koAk7_`i5GdQcJ:ZRVxB,vz' );
define( 'SECURE_AUTH_KEY',  '-qq~p&N-vAM6[R])?|yAZ_Z&..qlmD85D7):wv3qS^pnXvvbz<c%[!TVBa.(0vA=' );
define( 'LOGGED_IN_KEY',    'a1pkt>OG~^^ jc~U-$RC4=J=o@.4QX872oi9<HS-d<}Rz@CTKW]@p3i!+~s?g-U~' );
define( 'NONCE_KEY',        'qyp?>e[RBU|e_m!+K@9BWauVAIe(j~tC[+y;9aY-^QKy/2I$5&{hz%1{Fhdx>K{U' );
define( 'AUTH_SALT',        'hHvQvEr>u>x%}((!%zZ:7cp&_>B7p|/656hakt<bDef;oDj{_fN-j&Tylp%jHbj!' );
define( 'SECURE_AUTH_SALT', 'DNjxt>49oKBwZ6KAj+M.{akR{ wXXO0>)nj{7fI:wf;c`uO@33l{M^({OB5i+4CR' );
define( 'LOGGED_IN_SALT',   ';1}Z?+KF5,3Fec?&wK3PqVZ&aDQ}iNZF2f^-hzakL`4:Fdi?e8b.CRqJjFXCYyX8' );
define( 'NONCE_SALT',       'xQ[>j+V/6s[X)fK3oW]OD/]@8G0#kg^$@ /{drAG>sG_B#ZQ]*>.d5D[f90d$?<R' );

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
