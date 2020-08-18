<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'a:[?RNo7)J0S*D9#?-dO4;u8N|8{@[&fS%`h>p}7r.H.BT|$r<p#*,Vd^[;B^)M;' );
define( 'SECURE_AUTH_KEY',   'd0&%WpyV[=.#zym~a?jYTMDSz)p<-OSi_V*~?yYaP4!rJ}1jj9!cwVBNuFgPLkcJ' );
define( 'LOGGED_IN_KEY',     'Vk%T6K5&|)wGLz4,,Ockgb5w*;Kz(yN@]3+j7Ha!z}^I7~#Y|@(B(f=N*K[12XY}' );
define( 'NONCE_KEY',         '8hqlLid%g)626Yh}gky(@{Frxin}1[.ob{Tr?]oAr1ykZ pL#)ow{<CE7{UV~Tug' );
define( 'AUTH_SALT',         'O]zB]I85M2+Ki]rM6^Ea5*9s&23}XS,qf}m-@W~?N@mvRELVm!GQI1x2jGwUH}Mk' );
define( 'SECURE_AUTH_SALT',  ',n>[PJ7n3Q>l>N2,<lAgn.v(jm.^ETmCAJxIl!Sn?PS^vlerlsrlYEuY]Qcy5o+x' );
define( 'LOGGED_IN_SALT',    'B Fl d&pjBlb~}-1.Jo`|7fpoB<`bVk C@0d]%e#HGyyE@LyDHUX5{WJXsN&7bW<' );
define( 'NONCE_SALT',        'PU8FCU;(t<3?CA!!dBb|XNgn<U4J4|/N K0vdFGzs[y!g*;9h,[S9S]B|4DFRQE!' );
define( 'WP_CACHE_KEY_SALT', '=RPi]y]F+MtmYCadI;xFLe=}s+>&&-Loab^-7(8b8euXQSao}2PxUZ:I>.g-/c^Q' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
