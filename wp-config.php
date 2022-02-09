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
define( 'DB_NAME', 'kknew' );

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
define( 'AUTH_KEY',         'twkm<|1Br*D*|3?7q-TYjjx<NVdy<5]Mx$|0,d{btQ49jh-TeWKr+NBQ~l[:;C1t' );
define( 'SECURE_AUTH_KEY',  '8[50:gP +y0d4qaL]<YM`&Gl Ppo<w(D(*l?[bPzMJZ(ud$(j}6 q.E;HvUO8&xe' );
define( 'LOGGED_IN_KEY',    'nF&AD1[U@O}<T{uG]R~tr`|@18l86Ks*%fSFo0WgTABKUsJ+1??X5DyG!:Z@G#u`' );
define( 'NONCE_KEY',        ':4|jSV7jIKm~g{ZH^,!5b;>;#lh!cor85 q>k}A5j8L>_J5+ltK8d0Csm8Y1.$%X' );
define( 'AUTH_SALT',        '*H+T$i0xh;e(9~DJ:p]:y02TOU7 TZL&L9r6Hj#- W~b6./4D13ThFu0I+.]BNz(' );
define( 'SECURE_AUTH_SALT', 'aj.0OnG_>!=E7brM9X1%H^(~}[KhdZ.88y6 v$-w4@GJg%ge*1rGRcoQlN|VJ-[I' );
define( 'LOGGED_IN_SALT',   'LRN*%?ZjVd/Pe6@$>;OEQ_dp2eD2=d[1iSv:?VdG}RILN21Q6[*W^=v7`P(K7Zm;' );
define( 'NONCE_SALT',       'C8Sp7;)hPBPZci `?N5,HlPB,`W&#.$).Mo%kcxvar;!U{4o-,W>WTy4=8X):o^2' );

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
