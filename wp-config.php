<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'strop' );

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
define( 'AUTH_KEY',         '5roc1PkbY:7k3Ez3oKj7,eMWPUXm-S8J=-0qC/EM#=1ZEB>|y2]KR4A6Knjg]>S<' );
define( 'SECURE_AUTH_KEY',  'xA;A;sIrReF sZe@CDCa7qoua,%$Alc~M:s*_O~Q>~}P(hmyX3xl<ZQbV?p89Fn-' );
define( 'LOGGED_IN_KEY',    ' zs-Oy.X6TMkayxo^yj@Bche`uI`dj`9RY6F43{,mQg2!B3k!U7(N,Jwv9ap4FGw' );
define( 'NONCE_KEY',        '!|y?LP}5_eb,/g{l>bJ{`*F+r1r,-@XxUb}#jp*;Smvj#uf6QR)9JKg-`YCFM4$%' );
define( 'AUTH_SALT',        '*0|FK`; 0]`z/vTyOlxy?L5I% )4o7*~_lB)WvG1tpkgMOq9T?Uz0??wVHTr. h(' );
define( 'SECURE_AUTH_SALT', '7R&qGv}zR?H[N>0c{(14y uH3 da!Z_j/sRJSeiw-_m=1FBI_LKC1.b2cpc0:O7?' );
define( 'LOGGED_IN_SALT',   'F6|+R_jcH2RDtlyDs:KlE]onho7zI#Ks3d#?4k{#t+4/J+QWyCyc-<<f7;rrWx#~' );
define( 'NONCE_SALT',       'm8K4s06u-zuj=&1=PG9J*=_W7x8.-MNQlo kkk3<0gVyfQQYMSsXD@F-oMZ= QKA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
