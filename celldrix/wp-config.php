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
define( 'DB_NAME', 'celldrix' );

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
define( 'AUTH_KEY',         '4uKG.X) A2X*0`?A]}U~iWsHgeuv=Om`E1^`YkvA(?#Sx#c2{@SE9)4/wp,8$<E)' );
define( 'SECURE_AUTH_KEY',  'z1IW,k8AsJ_HKxFl5lPj|fLF>?[S(:Ez*$>shX_ze!{/[B1Y;bNVR!~@q 0T0<UA' );
define( 'LOGGED_IN_KEY',    'i<82P>Jo*U7[@u/QTHX:Z.U(m/&>nnoD{0@nbt;>rTNMgqK72Jae<q*4+vh;8k*v' );
define( 'NONCE_KEY',        'AX{q7%t/9I|+VbDOgBO$jL5%cS@ZF%=:nN?d}){$6K{4&_W1v>ei|Je@_t,EjfI!' );
define( 'AUTH_SALT',        'xI/+r[l:LywKlQ@Ckb9eLwcJ9497~|~o?o mi0?CDs6qq(FI0yZ~,+2&EXC`jvef' );
define( 'SECURE_AUTH_SALT', '8mezPFC1D8nz;*d50vw|dx#.z !W0ep9enE5nI_Cn@jjtAo^#@a@xufS[0>|B2/]' );
define( 'LOGGED_IN_SALT',   '7 WH>S%f/RJA/j~X#%fvqQV*7y&CHjI]5#?`>COk0`%pe##HRy-oa*D*nPgdV$cD' );
define( 'NONCE_SALT',       'Zg`&wRFrQ0f!w=LqV8c$BWq-avp@8c(C8)?T(6:eAV3]:;%C Ps7 $g4ge=B&5&~' );

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

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
