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
define( 'DB_NAME', 'wordpress_tut' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'da2?e_/$s~8pic%:Z3o_kn)_XpLbm?mm)l77dG1Ha_T^1aKM*joFk+<sIZnzobfU' );
define( 'SECURE_AUTH_KEY',  'r<w*(#P_N<R[xK`8N+!Cy/Ll+:xo<Y&tN]T:{D/-wiXl./^ww`bZQ6Zl>O9k`l#N' );
define( 'LOGGED_IN_KEY',    '4*dOgsWji,iuq!hm6[&#g;ma>q{^`-OFXcQrGjL`2>Al@GexMigEB2oL%{UM`=bN' );
define( 'NONCE_KEY',        '.zF<ikpwmeg(~9L _4i`uL541llBC3 /MK |%9)>PK+E/fU7h|0*|$|fYJE#W`eL' );
define( 'AUTH_SALT',        'D3Oo55O5pd(xF5$a*b66EJS&&Aha6@!~)|T0hXJII-5TAHMh`h&;dY|*ro Xlo{]' );
define( 'SECURE_AUTH_SALT', '/9l*mCs&oSVhq+fJsrqbFRP-84Ti629`I,rhTilZD(03zL6Z[fiRAl1gWp( L,ap' );
define( 'LOGGED_IN_SALT',   'TN^U+~>kiqNqhNO.p,8Ybv8OD(2F=Uft+[Z~;[!4,mWd>F G.<Voz]:7UV7),hiG' );
define( 'NONCE_SALT',       '+?;X)w$S~R,egI,QCkWPgL}%qL`=!m kcL4Dqr~eGmAK#H!N08.*gTEeIgs}:h>)' );

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
