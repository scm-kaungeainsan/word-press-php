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
define( 'DB_NAME', 'myproject' );

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
define( 'AUTH_KEY',         ']5.<+e>VX)F?UGm#[ZxerYGA,>sNEut]/+*(_YpF`G{j+^XbG8-biTHFUgWJxK~.' );
define( 'SECURE_AUTH_KEY',  '[X5>~x`<hI2zE&Hgbuh0+GVGW%U$=BlD,X6H>{.xFm&%Z<5t7h^V/GajJs t|mVT' );
define( 'LOGGED_IN_KEY',    'T=Kcj707CnG11H~I:meDXrzM4$f^M7;@FoZvsHi!sX<ER4/^-5IOP}K|%B;9~7u;' );
define( 'NONCE_KEY',        'NmU2!g>a3_`Q8$7A|uypEyOLF6+~F[u5_RbOC2FsiU}k;#*F y:!KQ19s2B/Xrlh' );
define( 'AUTH_SALT',        '<lMQ,~tdsLhHZDNaPqOnEK.*XTE-Dj3!(ET!SwU*Zi}p?!-a3C*;dHL<fF8_0w*n' );
define( 'SECURE_AUTH_SALT', '&6Jr5h)3QYP3jyS``_jT)XD{*<VDSz-2de<ihhaGv Kl2r!:|{h2c&}*Pkcc{hl&' );
define( 'LOGGED_IN_SALT',   'EB)^0Ja9G>~<|q&m}]Lfi@o_t[NZAdY;.fi)(ezhz64.|J=tKVVPv[VdH1lmcomq' );
define( 'NONCE_SALT',       'K9V}^xd!w  W,g}W1iF 1oW3&E^Z6 Au,DSh)T:_1q[.DO>c7qf4(}fVk5jJVj`L' );

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
