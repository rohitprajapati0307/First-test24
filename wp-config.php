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
define( 'DB_NAME', 'first24_db' );

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
define( 'AUTH_KEY',         'gxw<d;5R}]N|igo$[7~W+p,K|Uc7tmex7r.R* JmB%&MKpv:Ad<si=!8_bL[jzZ ' );
define( 'SECURE_AUTH_KEY',  '0*sQ:cKj4(Ntjx+-LVV(N;+I)X82p~f[Uo_r;>$+BEj RD6fx>HxLP5<!L{@$xR{' );
define( 'LOGGED_IN_KEY',    '}! KhO^OL9yWeW7`uvUCN}gZGBf  7;V}+?`VVsQep[iaV.Uh4&pHpgF x2Gp6xh' );
define( 'NONCE_KEY',        'J[v=h>QRfuoN>zIc%CgL@a[j=UpUsb`BY&3mYS:iT;qhz2!T1TVr3K[xM@5nY&p:' );
define( 'AUTH_SALT',        '*<$o;wQ+0JwT4;a^(`1h`d|>pCwK|sdGgo!zjPa8|?GP~}p-%/Zx]b;8q:LSX>gY' );
define( 'SECURE_AUTH_SALT', '.e!8&Vtq416J^86iuzP_G~=&3i& 5L3a)As?jVT0$o1K/s45kZ@6aJZhwFhcvn,<' );
define( 'LOGGED_IN_SALT',   '}kXCs~kgV?Mao/{JF+>`u{cnP!uY.e ~ $Yf=ge3E;}x*ahgRI5=e[>I%/lRlMRj' );
define( 'NONCE_SALT',       'M_O-AELp}eLF@_22?*^wy~2mA@H;q7*+f~RzA^y%`eL+|8ygDT8?Qo^M1:{,xoKB' );

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
