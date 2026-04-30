<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'sKwhuZZpViSO2jaitS6hf7gGTSxIIu2uEVifuLhTQ5G5jvrdo0hG3H7yTaKbzmxH');
//END Really Simple Security key

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ucshcom_staging' );

/** Database username */
define( 'DB_USER', 'ucshcom_staging_user' );

/** Database password */
define( 'DB_PASSWORD', 'JKlb05chFubUH' );

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
define( 'AUTH_KEY',         'tlcV.WNF7Z` x5lJq}dUCifeCxZ2&T7#y+)4dxwveQO%VQs;r,z0>Sb=7ud{gh W' );
define( 'SECURE_AUTH_KEY',  'HtB^b3N67qj +QopQmi+`X$oqI%IizN]Y{gY?rkir$N(_#HP.(y]AiP[.obF^:cG' );
define( 'LOGGED_IN_KEY',    'C.p/O`SIN|D[z)h{rj9r{!O,DP~R/N(CJ*[JS5S&DKt+;1J@w5RB;`bT<U6{/:qn' );
define( 'NONCE_KEY',        'NEo;xmy0Snlxq&X3*{)Nj<}ps9T~32e&ao.CFIEE6Sd@9YPvKiuXyFA`Tv32H3]Q' );
define( 'AUTH_SALT',        '#W[MqQ?Ne%N)qlYm wz$%SIMPcVk$f2w|9hmfxO7]FxY_9@GB%9T-sbhh}*9c<8D' );
define( 'SECURE_AUTH_SALT', 'e^:49t64U%(3d_[AQ)VI*:</g,ELmAW.&tc$TyjU2Z6:hX;lT?SZT>/U?9YL21 L' );
define( 'LOGGED_IN_SALT',   '&xR6Jc#H/M_)SdJLS*<t^lDt.{GBZ>PQQr;(1y/OOid`Da<_^BrPqM[l-;x$2cCY' );
define( 'NONCE_SALT',       'z~1(`{d7F^e{3l!H1,YkYQ2v6&q||34[h T3bR$IAtG&HmB^BI#Pb*mbEh{?DDzU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
