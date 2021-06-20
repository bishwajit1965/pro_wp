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
define( 'DB_NAME', 'pro_wp' );

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
define( 'AUTH_KEY',         'cu#Y^WVUqUYMDU`H[dK|VZ/u>Sr_MPB;y;y%x>tGct_l_j>YSf}&_tjZ^_c>qkdu' );
define( 'SECURE_AUTH_KEY',  ';5B5_E4q3W`sF~W67Ek%pAElRJ4GHJiqv u0_scO#C[`r)#[-45LUhHD`j&c4_uj' );
define( 'LOGGED_IN_KEY',    'x!~L4@J? s_ai0|Ngp?#Bmxn%T4HYHN8rrRd8*hn{p#i_s|0Vw-6Cd+t| //D19c' );
define( 'NONCE_KEY',        '#-c{Jp.jx^F:M,!@X%eM-mDRpZb4k#Io9*MS;BGB kxoXMBzpO5M;jUqQ3YJ&R#K' );
define( 'AUTH_SALT',        '}KTdomXv9AQBki.5-Td,lr`Y<Lw::pxt3c:G:4Oc@2SMza{;bb,v8{v,Gr.0rM|K' );
define( 'SECURE_AUTH_SALT', '$U3^dixtS_}jKPzrV>nsp#fAhP|EJ-w|=M5ODuD%5GjS8;T) #`1J3kEj!Np iGE' );
define( 'LOGGED_IN_SALT',   '4i4fU4|5(ZYgCwq>pz&Pbm9#w>1Q%!LogHfIC7fT<PYC9@dqBpJ#T{5y^nx<B:9:' );
define( 'NONCE_SALT',       ']&%^b sUt(PCO[zEW4r<XkijW,hF4pdd(Cu+u$ ,-SE)bEm(dx:E6*M8]6>(0ae9' );

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
