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
define( 'DB_NAME', 'cyberhero_db' );

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
define( 'AUTH_KEY',         '$@ks<C|:TTDE.)M$`mpRx%7Oa><(b^Q@?@(+jUMQNS3v@[^U..x^s=qD:uqX8]b!' );
define( 'SECURE_AUTH_KEY',  '@myxl#X:o!G8L!P$dIc/[#+W~>it;MK/X?B/[*JK^|ie<rMD@n:/@<~{JrDe3moT' );
define( 'LOGGED_IN_KEY',    '|5PY#tp_:s0}t*72V`9F2dp(:=O40@xu=vTJ|h>ZH^x10_6~GX#G4s.wos>r}O~D' );
define( 'NONCE_KEY',        '%,a:9BFBqT6:{L~|njs7uq$7f[E{q1k?Y4L5b:i[4O?@AQix(.EDg{a0C7l*nZ_+' );
define( 'AUTH_SALT',        'o.rpl[TksT;^Ol% Qz;n_4rS6H92&s$!;<Q- /qeD/fxxvxVIs>1XPjW0f]/-kZz' );
define( 'SECURE_AUTH_SALT', '=&r2]b><=&4b} KZuc-g}F6~ea(6i6Ru{rV5ZlV;A=Qm -/ Io+5J<3|?<m].3)e' );
define( 'LOGGED_IN_SALT',   'gG%e*Z1E~G<a 8~_{7nf,s<`LfRM32C7S8/0N>)7!+jAwrkgW7fJITCrAHelm{mr' );
define( 'NONCE_SALT',       'cirLK@G>4z)Za9]XPUm/Ft8j-ae.uNG#Qj4G*3<~# :]h}INgJ_9t{ne#|UvON]-' );

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
