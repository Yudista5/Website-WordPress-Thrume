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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thrume' );

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
define( 'AUTH_KEY',         '<MMz%i7~5T7,cHuRx]P>*]Q|}-Z00q_t;P5J|?T&Vox%MKSfu kN!g*o/-6ZLFMH' );
define( 'SECURE_AUTH_KEY',  'zK)pE!H6f*UTp5|SLS$ax>kN<La#Ib@-.*u]>~dcr%y`daku)GZDuL6M$+:O$<<B' );
define( 'LOGGED_IN_KEY',    'o|jEGFNA{w_:qkQ|r^;/WZ%1d[b`Jk jCN9Ke3Q>_ILy)r;MLHj:vMb+HaV.9-7{' );
define( 'NONCE_KEY',        'hX[P^`=<ZFVu4$mhH/9%1hmkXw1iqmTLZ(Xnt#j~*80dbmDNu7FK(hiGQ#Xs,54&' );
define( 'AUTH_SALT',        '-fSVpdp]G&_URB9^GqIt@3&Q(s ;E >>i[#Sm,RZu<~w/ i%z%4(876%mq`gMQ8p' );
define( 'SECURE_AUTH_SALT', ';aUx!Ut:V/y:L+oO9|l=r$XUu:3yQToOiF3[FFYzno@._sn7$^zfxxf@x^UBKAoT' );
define( 'LOGGED_IN_SALT',   'lS} I_ xe1cjo=nQyY(JfXqzTT)7zl20]%]=PU;Z1P[P%:kkc;ra6xQ Wt5,raZ@' );
define( 'NONCE_SALT',       'sl1_l![.<{lC7bBJ:| [B3K~k]BIS`q~GS(!x!~_({7c/b,7|)t_Jk*f,GsZ`I#l' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
