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
define( 'DB_NAME', 'a2023_420517ri_gr1-eq12' );

/** Database username */
define( 'DB_USER', '1046154' );

/** Database password */
define( 'DB_PASSWORD', '1046154' );

/** Database hostname */
define( 'DB_HOST', 'cours.cegep3r.info' );

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
define( 'AUTH_KEY',         '?Z[VcKB 8K4v~jZ:`62ZZ(&RKYXS=u9!c_;U)&YQnPOM?^_`5?r)V8;Ux.e54eto' );
define( 'SECURE_AUTH_KEY',  'J6? %PplZ85)0dRTtNU#B#xE}qmL]>zKP8m</MEPWW /f`RIU8,E0c<I~j=ZZ}g<' );
define( 'LOGGED_IN_KEY',    'Im.Ws2J`IEoU`yp.pRJDxRH6+0Jx)4*PqDB |o?AXnQ ln?e@fL ZPm1+xG}~*>j' );
define( 'NONCE_KEY',        'h=K93L:!<uq{ivK*H},LU=}|t4WPLN.@n0WxB[SEmBfn=B?v-XsVS@8cs%$g3-==' );
define( 'AUTH_SALT',        '<=~`Q2}Kx0zsDl}LGFjBu)K aQTIK_j4]mT@zjX^5hld _k$Ur1522{WF2* }e6`' );
define( 'SECURE_AUTH_SALT', 'nD~3hM)`y@.KmaTmKJzR&<|tK=LAi{At_Wow]{uQ;Qkxx2S].. i)wWPk#fGh(;o' );
define( 'LOGGED_IN_SALT',   'S!&Dye8Fi1oJ}d~e>6jDqALiCju RcrS-_{F|I9aw~U>x3pX]<k].YO8z&BDWCh[' );
define( 'NONCE_SALT',       'K-M!O3f(jVA.Qi3HRd_LBZu3v v-lt~Zg#c(a=X),wh^[d7;BH-sOc>_R-nlg{%H' );

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
