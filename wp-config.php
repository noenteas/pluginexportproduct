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
define( 'DB_NAME', 'pluginw' );

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
define( 'AUTH_KEY',         'F?@T7c-kf#q73SG,#aU9z]l`*K3RD|qJo|SoQ#EG0&?aRK]N_ *(X`R:=i10(W8{' );
define( 'SECURE_AUTH_KEY',  ' 6=A_={;)hQuK)+G*-wQTKc(h3SU~kowZ*nsT#=et&HH[9i];.k`J6$s48|ID&Ru' );
define( 'LOGGED_IN_KEY',    '}mM:g4[(Zg%}SQHDj6fd8/53`0mi~ZItd%7!?Tu0~Rgs}|QI:#<;__inMsW*a@e_' );
define( 'NONCE_KEY',        '}I6<BC;IJ?b>Dex7G<o{`olH8,3@%rX^ha*EF+W7QVMjbu{}47`<LO)un,7W7c:Y' );
define( 'AUTH_SALT',        ':z[Z>oCt?y@L&vUu@hbCyTEPRW|9PEv(C;,)?c+NzF/60D 5MB^Ujo6Kc;p&UWcr' );
define( 'SECURE_AUTH_SALT', 'J-p;Z*ezxesR436sej{nZMa4j~F>q{1+<4k)r$)IQ!;m4lB#$<lI|R|E&_?TC:=!' );
define( 'LOGGED_IN_SALT',   '<pGcv2[<{}_.OiDjrnNA*L-#ce<rB=h``By/}N9`-*g?6C6WDNSa|<cy|,7VSNMr' );
define( 'NONCE_SALT',       '{U#hY!MKD,[Z5[rei6uZ +F4;AUx^[n>tl9^E] q4+)sl;J-J##>HV&>ZEMh]d6#' );

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
