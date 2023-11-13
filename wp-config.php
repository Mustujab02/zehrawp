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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zehrawp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '2&y?sB0Bz+z2kH[Go39dp%(fjMNN6gYED@~5@d0]v6o?,4b w|y5 Tuwx5cEiaAQ' );
define( 'SECURE_AUTH_KEY',  'F:,R<:sie F6sU,B!rY*=FVWvP>DgF`&6K}k695J>l$$8.!eP9;=jx5*rRl45/6 ' );
define( 'LOGGED_IN_KEY',    'R`m&[=but.)DC0*C#C5E?Ei8Rc$IflGN&^#-H2fE#L`F5)<&*uFS/*|O|kc_@+BK' );
define( 'NONCE_KEY',        'C`&<$~Q4M@@z_PO@IHeA1,/6$x;WC(5?]A7_:(Z6PXCmE5k}?HIKzy@w/*yI0dpx' );
define( 'AUTH_SALT',        'qvM3VC+~zv>f&Y1#S?3(|vmf_-{8D@1#rUh+0IF$+^qx(2R4F~0E!HxAVo:Ss|.-' );
define( 'SECURE_AUTH_SALT', 'Ovfx?gbfQL/K9 y8/)99x=$XW.VG.tCm_hi^_Gt$pS[Q :]GJuz.]0h<!6=A9$Rq' );
define( 'LOGGED_IN_SALT',   '4N[%Mw<3U%mljjJLbfi1Y5gCRP*:+[%tkhXmDqom*ybHYmfp<?}`CO}@(~SvSzt`' );
define( 'NONCE_SALT',       'Qg$@`/V|eo0#JW)}=D}ZwX}io?/[mCO~`nJ67II%&9zqYAI*yB*zku?x6o+nZbl/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
