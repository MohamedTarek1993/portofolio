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
define( 'DB_NAME', 'protfolio' );

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
define( 'AUTH_KEY',         'p?+b^4G@rzE1wNNP*;7XqTs!9H;N<9(5sMTaFPu-vP{T+YY_4(5]I#7.H2K=~/aX' );
define( 'SECURE_AUTH_KEY',  'BL$8@fYTZ*p9!Ba6w8]k2jO`bkgo)qkHC0cLG0H{/XNNFv=x?_]CKZg*{.Rb7]w5' );
define( 'LOGGED_IN_KEY',    'E?+Z)Cw@c>R*id6 qfe1};l0 #I3RFf+y|WzH44pmsaq|=,0|[,^#:_kMV8-19Y6' );
define( 'NONCE_KEY',        'm.g!DR/=V5BgGCL,fvSr(=BF55(EtS+TS@0^glghuT=80j*7LSTh(sEqFRw*M6a3' );
define( 'AUTH_SALT',        'l5,jGQ:ezr!e:(-e<[{x~),dkM&1cK|BI9 &&3hd)C;aU{2] !qU;?9?u>723rR1' );
define( 'SECURE_AUTH_SALT', 'Uw&0B-o{<f-{jH~(2mk,77c@=P{Ne2kWKmC4=0dVmdT838LJZJcLavK}@Xd&aiy~' );
define( 'LOGGED_IN_SALT',   ']PaK(je&A}aP?%%vuIe:nZBCDyLlR1..]]DPfohLT#jwGC)wuwY{-rnML(zzez;]' );
define( 'NONCE_SALT',       'L=KV5dw@tP#BV9u*WzuNzZ++l:WR[yyf8*,+/X`79iZ<VEW4BK^o+RGX0NKP_Hk)' );

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
