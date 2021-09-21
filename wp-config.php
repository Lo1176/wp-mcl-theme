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
define( 'DB_NAME', 'mcl_theme' );

/** MySQL database username */
define( 'DB_USER', 'laurentbinder' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M 0|0*]r`m}AAWHe%[+e$gBV^Eq=1PWy}I9SpftmpxiOfR1,!?E;Bv{{V?Z_{{&m' );
define( 'SECURE_AUTH_KEY',  'p0@kEDl{dyvto0x@0;6|aY9gNm3yG_xp)0h[5%dryFMDw{H=EZP&2/Xp>&3oWY^n' );
define( 'LOGGED_IN_KEY',    '{G%I@%xg#R{.IiF7H>Rf80s`kU1veay<g{tWZ4[SFB7Gub4%2(pRU?JKS6;<l!/%' );
define( 'NONCE_KEY',        '}y*G7-c9?*;;n3v;2PiN`{;,jOXgXvJEv>7PZxW+6=(e@ cG*b_bjF;{XM.TE4~&' );
define( 'AUTH_SALT',        '~?M}.h3:{S|LMFFf;yitn>gcLms[FoG*[GgTcKluA]~(+4DD<5e]9>}{V[)%X#;p' );
define( 'SECURE_AUTH_SALT', 'D}~Hc9?dPC]V`s{L8Pj^cL_jWX[HYI,E #~G~1]Y]uP,T>?2Np<@e&}a**vF}]83' );
define( 'LOGGED_IN_SALT',   '3&,TfG1.OH$^lF^[v2rY4s{eTn~MpTMiO|),F:sXZs::aZv<Xei)5BI9^c-n3DfI' );
define( 'NONCE_SALT',       'bOhwhNp[9&j_Vaz6j3&fK(-`U:+!7-v]IDE~P8Ltp{ZrD:lDnA`VN:WDRt>jR3Vj' );

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
