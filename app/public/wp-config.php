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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ee(E/,5Jwo=31$]YLdmt{y#B5z N,hQ){L&TTcf%gv.@o8X$:#,qG[q<$q4)#+X-' );
define( 'SECURE_AUTH_KEY',   'j0-uvcAWeU;3mXDj<&a,xoq9KcLIfx,]JtNy,Y[6?X3:a0(lx6r#.7AG70qs&@a$' );
define( 'LOGGED_IN_KEY',     ')7|nSW5dd?`6+XE`;J2i4(8K-H;c mS2ILEgAGILV|b#BES%kMRs>yC+qWo{]pp.' );
define( 'NONCE_KEY',         '(/!3z1.>5fcRa%f5SVh5j;1ndda|~Qpcap-u@UJ<CR<[ H7`g%cc<V~WAQeIH)<[' );
define( 'AUTH_SALT',         '7dqW/rfV7nnTmS83u!Gni!VtM[(k.Bsf.bum=O?Wr(oKW<9}6Y3Da=S!:fU@-a?=' );
define( 'SECURE_AUTH_SALT',  '^{<:rd.3uf^aqP:}$E3P+:`v%L;./,g/8{ceekWayR9jDyV%*D=CwlTQX^>+NGeu' );
define( 'LOGGED_IN_SALT',    '&Zo:AGg:adxU$iQ~NeSCQtd`B~>3nE6x-jn{iOC|=G<{[[U#Iuw%G;~Yh.8}i*#M' );
define( 'NONCE_SALT',        '[&7;a=tT5ItYI6De3[~kFo6Ja.UMa4.Y.N>3:!nX+&.n(1,E[0~f^CZ,/<.5Va;a' );
define( 'WP_CACHE_KEY_SALT', 'l@n,3j*-d2bcD{g/1z 1pT<V*MR&=y[.uJt(%=S& fC(>@V2S6|7Mi`@NYF[vE,S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
