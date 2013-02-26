<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'geekhub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#KV]3VnoJ>+~>df+;`k@hV2|xl@CX8V:w!J:drAr55xlLpc2uG*K1p)+=6o|lTXT');
define('SECURE_AUTH_KEY',  '=0S^euwOs#4xr|aya5bTk@V(L<h{70@&m[tt/g4KbRAR,4ptqbd{6roEE]P:j4z3');
define('LOGGED_IN_KEY',    'nnE9jMk!lSP3P ,dO w~||sG;&f`@1}tGO8JcJ~9wTy6v=v]$TO!PTtR `%k&>l,');
define('NONCE_KEY',        '?|H(*272NM_iyd7zHcQ]=@}5y}+BYB~DMnx>Q<iUC,:#%[9?x1/ma~sRkHJ3o6NH');
define('AUTH_SALT',        '[2Xfa&0LLTGD_GR7$QF[LL!=KW@?(bm)p@?7bw|PC>O0T8!&F[ 1CEmR6K*aZ(B%');
define('SECURE_AUTH_SALT', '0@xQ4kR52Gm[:@7<,4jS.18_=e9640AA8zr(O+s9AUJ=[jPpN@IQ8YW%:,LkoVTB');
define('LOGGED_IN_SALT',   'hcn%bx5}AUc+Ni/tsolZ9E4JZF$W,hnSLeEs$=[1IZy?/bF6IJW6fU A25o]J!Yg');
define('NONCE_SALT',       '8#| PfFC&e%NF_6v>z!=R:Q _jR#J}vRK?i0T=%cd(O Y[dL.q[NN e=.09%VYY=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ru_RU');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
