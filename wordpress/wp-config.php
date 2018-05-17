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
define('DB_NAME', 'nazzexpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'g0a!]<ZL&W+QK(K2:5H|*35AeK]zrV}egwbp~2b29YTV2Mz6E1IBMa-)X5%-pqa&');
define('SECURE_AUTH_KEY',  'V] 0)V_87:.,OSp%#>/q}`r#9u#_+s |)YclM~E_>u_DS4oWm N,3;jgFzEr&/ta');
define('LOGGED_IN_KEY',    '`/%TvESR|Obji>|pff#MHhDkElt +]r-b%Vwy. |Ya8)b<uB6<t&iOJ=,$%nM2$<');
define('NONCE_KEY',        'Cp<t_|``pRLD`%nwW8>H4XHo)c2^w:/ hX7)+4N+6_]}((dWNg1=6W?2)y(t6^uA');
define('AUTH_SALT',        '6W<z$+ w+tW3LW/^QbcOQBvT~j(1cJei.Yd1zO[KCClN;n6qI!03#XDv(@Hvf?lr');
define('SECURE_AUTH_SALT', '`2y+pB;~}o)J]P@o+Y>+?6W79EK45l{~*1i)[/-n-bpN]&%!j0SBXg:@yR_n{HR;');
define('LOGGED_IN_SALT',   '^w5Hk4T&pJ1b]_J`akgX#+1zqcx7zvAh3Ug-OV$tiE`F7Wp|M5PhB)u/wO`q[3X;');
define('NONCE_SALT',       'AL,Sqz|-gfRTtJKF6byqyNJiMktq{^4?pC3Y$1g7h# .n!=a][c26dDmDd9rXD~z');

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
