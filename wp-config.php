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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ieet' );

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
define( 'AUTH_KEY',         'R]ME;=giU{f$;iwS)&YEgvi[pQ@${`W] 75_CwNT=oIY DYy=<kTvR:e7K,TZq9#' );
define( 'SECURE_AUTH_KEY',  '#`sfPVocvXW=aDG/L Km!Bm,@w,<F9amj|`-8RX&-[:ASpt<nbee5g_s?_>x$0y1' );
define( 'LOGGED_IN_KEY',    '=UxuSF`XHc625cKM`.lX]0HUFUH{Pj[vkI(bsJFX%!Y3),eqQT+R2}L0 *0]r&AN' );
define( 'NONCE_KEY',        'lr#.gEvm<rSE]~!qQ/KEVpf@pM$%s+UEY7tYUu9<#PFhVD/+:bqSXAvPe$unf!rV' );
define( 'AUTH_SALT',        '.+HE^3_te2pG`>.^dl]`+K?*<u[S!*La2y{~obP,sHRvw(_^C~)gKXkx_[.@5#5t' );
define( 'SECURE_AUTH_SALT', 'y0DU1K=n& [xb&~}sjD^{(WmPN5H,zeJyeA n$.tDpa3FmClUkSqBK0:@~Np0%9h' );
define( 'LOGGED_IN_SALT',   'yIHmk-d&`BcZJN)u]vr&Q`.EgAI94n?x*sX5.^Vh<:jg_J/3Rs^Mu)Q/wI9m!p0=' );
define( 'NONCE_SALT',       'u!;5;eVoJy?OvLC]}H}9sv:Wa9]-jJ}@3>=<s6,Gf#87{WAot D~*]O0F!JA7qd<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ieet_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
