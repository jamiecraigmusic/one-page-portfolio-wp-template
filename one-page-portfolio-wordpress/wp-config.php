<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'one-page-portfolio' );

/** MySQL database username */
define( 'DB_USER', 'jamie' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VZ3uUaQrDIRohDte' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '7iEkhycN/Y}n;Q5p9NT|J {Q-c*GZ+t-3pVyL7AuC69UM[IQ*Oknxh!Ly_355E+a');
 define('SECURE_AUTH_KEY',  '~l[r}pN/<{:7nBP(AVy{@3Gx+shG-_c-|6Wo3+Wa&x~<X~Q|oSTDg3/9gM!E?cu|');
 define('LOGGED_IN_KEY',    '!!Vu=df}3+7,qNeHDi/V1!}zY-&G/p0/4J`4yg|=+umV_oYG^zG,yE}]rHV9(MZ{');
 define('NONCE_KEY',        'dlvIT0~B+mAAX*0,%x.69<?]~9</{L$nOB5-mWo}lXB%||&;*&|T#Wg*O-v$`?[3');
 define('AUTH_SALT',        '?<:$SL_qK1+e~eMY-{ J3|e.jBgA.um9U|+nkper*6/X}?E:rcrUfaM&@F>W{hT-');
 define('SECURE_AUTH_SALT', 'q}]sOQU+,WdM x>6tVBA6I[YlvCl$=l`D!4}%-o,4h=VOc}+>ZTAg9F}0=K]=w<Y');
 define('LOGGED_IN_SALT',   'B.,`3rEbPp-Zwf)JjRFh]J|rHUkQh5z->uu3_Z9bdr9<D}BIDG}5*$eR`:DJE8Ti');
 define('NONCE_SALT',       '>OOhPGP!Z|N6*|~-R[T63tP>++V6Ckb(WqObOEWx.87-r/ZMK2U*u;v,QKZ0.$Fx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'opp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** Removes default br and p from contact form 7. */
define('WPCF7_AUTOP', false );
