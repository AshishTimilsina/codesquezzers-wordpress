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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'rT01~*f!{X[4wspX W!eJ_p yJ9_IG/CbEjFDB!a.A|7]E&RlfBSPno>At l.3eO' );
define( 'SECURE_AUTH_KEY',  '`f$-#Wo-Z4iG?0b+:1D|v< >8Knx1p<gv0;5UYs$!`H#TJfmPL$(!;qfl :6y%H7' );
define( 'LOGGED_IN_KEY',    'tJ~K?9QFj)D*#s@<XC1S(d_I6r#AL/9eD|2sTB[DqS>Yh|QK-Mh9Id0M9b{!|k. ' );
define( 'NONCE_KEY',        'd(#eT3^P.Nxl<0f87gy7k!w&Nrg *c+wS1@ly`<VKbo pF +zC5,0r_}ctY>, 90' );
define( 'AUTH_SALT',        '&UwBTGj7,T/8$s}g9_^>7{|b:ZnBu{h6eBAKv}b6?q&WhMd_MZmMz_1sVqP-#7#j' );
define( 'SECURE_AUTH_SALT', 'F;c{uM[m9j4zw51i/eEt:|USw&a!4T/ rhT Y.#U2SvF(}XRCCGD?Y|r~![hnj:,' );
define( 'LOGGED_IN_SALT',   's:9qw/JsSj*&Db?J282eGvcH+dK%%xseMpHl|u1[W?OIK0qf(k4;2lm;Lvz?:/+-' );
define( 'NONCE_SALT',       '@[v=s.Bq9[6fXYnuXtNH[PoZKgO4/4H0M,OA,E<,uev)yGC^c``[%=enC+3dbW(0' );

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
