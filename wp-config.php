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
define( 'DB_NAME', 'dbwordpress' );

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
define( 'AUTH_KEY',         '6z 6=Q3$ETB:|coLjl;S|eyIKBp,Hb=:cn=GIXyrZ~GKmL?jF;puTL;>$nh>k<]`' );
define( 'SECURE_AUTH_KEY',  'c*lWZy;+(hW}-b542InSK4!*ybhz^`y`t}Lbt]ah!ke2)ik2Mue=NhQq<<zK/JEh' );
define( 'LOGGED_IN_KEY',    'HUV|c-0x~wrvEZt9(c]h-Rgf,NY2IV`8`UuRT(K)&,E2ZK66W8W)0=gzcNGSv,#{' );
define( 'NONCE_KEY',        '?;|LObSQ9rUdG>u)UL[&MtDa)pi;T5X2:!@TC4SBj)wN%J0qeLo#fovo{@mOHOjx' );
define( 'AUTH_SALT',        'T pC+4mV&?:LC(a@KZAhyP1eWp;;(Nln*hbqG3govGMj]Q8yT&]N|H-{gwOcp|@t' );
define( 'SECURE_AUTH_SALT', '/LJ,:GXNbh#AE/:9zO7j+C]r#U_zXy5_8xn7zdQ/@7bZKU+jofy#WjCL&1r7o, J' );
define( 'LOGGED_IN_SALT',   'YESwM&<_|C52-f;@IYiJW7LaZUF !%bVXHNo_e}x;bZh}_X<G/wvHf,?c}ATA.X9' );
define( 'NONCE_SALT',       'dR+Y4z)rP3nQx[pN_5W3Cf@&wbPV`k?w_7Tv5*9y$YMtc!J}B 6Wm%Kt7(t?^Rcp' );

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
