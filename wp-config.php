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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         '`4>0M&a#D?FOq$3G94V(b0DZhQy&QDG+ekQ9>.oGuDAlFb5j}71w}M`1 n;?jin.' );
define( 'SECURE_AUTH_KEY',  'Z6nAE;tGO9v,1-3Ox;v`w4Pqj=&b8z8s3oKw_#a94t.!I$FAuT;[r;LnBVJ4|`Oq' );
define( 'LOGGED_IN_KEY',    '}dv[zpAm42S=x:G|16]C*5*a+jFVg5FXITBmlb^WPd22o;m#XkUz_06HZTh9 {al' );
define( 'NONCE_KEY',        '(vcn2-,e;4yMbD@r?!Db#Dr5zMsC=uk~fN#uKz*{a;_j~0C1in$tkb2]]0Xd;Z~q' );
define( 'AUTH_SALT',        ')pNjp$?==9P+Iyp,@dsZV+<JE)OEuev FA<oD6 2ET-WOeuzM}g>t4El7#bMfiY^' );
define( 'SECURE_AUTH_SALT', 'TsRfJbA+?*FTo>JOQNhxsp-]jV.t[^U|vOZ~&A7t#0J:.@s]oi AysqqRWC$7ito' );
define( 'LOGGED_IN_SALT',   '[g8BG:( L#FGQlw1rt8Z@6M K1#@L5mWZ+1;ezx0!=$44c@p]OL.h>rA=o8lXr^n' );
define( 'NONCE_SALT',       'h2%9|Z8[r$vFSNJ2vT Es>j)i$4|Qe1RPQ@L`9SzF;SJ_d2j-Sbg1F$`9*rf,%xr' );

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
