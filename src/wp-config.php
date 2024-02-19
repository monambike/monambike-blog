<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u362764329_MpeSJ' );

/** Database username */
define( 'DB_USER', 'u362764329_yLgJZ' );

/** Database password */
define( 'DB_PASSWORD', 'B1IUEmsRpD' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '[#[xA?b#}STL!M6#F,J6.]tA8=hp~ao=1}wwPvwAw!#Q~j~UJ@Rex7,KEC6$9ELc' );
define( 'SECURE_AUTH_KEY',   's45X=hfMyxXq+U&;jbhCv&)!3(puoo)%Jm~[q-A-mP1&%rA@g:o6WRqgt{-PF1Cy' );
define( 'LOGGED_IN_KEY',     'k(_SvgaiX,=X]P,ypSqX&3i6u*JaSCn;MSumZn`L~7-1T$_sp(x)x,,~eW}M[)7n' );
define( 'NONCE_KEY',         '1vwc3:b{hK=X41prB7`{w*MloGpHjEw]B*26`vB:YVkb9hkwsTfXGy`,Dk-KXQ3@' );
define( 'AUTH_SALT',         'N)xD6n][@;M9wY=`o$,>?w3E@Me~H@c:!<$P!~ru gPFn,<0b;N2=ts`5w`I*c_|' );
define( 'SECURE_AUTH_SALT',  'L8UumH1e{3 3/i{!~#sBPySGJ>pv<T!$PChI~zK7dq&`Q|4/(!wRQOc}*ctnmewy' );
define( 'LOGGED_IN_SALT',    'rj;iNd9@3}B9IM-o{]9UQLJGW`*aywicAN4NQfSYVCGt&|lLub-mS[Fd}?NVl]=`' );
define( 'NONCE_SALT',        '~C+2r9skXNE*(SjPN0u{BArvPKH8c<@A:@@1IQtZ| VFkqB7-_N,piS6%s(J-f&r' );
define( 'WP_CACHE_KEY_SALT', 'PKTVGg-C`g~j-o!>f@uXU qS8gy*cCfTQ9ZzmL9;7A~VY10Qg51L8&k81.d _j*B' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
