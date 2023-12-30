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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'JvU}cr8tdBg_#y+]fIo6K_pk}`7>^2zFfAqt-*z1=my%4Ws/Z$-L:2t]DUY[u}Gp' );
define( 'SECURE_AUTH_KEY',   'qO5vH[>Dwg!#{x@<n^e9sL]PIT0u,#9x`s~*9aBFO>_%IJm*C?w|,fOf_NmxD>UI' );
define( 'LOGGED_IN_KEY',     '|xP/bm]B}zJ}TiQ&;U*oiRiAU7Kf=@V2).UUqhwo0qd~9Vam#^?dwWSGjJ?m],.O' );
define( 'NONCE_KEY',         'f0>uD{hYH/IzcGqN{ndEI!0xwa)|REL@S3k<O}aZ_uDEQ2b1[PDm(Q9?4DduiS9q' );
define( 'AUTH_SALT',         'y]+J$S-1<[YKc$ B}xKB[S}2$lR_+Eaj(pf]`y.s$nFnOJ3TyT][Z**7>Kc/3mt!' );
define( 'SECURE_AUTH_SALT',  'eyN8@T<HInXNs#VZXj_bGtCJ)CQw.H&BnI9Plnz+@j< $xVyjG,+8T#1iCO`v!oY' );
define( 'LOGGED_IN_SALT',    'p`TKE/Gq(J|x_%*2Z%o.-Dm%g0Ze|~X2&Im9*hEJ//xlXe=gfa&b~6bQd=BmJavq' );
define( 'NONCE_SALT',        'wIF@`hot/),HygDR$j$[LFFgX2^nf4/fmJsr|SSh:uY*X39|nW=57t84P(m 3*48' );
define( 'WP_CACHE_KEY_SALT', 'y9bZZfy?PdB7(3)GuDlaW6 *dsBb{FVaxYU<?6Nm6aw@mcSSim/8vi*sX$~+1SR ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
