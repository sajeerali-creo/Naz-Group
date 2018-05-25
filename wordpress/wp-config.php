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
define('DB_NAME', 'nazzexpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'p:wwQwk:NZd`{ eGdv-z}hB${lEHYf-y]{IW1w VSueniG5vAs^c`NV:jMvSfI6x');
define('SECURE_AUTH_KEY',  '>PRUL0?db[s^E|=auIPX<U]*p]Mj<])N2T|g)#<~G)9l(6^6~03.l|W@~uNb_a=t');
define('LOGGED_IN_KEY',    'FFy3w~; !dePbM$aOf]xV}7_A}N]WNU&>FLO6v<u?ew7:o3h!%Km$d+x_<{K7Q7)');
define('NONCE_KEY',        'uH _7tvs+ZRAk<(x*jtm7^6EFN/F#0fLIgnGJYApeCzDMgfi&y-UZ]K0JlLvM$K_');
define('AUTH_SALT',        'O?&v-YS+VD^id|?oA#frimR~J 8A[._9?%4m?w>b+q_+|f;MPlSI2,Qy{?K3v:Xc');
define('SECURE_AUTH_SALT', '.Vf`!Z:uu^S5[$#NOm?vR^FGZfffi< I<]9-J=vpNSwmNl-R`}qvJ1oNrT{7e7R/');
define('LOGGED_IN_SALT',   'gTF#bb;MbTzKo6)1:+i5kibpg0`lZx(#7H;.0{*GuzHg?whe>TdC&xUJU>jsdos^');
define('NONCE_SALT',       '?0W.|krKge|N,fd/M^zq0y5uU6i{yNRg)<&T}Cg`63L@zCdWi?V34tUBi2?RbGq^');

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
