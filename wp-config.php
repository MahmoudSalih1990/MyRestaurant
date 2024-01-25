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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         'e^<NRT-:/hIVh+VXbDIrf,Cq<s$iBs`ujWPTt+XE#d,,Fxgw_-;FZ20$TyDX_ Ly' );
define( 'SECURE_AUTH_KEY',  'uOC7S,0rr8[~F@ZSs*5p??qqacOcKHLem=}{;i5l ,t%%<XUeXV*:=;gTL+9SUI/' );
define( 'LOGGED_IN_KEY',    'A?=6h.iIM7vFIjL&:>sOF+JvFW$aiq(55<8zCw|X3hfLivS>4*dN.SnjZW>o0!8i' );
define( 'NONCE_KEY',        '=PuiFha5}/XZ1SY0a)`pb%L+%xqd?~pG/FD0&%cq&h@F]?llPu,1]kL7*%G `.80' );
define( 'AUTH_SALT',        '4zLW==`IfN,mN`yWq/4b ju-T=2_`BQ&wZ[F.DR?`6E`ir{uHb^y&V:cK!bCY-9?' );
define( 'SECURE_AUTH_SALT', 'SA5GUONqcf;yDNeflkJ9e!^%?H_hPNh?u~[Rfpq9@~QsK}^[Cp<c;~btW/&8(D{g' );
define( 'LOGGED_IN_SALT',   'R<KphD}M{fst,>9qqG-3WE:[41}~.GZP^W=~zW;5rRC{]L*8Ty2kor-`0!(h#DIP' );
define( 'NONCE_SALT',       'suTjtfPlb<o{=/]O8Z@k}a6es`C0d}5|*@p?w?glev{qwm6/G.VbE?RCX}uNl@|@' );

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
