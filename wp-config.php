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
define( 'DB_NAME', 'test_project' );

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
define( 'AUTH_KEY',         'Y-.Ve@-6Y(ZKv9},6(|_aIycl|B,~a?OhhoS?enAEd4txd:iu{;Fm+Lvt5FebN[p' );
define( 'SECURE_AUTH_KEY',  'L.3qn+&vA{dlr[J@$E(==KXHb4S-T_ H9^h[OCb*NyQgrLDuQ#_&X4.#<#uV*~v>' );
define( 'LOGGED_IN_KEY',    'Xam}Fko_]e2k}J)3[ANUKL=}1>pbG;N?}S=6]Z@|7m<Fg}+S?cn1PV-HOafa-i=T' );
define( 'NONCE_KEY',        'wqY(*Y }51S| /D,bMYs*s#X)b=?&R;t&|S8xQLQAElB^@3k^;yzPrH#1x#%lT|.' );
define( 'AUTH_SALT',        '2Pm6i},S=^Gw+>,y^kk_ZfkmLoz7y&|T*Q3IItM?pb`5*A>GS*|P=l9RmXmaLA|c' );
define( 'SECURE_AUTH_SALT', 'hzM9W5sbta]!T.4}rU?BhEs_puOaIUA>X[w?nWbnw i1LhQfl*34;aeJ88>HVk7Q' );
define( 'LOGGED_IN_SALT',   '`G;E!WLWjp-epfY>U>R4kxPC9Of+Kvi=^~ll txPtniJq)/zvP{JYtOO7+#_Q}_4' );
define( 'NONCE_SALT',       '+2|p(!%</@sDvq8@:FbXYlI;AF$NBnR5{~Uf5&w0XfPz=sGSL+!}R!!*A4*@tzG5' );

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
