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
define( 'DB_NAME', 'duypham_biz' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'luongthaivien1@A' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'N0F!q5B~x:)-?Kw{ #ujI>o;k@ny(*7:$,smm%q9-s|$4-[,5@*i_~9{Bb0m|#8&' );
define( 'SECURE_AUTH_KEY',   '[Olcw}T{/;b`R*, A(#,i@UkmukyM#%kWz)}2Wksx.5&*M_w1$w~,cZ.l6`VHt]2' );
define( 'LOGGED_IN_KEY',     '&9Ws^`G<SIe*>{D}vn)7[@,+~;JsEoK;*Tck+?pOPWNqLu+f2*HK0I7@f%?SO<V~' );
define( 'NONCE_KEY',         'T1qba>2m2[?{H^t}tjTTC>:&yY7)0B|8FumO/~VC(Ac~uj.%9JWjA-3O<LXEnXWk' );
define( 'AUTH_SALT',         'm$ lT`_eA6hrP7>3]Mm_?o`~0BF[ZDy71Eif).IO$p6KR*U1N+<Hk8Z-<RkL8(w9' );
define( 'SECURE_AUTH_SALT',  '6]EsP9TGNvnjlrFF)o w8|I|Y`_36$aNRS0[(,5>wR$oi_1%:NpTR?h4WBH?K6ow' );
define( 'LOGGED_IN_SALT',    'LXfN_I+DG55wx5%44-$=pl2-nJ[BLu,!W;HR1n6P6F8uZhw-E?5&4Eu3Y=QVF8Y0' );
define( 'NONCE_SALT',        'sT3LxcRnzU[;1I!c|XjG:9?Hu``)`+2l+mh-+09<T<N)sD9&&ugP[` ;%B8H3}kb' );
define( 'WP_CACHE_KEY_SALT', 'duypham.biz_obj:' );


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

if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', false );

// Disable display of errors and warnings.
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', false );

$redis_server = array('host'=> 'global-redis','port'=> 6379,);
define( 'RT_WP_NGINX_HELPER_REDIS_HOSTNAME', 'global-redis' );
define( 'RT_WP_NGINX_HELPER_REDIS_PORT', '6379' );
define( 'RT_WP_NGINX_HELPER_REDIS_PREFIX', 'duypham.biz_page:' );
define( 'WP_REDIS_MAXTTL', '14400' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
