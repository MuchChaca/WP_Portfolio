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
define('DB_NAME', 'project_wp_porfolio');

/** MySQL database username */
define('DB_USER', 'archy');

/** MySQL database password */
define('DB_PASSWORD', 'archy11&');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bdFh1l9As-*dU9_Zd5s5,ztp_lAQ2=i)!FsKk[=z3b~t 1S_&Qz&R6h.r;f@lqha');
define('SECURE_AUTH_KEY',  'dq&DMA=TM,bozM<>% Wtz!W{O_X0fw56G`@f<s~0~Ls.BhPw318x+ZvfDhZz:S(#');
define('LOGGED_IN_KEY',    'QwuGZN`O9*1o!7uI(NDk)MlL#|M^Mr4~Z2Y&Z:v*Kn1S[.)fonT@GCo=8}JG$!S8');
define('NONCE_KEY',        'Z)+WM}a_j=`q=SdR;4&CHTCPlN~hAa O^4 bjzF?E`=qOB[c97|GLCX^Q$|YrQ5M');
define('AUTH_SALT',        '_(P4MZGD^>X60JU:LS|Xm<w@WY~r[vug@|7nANx{h0QKxuAy?$ktdPSfci3aq%T:');
define('SECURE_AUTH_SALT', 'MflzB./j76:*QHqpx-b+Tu/hO@{fWRz6VKXs!AQi?+ZZ(IdH&Gd6KdTFE.a]y$}T');
define('LOGGED_IN_SALT',   'G%0IR2RY_3nXo-DMN{BGueUn2O#WXa{b0?B5y2NP{~;{=>eP3Z21:Ur932;@>jMy');
define('NONCE_SALT',       '-dU{$+V }_@*O7@,dwrI)RQm<TzDMtde8ob5g>+0[PS.JI}a4IB`b)ZTK,9pJ_:v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pjt_wp_';

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
