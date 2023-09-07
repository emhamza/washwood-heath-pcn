<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u863620173_CA8kx' );

/** Database username */
define( 'DB_USER', 'u863620173_h8j3d' );

/** Database password */
define( 'DB_PASSWORD', 'zKfSZ8ZVyT' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')KIBEP,flAX}.W1{S5(YO6Bj`o=)dM),i!|v<3J~[F9A&pcA#6*3G5gPCCqJBPS1' );
define( 'SECURE_AUTH_KEY',   '%oXvc?;MP=+%lP=LFzpW@;Z%{qOHSz0?&p6FDpqHE;]J}4%@:>%Q#84R{Y^<4Bn=' );
define( 'LOGGED_IN_KEY',     '}V<<0HD?osE1scenb%,MHIABV1DU@Xdsr{9(p+Gc( ||dJ1/9Q)dF]f!uRFU,n~(' );
define( 'NONCE_KEY',         'Z#N!~}r~Ma+%w.#$cZ_?vd{U7c^`k.&l8`+hj/#b&!U=bM.$Ec!ZHh<l`Qx@~5VF' );
define( 'AUTH_SALT',         'O1gq#r/ ?,hGl8D!k`Ge%}&t^|n<sjI~/<z3m_1D?^E@{;g@1&3j#z&n77sNgZih' );
define( 'SECURE_AUTH_SALT',  'a<d8,uBqjs%8;9G4ASlP@_`W3Dww}N;a_NgZe0eoPj ;umz_jmyaXp5wHQ3C|z25' );
define( 'LOGGED_IN_SALT',    'A`??Xp=lLpC+ RvHG>0-5_L?3om=q0=@sEnv5L$)NVB8sr@Q%uS!TkqGI`ka5{o[' );
define( 'NONCE_SALT',        'rL%H/8CQW)em;ngSJ!xhxW3}(i@GLD}GEjRuh<3R![RG4R;gw0{?.h{8H,;<t;C.' );
define( 'WP_CACHE_KEY_SALT', 'U3^0Fg80G+v[JX(ypV UxW}F[,LDO(R&nVtyI^-#T1bB/qkl{x(dSk:Dx7Ce]2PO' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
