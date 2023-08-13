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
define( 'DB_NAME', 'wp-vwstorefront' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '>7<xAK9<jq@p6bAa?C1>>G8dbTUJeZP8{gf(lYNp&<k#YC3G_U1uwpqr{(lu]m{R' );
define( 'SECURE_AUTH_KEY',  ')@k$;K]mqiR(Gj:f,EMXW`<81AoCk@@:)pVO=l@:_u+Ykz(I-v/&7WW*%|n%L?Jo' );
define( 'LOGGED_IN_KEY',    'yV-H80@XS}.(/-!/&c>; Qjg%a[ycpj[XI2A+8F/s^!8BTYP_;<^mMdw@67NE(!]' );
define( 'NONCE_KEY',        '4spHLr`1@hn}.m2{tlZG3)u%Pf!{l -+37j~T[B[pBmH2~Jo^MU%AXF(uy lT.*N' );
define( 'AUTH_SALT',        'ozO|;xrbn+de0r*!P]dP,=k4X8Di2.?el9~=D2+iLw=MM~Dt>`:uS&VC2~2]Kqfd' );
define( 'SECURE_AUTH_SALT', 'JO$@#<?n=[+d|}JW~xNcw]Uc ^XHYd=;JdBD=UwAjfxb3sb&|[0Qx[A=FXRTLii$' );
define( 'LOGGED_IN_SALT',   ' u~:]4U1k{-M`)y:N1W*zxRx>emi/J)pXQBRiUixT1@OP7PxadTsI~F+O5_`X.z[' );
define( 'NONCE_SALT',       'xLUNS&)2.a3|d&#W-:|K]+^]_@2$7_Tr> X*6} SBv~=HPv,NQ6$cb)>U<}=UEJB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'VW_';

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
