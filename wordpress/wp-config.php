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
define( 'DB_NAME', '7ZPDlmrB0z' );

/** MySQL database username */
define( 'DB_USER', '7ZPDlmrB0z' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xxibLfftTP' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com:3306' );

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
define( 'AUTH_KEY',         'HbCY!yN^#YCVR|A3yGBSl^%W6sfQ;wegGhY#Ey1UNc1Jj|T/@$ea^p#G/,.jyJRL' );
define( 'SECURE_AUTH_KEY',  'xTzNij,G;Y0JQ>9Brxv11wwXRL*4)S[K@UfP$s-=6_:s%Oiv[1ke`2`hpS?~p.f>' );
define( 'LOGGED_IN_KEY',    'h&)i&YYT|T]1]*yBu]2uX?HJF.dCW&>Knfzoc?+<MB2kEjGP:n.T._<d!t}xP@Wz' );
define( 'NONCE_KEY',        'qYgtA}*hR0K uS60s&u6;iGr)|6Nn0%3?lI0@:S> kqjA0afLgy2UtA$|y83-17>' );
define( 'AUTH_SALT',        ',}/|:Km89H[2}Z%^- fZ}U$#xDvfe7%`%~c%T50;fj5NR0y6R!X3H[E;ZztK&Vc)' );
define( 'SECURE_AUTH_SALT', 'o/;{sar1]M9zg9S(ve?S5eb`#._`Gqg2HnUi@x,0lNv)N3$Nsq-GIw`<E<:^)Tb>' );
define( 'LOGGED_IN_SALT',   'ZAg4Q=,Tk&}IYi(.GEU2`F ZAQS]+cfS]d#aMsf4W1EK^ll;~j![y_9>r>iZsCLB' );
define( 'NONCE_SALT',       'dtp.yF|i%H<`.GPb1tt`ed`}Wnalr0Z[QsYZ:a-2oln3=:>t*;ohwTRQ5Xi~hCj8' );

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
