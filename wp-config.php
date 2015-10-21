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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dousoukaidb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*@#|bsRfcud04w*Nl5eU5$@T_?U+Kd]5A{N@gR:((mZg5KcIIy}KDf!jJ_AuM^MM');
define('SECURE_AUTH_KEY',  '/flR9#Ix-Vz1k/M28k4`JX5oY^^HL5eQS4vlj/rPVvOCc,HbliVQk(]QE9TT{6].');
define('LOGGED_IN_KEY',    'qtME,2U|?c<l*6Qm#6lfz~J~eL/+8>nya8mO^sHU<0Ug+o+TJ]gc!@R}j;-dBS|`');
define('NONCE_KEY',        'AmIWW%42C[O:BsKD!yl{p8aWjgf%)EK6+oQCyKf|^|yQ90%BvI$>7r>]Q9w~lQ|(');
define('AUTH_SALT',        'XrMGNm=wEn4}+C/2,U-}a$PMA`__8d#SA[x:4;T-|/yo<;Q>k!|tfk]`$Y6;?u|=');
define('SECURE_AUTH_SALT', '&(*{ E5FhbPn>Ib6U(XB1EBVUs+d9bLn<.9kOkl|l6]RJ=a26 +-Bad{W=b+gGN|');
define('LOGGED_IN_SALT',   '9+f%T.aoZ3k=: RvDc-L0Bbx%P,6,g-K2 |V]{%Cg+HYD$Ph1dOm-)S6b]<xv/R1');
define('NONCE_SALT',       '_1t:?mzn=D^>X!4}-ns%(5Q+n0o|)&ju?7;zIwEhu@+kPc^g_=N*[WGwuW@w5e%e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
