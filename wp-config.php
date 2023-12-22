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
define( 'AUTH_KEY',          '!P/aThiOWVI0fvyAbVJ@m$Fl9#T3mR;uVXfe?C.Tbp0_u$9a9Z91?5!Iu6OX;:1C' );
define( 'SECURE_AUTH_KEY',   'h1Ip<nL_br3YB3>hfX~NX=s:|Zgd`7<$k^6V!h,m8uxG7_PyMf4mF;Nxp}qwdj}G' );
define( 'LOGGED_IN_KEY',     'y|!Oj.Ct[[>Sji TT0BR:]mD8?3#,amfg.Z_b ,Swrj&#LiWdaeH>.k[_<=U|LN?' );
define( 'NONCE_KEY',         ':8s$`=#y_Nq[m|k$qn?Q$gZUc1{ITH1X(rGR|<LDN?yI^RMwA7^q@BpYUZ|xfPO)' );
define( 'AUTH_SALT',         ')by_1Bzt|^(W2;|!nD}wK f=9Y^>rHv#V^2hxR$c|N!$p8^:,VK9H&ugE&f7l*P(' );
define( 'SECURE_AUTH_SALT',  'n=4jdoh:-&Mly]sbRW -!MNDy#^z,6|:iQ*Mq](?dQ6jdd_)t%06uhXmpborLI6l' );
define( 'LOGGED_IN_SALT',    '/e3~7iud;~vk)w(u7j[#tl+b#<V%-g>g&dx}3@]`%e?=VT0Qj66FY G@J(F]4VD@' );
define( 'NONCE_SALT',        'pye|b}= uA4q>.|7_lL%F2t~G-r=<D/Pz3QyY#_55n=(H)N7p2C<U{;ex#O!X=T&' );
define( 'WP_CACHE_KEY_SALT', 'xOWiUd>C!qxvSOtkyyo_7eJb=9:Y5_1F^?UCAj!U0OWJ-?~8~,h6$mU+3sRIo4ly' );


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
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('WP_MEMORY_LIMIT', '512M'); 

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
