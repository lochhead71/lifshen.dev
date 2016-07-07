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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'marny');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'g>yB3xcTPwxu2d;&A`F!Z&_M@Q#VzwZ1hBQV,`+Q}eXDRgBoT67Zd{:ag3da!1D6');
define('SECURE_AUTH_KEY',  '_=F<:x<JU`bd:scrN#1n~gF(c~$8;V>4uk7BLxP6yX[O ck0aum|*0F?&p0_]B|j');
define('LOGGED_IN_KEY',    '%,dht|`>`yO%q={C& GW3sbZZ}C-{gDm-/`pn^2J4nbE$Id_-W, e04y8V+27+.v');
define('NONCE_KEY',        '8&k_o}+4LwUR3~i_T|b-Wiy9CwwF(y/Lo{)+Loo.-d/w0yry)DEJ$.IYM}w|xu7B');
define('AUTH_SALT',        'Auh[zwZyz2s*@V<%^|i,#/EKe1/oT?F>7q%)2qf{KdrI;c`.6*24vkOQ{~(ZzuB^');
define('SECURE_AUTH_SALT', 'K5jv!aSU{.P9);;*-XaG,`CG($S!|Xw*ng/D1LnMGz9MEOTGz)Qw|_2@OB*Y5RP/');
define('LOGGED_IN_SALT',   '5VhCo{ZaX7t<3-[5D!NNVJRZVoJAV(~K3n~>qU|w/-T|;K1yy.sB0#SsJ:[2i9P%');
define('NONCE_SALT',       '3j.W7G}v~J i8GEOwn-:Ml[|>vBu[#LT<JeY>lIF.= ;zq-J@.ca;;=!,ezB503l');

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

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
