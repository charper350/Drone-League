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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'h6(F+{[*EH39tofs,)|b*U%4BK z8EJ-&U-QDZ~_Pd(T/OfL~W?h7>f~<4<=ezW<');
define('SECURE_AUTH_KEY',  'pQ89]W9wACy5<&?]7-A<ee-qLW&!(#.+o60TL8+|69eNC33F/Aj- ;MzcHS?3kFy');
define('LOGGED_IN_KEY',    '{f8}(*RYh)8HuR|w}*b<K0$;:/,v3`5Wm:qb%p04Dp6)#KwN:4 T452.j*~FJ[`R');
define('NONCE_KEY',        ']6a|ePYvb,Y)-uRwn>,l!0b+63$bm8&[OHA$I^+r%G=pX0GNfcFQef {kThE(NTM');
define('AUTH_SALT',        '$1CtrUe}?8%J`XIKWY!FEoYmCdKw[)Y;f&h4icI.ol_<(AW!m)-0[wkOa&i=M}a{');
define('SECURE_AUTH_SALT', 'mN{:GHJ>QlsLrVLYU?<*Wt5yFQ7M!79>GHMlbpTfC3^STF)Yg[[)ip Mh=$ E30?');
define('LOGGED_IN_SALT',   'X~%>.t<B:P@PR,Emg 0tl[(nr)PR8cdufn@P9IsxQk?2=M*Ttf*J~$-0aN>`^v@W');
define('NONCE_SALT',       'WG!>4^ASSSyM{{@T36)i47F-2rpL]g[Abd[P+lq&6H~L6h<tH<6NK36F,Cg_+IaC');

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
