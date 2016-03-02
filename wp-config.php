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
define('AUTH_KEY',         'USLjFbKqjU%,_x PDEtRdhH%XNB7yMad~v~urzJV[67#{dp~tL`IE0G?)wvww(U`');
define('SECURE_AUTH_KEY',  'p-fN!k^SH7EEY#e:M!Y3E/+&TQFhgS|T]h.I_5+J/-SaRV7,f@L!NdOl`<YaK(!4');
define('LOGGED_IN_KEY',    'VqS?&M,*Ew@p;H=m/A(AAX98pZ-|(O5U~?Gyne;|N*)]4;HPO/43kX|Z.#e$kQub');
define('NONCE_KEY',        '7-UtCS;+J^$j&.-yz(|4d2JPD.|(rSE>u]3l[SE+s{ScIijOGn007*DK-.Ru^{|~');
define('AUTH_SALT',        '799G35-H{vT+1>LMf3GV].M<UFo2bj!UAQRcv1ILdO_Fz.?kjOI.-vBpx>or7+{_');
define('SECURE_AUTH_SALT', 'nwP9;E-&NcrJTX0o%_Lg&.G9[M*^gl!42;E^FJ%=V=+C=/uhq3 7jU-T9eY9cb+*');
define('LOGGED_IN_SALT',   ':$XcH(,3L} G4|b;Q_T=*0m-dk6:d15Eo5=-w+Sy)Q2T/zt8:z)7/uZ/ND!Q44lk');
define('NONCE_SALT',       'D|pZsmaEtm;le*`gwPHD{N7b~v}5813s|#i(Qo:%SdcEWEt@G#Lp+9(y 6+SKIY&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vu_';

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
