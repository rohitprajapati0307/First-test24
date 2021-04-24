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
define( 'DB_NAME', 'first_db' );

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
define( 'AUTH_KEY',         'NWx=G+Eq!?(C!xTb4vT;lY}6NEJif#C:=_0Q2zqQ&sX?b~b?0`G_{tVP|_*_Dg:M' );
define( 'SECURE_AUTH_KEY',  '~9O,usxa+% nQ_OP<E^iX@ _3/dFL6jwi{2f5dh$M[svBhm C=b5+*.ApA8A@Lou' );
define( 'LOGGED_IN_KEY',    '9aM,b-*.-Wqx#kZ}f{|6_H9NIjo?-^WuuLX:{M1ldfo[I+Fl|Fj#*n|sKy;seYC[' );
define( 'NONCE_KEY',        'X&WU<]_x1 DL/M}Mtdk~vCPR3m: w(^ckaqpOwzYkNwm[]x llhAJ|t{]J8Wf:3<' );
define( 'AUTH_SALT',        'Cpsumk<GxZI6rUMM7gx#B>[o 6H;/_*>=#7g}}VJ8kK=&W_hi#*DxVCo!$v-?f%<' );
define( 'SECURE_AUTH_SALT', 'N=pi})?qH4iGu]i!kQE V@3_1f]<T.@ZHN9l1LM^(>~FG{aC##P6C[(o7W<g2J<;' );
define( 'LOGGED_IN_SALT',   'T<d(QSGzma.dATd5vd^~|&S_H`5G##^$pSD5WPu?<01AX)>StWHvGX>>|;L~eVV3' );
define( 'NONCE_SALT',       'Gj^n/$c-@SMnZ&/$pwK{Ajj2v:iwFy!g1-Zwdvi-s<ktv+X4,mk`R#x6% 2Cg`Z?' );

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
