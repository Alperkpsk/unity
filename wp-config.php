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
define( 'DB_NAME', 'unity-alper' );

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
define( 'AUTH_KEY',         'Z-1b5.|l&On1)s Tj[D;qk:!g+<h&;6!g;7}HwX=0qMv ?BP_>61^nh*7b=wg,87' );
define( 'SECURE_AUTH_KEY',  'Z$>|2rqzu:^pA$vO$hPShCpYCWG.C+D@Q4uIj^qlpA<3w}~^nj_%Qb45h|NmpX[g' );
define( 'LOGGED_IN_KEY',    '@|S7j5i;q;$Ph.dCmOSseV]5M)D.gy>nhG36u)RC`;1.dW/y U):$5YVOukNhA~]' );
define( 'NONCE_KEY',        '_E,yQ{WZ/H{/zP:(E3`aSJP,5~FLW]M0Bc(?.LdZc[VQYd^4XXI#07%4*7c5!~NK' );
define( 'AUTH_SALT',        'd!F>09Xt`2[&[DVsH7UAnA4DiFK_wIGZ! b7V!W<vF9vOh!R {WpcC#hcf)yB;=K' );
define( 'SECURE_AUTH_SALT', 'dX@dHan31,ak-HTe9f]jh#r)@H!_cvGzp|h1!IfAH^Cl<I`g`7(4F.)vN+=%pn60' );
define( 'LOGGED_IN_SALT',   'UZG8.L#QAyed=8@xFZboLlk#U6^k<2QkWpQCJUhbyRp~fI3YUa6AOJ,W&rkwqm{l' );
define( 'NONCE_SALT',       ';GaJ8:/vCWAk+_g}X*E_J!%(3zEx-1$ocf2Sxr?`52O 3F7*6q,$=CgIPfaElY{w' );

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
