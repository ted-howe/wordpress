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
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         '$1o+^JT/+rmsjJBg&e?g[_~yU!<IQ-d`JdEj;dCW-77)U4tr0|5p5w/q)ZaVf~3w');
define('SECURE_AUTH_KEY',  'XQIR_}JV+D==[4dZgJcHQ?`G sBo|?NAn<DfJSa,R+q<:^1bl!LTS.fV9d>k~y#2');
define('LOGGED_IN_KEY',    'o?].9C-??*]ruT9;6T0S$2TE$[ME)=)aSm5):I0P7q(+(nswb~-6/vsz{Iis)of`');
define('NONCE_KEY',        '_2#SeFf.2X7rTx+ex@%&3.OoTkJY iN1RQ;1l}+j3%`GngKpQpvGMww&NzV{*#,D');
define('AUTH_SALT',        ' 2(04`jQ/-c(A,$ohAQop;J<JB.9C2xtx=+>4MNHnwf*p<8@Pz84m%s~NTnYwyIg');
define('SECURE_AUTH_SALT', 'p6uK/cD9tni/E+!/zf8l7{l{@^:v*4cznX#$#TT`&{s~LG9JVWtI6LYKKM(G7tOb');
define('LOGGED_IN_SALT',   'aSiZd$V#x)+kc:PL(W0}!U:m-~=RQ}Gjll0oa`npBtn`:43hUDp](:OB/8D2U4U%');
define('NONCE_SALT',       '9-vRB>zF;DeI]}J!~?%M5$A9Ms.k39y_^/, q2l4a.dmfW:C%RQ`7*Vo&as5V@N.');

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
