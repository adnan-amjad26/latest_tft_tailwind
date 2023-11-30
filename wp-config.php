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
define( 'AUTH_KEY',          'b{u<kit1xZ-)`]pH<uE9m@ S`T-6guzB{g<|{x#SX6~GA;Gw k>.?brJ#?F?2O3%' );
define( 'SECURE_AUTH_KEY',   '{:SNntJ;Qng;M4[Fs1Mc@OATN*PJe2z+t(RG 8tZ0jERAJnWj^;T6{*GHSAyC6gw' );
define( 'LOGGED_IN_KEY',     'c^pdK3x>|lh=A4LIkeI%U_+}W=HGcRlN_Mky;vYN-IM<=T1ULsah8/$]SOl;UEpk' );
define( 'NONCE_KEY',         'KJy*g*LT2Uk;Z^r.ZpyHt?>#iIL;e<d|CY!*Kg0,jHzF2zDUOV}-bc4bsMd&r|?b' );
define( 'AUTH_SALT',         'uJ.7!a0-&I[6bT54QT10/Y-B#*ccHll@!Sn;-<:YMrYdaOfr1k_Vv^e@+SA(X1 y' );
define( 'SECURE_AUTH_SALT',  '36M.2jd:LOM[qX739%b>.z5wdV7C>BB0&!EjPAd~Mt(0.=qsliFkIrOJ)1xF7WT*' );
define( 'LOGGED_IN_SALT',    '&!f|0;`_#e4tUkLr0O}a?F66<izy_:7H!|nP&qLMpQ|v!R.KxtXxCZ2S[jJi=]5(' );
define( 'NONCE_SALT',        'O3`LC]6z(v5S1zZt.()w`gJCGGCEIIFevb}XfRB_g+H,+r6 Yu^2eNw16gf&2nK ' );
define( 'WP_CACHE_KEY_SALT', '7?W47 %N:Pm~#%NofYaU*.]@;setJ{5,)Vay/6swm:Sf#BBD;P3sC[>.[F/;D(Dq' );


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
