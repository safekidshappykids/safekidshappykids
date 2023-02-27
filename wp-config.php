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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.~U0#I@lAguO98HMrQtKDt0Q^J-IrRA5&@?`?%iN/#<;AaXmnP7&{v=fQ(`?i{PU' );
define( 'SECURE_AUTH_KEY',  'X[bdL(+q V1_n4_Mih_U-[OHXy.|ayRWVoH~5nzr.KLE@zdYYJM4S1ZN$g|6#3;q' );
define( 'LOGGED_IN_KEY',    'ySd*4|v-&A^}Fp:9SU{!#x,^3Z9O)I$Ez&5T Lv.$Hz?:Ae&EF<32J1b_AQ!#9t6' );
define( 'NONCE_KEY',        '@1y2.fw<7UUS~7F/?G+^(fo?dbwTfR<kVLGYpQ-|N39;D!R1M(g5`Wz=5sO9>)q<' );
define( 'AUTH_SALT',        'Y1$i^1~[;J5Ek%%*Pb)!Rzxl#IswJ`:29i&Qlhf!j)y%DT,!/II|[Vx~Nn#Y0Vq@' );
define( 'SECURE_AUTH_SALT', '#`.F}nc!$%b;u`s7R{p[+7;yb%<pG%:|_Ck/6 >%1ysG[[Oy6Cigx3DJX9jt~,<v' );
define( 'LOGGED_IN_SALT',   '1]JU?F^y(l.x,tE4TE>a@[KPB4K|Gc4auH%w?naJn{0@e:R-h]he<PYwrj6eZF:=' );
define( 'NONCE_SALT',       'ovCH0/5A{B|S>j!>#!N;ILA*H5txT [c:#Qkn!|GHWt#WUT5SJ?Rz{s4k>C:$a#!' );

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
