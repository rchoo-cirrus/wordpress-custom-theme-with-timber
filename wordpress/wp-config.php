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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'E*ggS*/,4%0SoSwtt>50rl$/2:z{)c:A*{XKC{3O<PrIR(!~BzVn.3]>U+AF[&)=' );
define( 'SECURE_AUTH_KEY',  'Jb* f(by]qj0y/!+0RqdR0Ola|2*6.y&4p?duNV8J3Up.Su@y1726ILZ/54he;3*' );
define( 'LOGGED_IN_KEY',    '8&~/g$n-F-dbejLW//12HX~/XL|{mla[GdKApR jWCj}KYekyJ:VqzVZZmJ X+uz' );
define( 'NONCE_KEY',        'H:<qJ#&q1 m=#cz0.G?vz5=j,%~:B)7Hn&OBUu !s-c)F]kSX/>9Ce-9]oyif?]F' );
define( 'AUTH_SALT',        'd`&A|jp?L7^$+YP2N:Tl$XU &L>]#EB?ML${msGRF4RSfNVN)kM15*2jj{K]=~!{' );
define( 'SECURE_AUTH_SALT', 'Y* 6Z@5&s<zlf7U:go505i{EiYARbgXI4B7X*=[!%Y=056guTL4/4-1k,U7yO_%_' );
define( 'LOGGED_IN_SALT',   'nokoI-pfjB}r;Xy8K 20[8 ^ir{Of2=9_T{s62[RM9-GHcPI-jO.IO 7r^RF<D`S' );
define( 'NONCE_SALT',       '1/]Ct[I}Pl)bA9qp/s*=6SMzJpP*~eC4|)V|N!R4s2tFNVmm~`|ZlQv$u:;fA`(A' );

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
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';