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
define( 'AUTH_KEY',         '`=6xd$Bn*zu?s8*X~j) [>bFP7[`Y*0KnfPj.[?Y!6C6,+#s*UuqsN,o076`0t|.' );
define( 'SECURE_AUTH_KEY',  'UP=dPo% Sx3e{D4c1vl-:aMn}pe0B^M:8Xd*I,[&mdbeN#[z+*jDf$R6ppTg&DV]' );
define( 'LOGGED_IN_KEY',    'n~l@)CW VsF>-m0ln*,$O7mRC#cg-&_@nU`5d=LF`2BudC6-i,{%z)h`=KU$W<0q' );
define( 'NONCE_KEY',        '^_$w3v|;<,tU[aPX*2j1V88z2]hvzv h4hg/LRAHcLE-o4H@qqt,^LA{SfI-f<}S' );
define( 'AUTH_SALT',        '?Aj<LZFDF) Lgyuo`_/E8A[aaLL.&G+bhs(yKM2sO?Ad-@oj_gST<#*Y8~(eT=SX' );
define( 'SECURE_AUTH_SALT', '?pzL]lD|&OJbX@^87xSx_gL$#ky;EW@?V]2RX3i:}<T+V Y<Y@&os)8]=T%!R/g^' );
define( 'LOGGED_IN_SALT',   'a):3IXr49JVs ]%5MAsBn7TVA!cPPu8k MRof8YNcN9<,T(e!c-239$d_*U7)85>' );
define( 'NONCE_SALT',       '/i?!7KWXdnGBi<,B2|AO!39iG*CC_tv70FtAp2E3yG~1%eCty_4*2R2a8gFONYZ8' );

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
