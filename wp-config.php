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
define( 'DB_NAME', 'vuearmin' );

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
define( 'AUTH_KEY',         'fk#R ziP`;`8_>X[V8fe6.0@X8|2!Zdg<[zha8$t#|yA_uEK|{nF&S:K-,#lHDwS' );
define( 'SECURE_AUTH_KEY',  'qf-af:+_h?33Bj3A)w=1qYMdk>Ch[i_Y aeodmXDd@kUO39Nb$T.yJ7Kjr{(r8WR' );
define( 'LOGGED_IN_KEY',    '<$C7OI#zJgXSL|%MuYR)L9E.9[ME})No[>gf!]<H:nI50C/L>7 o|:GL !>:_*YY' );
define( 'NONCE_KEY',        '{!CuS_kwZ3_q&M,Fx[aDq~V@~}LwFQ0tHfobr8(:drv2&jT$5;pHjLW9;UqcG?KI' );
define( 'AUTH_SALT',        'YyAY*UUQKcqM_?]e)P[hj,Spk-;zVi;f9h4vc`x$:eno:@<)NarF8R&Nw([7`#hf' );
define( 'SECURE_AUTH_SALT', '!}`VP&D~hrW+<{Gqq`Zi{F%J|.r0q*+0PdgD*x7)L|{6!Yy/W(xBCRW^ChT6.Zc ' );
define( 'LOGGED_IN_SALT',   '}x~d]p9U$v3L3=Nga]N^!e49-*tc/Z4ts],Ii> [cb=t~KXdZf`VT!o5k_7bBAOK' );
define( 'NONCE_SALT',       '9*4p^IR`Z_,v`RrQ*nD{L{u+5g}9t5SYnmz3F;;:T$+0IpbbB!o*s_@~FN_Ci!h<' );

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
