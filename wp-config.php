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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'usqfyvqh_wp_jeqo5' );

/** Database username */
define( 'DB_USER', 'usqfyvqh_wp_6z3he' );

/** Database password */
define( 'DB_PASSWORD', '9b1n?gmJY!9rqx@8' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'bG4&wMXOc)MB*2P!0HFBj2l+6#ik2s8+JP#JKPavE)g%l+DXK_6;/5CLHTH@6p[Z');
define('SECURE_AUTH_KEY', 'Z@RP#-O_W+7fkb]Z&;5%*bD+8q*@&zYnZ4Mk%4[r68K1Q+_U~|y7[8#d5e%HH_Sm');
define('LOGGED_IN_KEY', ';3)[*Y%+5o/u[5*f9kCuv:j3DAUs3+2U;bL;Li0|3q7_r7+M#B!CBvW%4(5WA-C/');
define('NONCE_KEY', '&a+1~t0Uq5]5t(1dHy85A|vE5**Qiz0FO+(0q:v7Z/TydN4r1iM8x(ekB9*[3[7E');
define('AUTH_SALT', '*/%fVFM]*1[o/:S2F78j&@6iGd6l[A;&8[-:U|0/MdX-ro&67:zfC:c7(+6[(~5%');
define('SECURE_AUTH_SALT', 'jl@2R1q!u7#09581K1%9A712Px8)k0D0hV@0;GI@9UcX&1Ny1jG4Uf@vI[o!%UZ2');
define('LOGGED_IN_SALT', '1u310s&_995K@5m0#8I2KkD&27_06_x;azdp](F62*|S_1i0#3n8pm914[9ieK%V');
define('NONCE_SALT', '%m51_25|@1VL3F_U;U+2hT8a]4@e:oV23v%*0202Nx+ueG0V7f]5L3YJ6+iI|DlV');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qqRBoYb_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
