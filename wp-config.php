<?php

define('WP_CACHE', true);

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
define( 'DB_NAME', 'cbddev' );

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
define( 'AUTH_KEY',         '8M{At5!DPwr7/OLF$CyA3jo|;D%t9)(r{&VxoK!R4^tLqOSdI|w%be9W6-5gbZHM' );
define( 'SECURE_AUTH_KEY',  '!X6bx^;(Djm,!g,NJ`#-H4p.4gN1,0j7iEBbP)q$wF2~Ff/v04hN7Vv|[.zrD*U{' );
define( 'LOGGED_IN_KEY',    'ML2!^>]Wdi}0,:n~azKZZZt$kwL[S;#*Mr#0!.((HQ*L+kj3qud5vHcj}we s)kz' );
define( 'NONCE_KEY',        '4zztt5`6dk@{~vT3$9m 2COdbYN)E.Z&a9nw7(:*35YwP !v/O1? ,@OouG;n(y6' );
define( 'AUTH_SALT',        'b?4vPxgaUmVey*f0__6+%sv(4BcMCTHnJ!!&CD!T%)H+OXWu[Jk]P<v!O]:mqZQ3' );
define( 'SECURE_AUTH_SALT', 'f;1mApp{${T@Cu$-H~B,s-HU$X<7=ydr~f<Wns4pnh<<dqcl|v_v|-!C6G)QtOXR' );
define( 'LOGGED_IN_SALT',   'h~7?HPrL<rLm$#VdUl/^!PT0>-5OJXD1,y4%Jjf0l^/IeBKakb5!*CnVR-z0xcr`' );
define( 'NONCE_SALT',       'oWYc+b;pdyXHBfhy>^gmDrEqFE64Tg2/9K+Hb15_!(EC08@*B~U?8|* B|Owr+O^' );

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
define( 'WP_DEBUG_DISPLAY', false );
/* Add any custom values between this line and the "stop editing" line. */
define('SCRIPT_LOADER_TAG', true);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
