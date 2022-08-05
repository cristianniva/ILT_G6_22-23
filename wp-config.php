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
define( 'DB_NAME', 'ILT' );

/** Database username */
define( 'DB_USER', 'mamp' );

/** Database password */
define( 'DB_PASSWORD', '0000' );

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
define('AUTH_KEY',         'J6$H26m%T7jr0p3H!VSn,UNq[}[ AZ)ZBEVaj3D9~rY9@4jO .wx@sZbiiQL(-[r');
define('SECURE_AUTH_KEY',  '6vXkU0i+nBf&vM,o:pey,R{2{r|t:R4+DV[xz56,^~796)Fda8cZ4cxt}tWm!4B-');
define('LOGGED_IN_KEY',    'WLSLU]I)-?=v=#;,*&$wnanRgp8X?$jaF)fKNzwXY)gw$YRKHMP;O8f>8a!X,W>.');
define('NONCE_KEY',        'Hl&2km OX6b7*RWysJn%A]+rSf2M+hH~)b|)7f^@bmCGfoEz<|_q]?@Hh1}HBha6');
define('AUTH_SALT',        '_eBi g1Sr0[A,!irL]c1Fu1FHPkU2^T[&F 2p8a4+-Q8tb?@nU(Ob<qB2vj}#Ff-');
define('SECURE_AUTH_SALT', '+lv#9~_:R*e=TJKc|_(sJ0/:sC6;g^=(p+*+t5&~b<{]jSdk#JM:M$PxJ-Af~I+3');
define('LOGGED_IN_SALT',   'y:E//*AWNfXT:T<+@%zu6/=o%,.xgt&j|1Y-6l*%5A#6,;T+CA+;2G||qN#=0p2A');
define('NONCE_SALT',       ',$(s-lY@qIV+_GK}GZ NjGCnj{ aL-[S_idliul_R6PEBk[h~U3= gT=:G23>m5M');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
// $table_prefix = 'c6Xza#$_80320a7025_';

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
