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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'university' );

/** Database username */
define( 'DB_USER', 'bigyan' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'lE@z{S .)Q4W;U@G59Ld0w*mx53OIShVA2-pmL^Pk4x>9iLp-@y|C7a;OHCAl/*{' );
define( 'SECURE_AUTH_KEY',  '*G9^Q=wW|@DG=1h3G-vtkt(C{.4r1s^jeFX#KdGJy$?I^D;(Y{pOcS[fB|+hcH9J' );
define( 'LOGGED_IN_KEY',    'dcQbh$ct=?HB|aRK=vUNe<rI~K--%?MLUT9M()qGhp[kBK&e14[itl|By[&#{oJK' );
define( 'NONCE_KEY',        'H-s[4(}!^N HBp^tf2Q`R>VPlZSHtnjqc]xLSKCdH-<Gq0goU>F!p_}u&z^YWX)Z' );
define( 'AUTH_SALT',        'i2zU{qxDdgI;|[lW8D@j;-9}azM)x=+b{M`CN}Y#Uk`lM5Mf2<HYsy=z5FRKDy$8' );
define( 'SECURE_AUTH_SALT', 'c^pJP$dJOOFOKrLp9::bJ+L&rR2VqVd!+kIfZ6$fRC&7Z^*N#:o;=@Rn{F-aQ3o[' );
define( 'LOGGED_IN_SALT',   'Z0iuRt8.afV:g(_|XT_yq_RIti{FuGHe%QJ dIi6Xy-Z[FzU[Rz/Y6?_D zT5a;`' );
define( 'NONCE_SALT',       'XrG07@S/Za=>v~ 6I1?gb~OAv ,8q}X&|oI9H:=k6s~j=SDN}M0|?Ha=UJi.1|m7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
