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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sweet_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w.]4d0m!`4C{=hEN!OFxITn1C[Au~_ONK#Q)/Y5(wD7EK+)N!t>aH1/j(:m}3WRD' );
define( 'SECURE_AUTH_KEY',  'D;Up;v=YrohE?pNcdEJY7z#C6a-B(!}3>f$lr7nieXPmfO-qK49c+E.9Ea9Ex[sc' );
define( 'LOGGED_IN_KEY',    '%gmldL7^1A/%[!G6$jq}`Os]@>k(P{ho:E`)n81^$:icD*/)i|O5@:{W.q`B/E{L' );
define( 'NONCE_KEY',        'w)*$BG*TZc(,VmWHox~gAuU*d~j}H1o$w=OByw<R^A[efRZhdO)J[:J+swOJJQd1' );
define( 'AUTH_SALT',        '`;n4$vq-*x,jfA.-=XqHk$;kAK!r=mv|R7I1:4{JEN}YZ$ZZRUw6HN(Qb4?zL3A:' );
define( 'SECURE_AUTH_SALT', '#>;r;rvbQ,KRA8uw2oyi|Y*OyouGWW>X)F-sQLuI+$LzOvuaEck`8.rURcmooFhU' );
define( 'LOGGED_IN_SALT',   '?7K#o/k_UR!;#,MRHp#W pswu>yT$%iGydREQ#S&=4/M),:LVw7VC$9JnBgpBX;4' );
define( 'NONCE_SALT',       '+u-C8p6S&rUae%[S~A7tkL&RJVp7S`@SPA~_K(![-/sw}ce?(MGko,UWRyM^sN2S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
