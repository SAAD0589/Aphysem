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

define( 'DB_NAME', 'SaadProject' );



/** Database username */

define( 'DB_USER', 'SaadProject' );



/** Database password */

define( 'DB_PASSWORD', 'EkteedWHBB@5' );



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

define( 'AUTH_KEY',         'QG*y=d{U2,`F!Nw48~:fTHSng&kaX-*y_5>{-S{CMM v7tkELwiI!?onva)^.i,}' );

define( 'SECURE_AUTH_KEY',  ':?4.AdDNA/o(=gt,TW92|oq[[MKumVg/G9%G;-8,Js&r.tU)F|:O!RoB=1zxT|M{' );

define( 'LOGGED_IN_KEY',    '7@/rsPes(YZV#+f}]+#(/3[H>#B@jX!.-]@+oCc6).Sb7Z1yyyaYMB{;Oz]tVDP0' );

define( 'NONCE_KEY',        '>bMg|O>p2#w;gkR?1(SbA-`X~ILu7z3_rGEb+e~U,w4{=tNNsIfu^>$nm}%!-Ud}' );

define( 'AUTH_SALT',        '],jH3:3tFM<,|X)s~?e920$5&8)4H~TL]Jh#BTl:[{|8Fslbw22#8X]a_:_WOlIa' );

define( 'SECURE_AUTH_SALT', '[a6C8N/rMK?Q2*WGz5{AY;)l#oHLB&%pN1DWrZo~V}rbd7[p0FaxVeVz=ehchgL|' );

define( 'LOGGED_IN_SALT',   'xM2J<u`x`I|n)&14PnvS>FD7S{M?v]en|wn0CFYtYrD`yw+Z<?BjJ|}qi.jF6**W' );

define( 'NONCE_SALT',       'yQSvWbkqqQIf4rP+K#pEJ)ATD[$28b>Xw(+1*FDb3HNAf!xVpnn30kt1u?^aOhlP' );



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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );



/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

