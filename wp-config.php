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
define('DB_NAME', SAE_MYSQL_DB);

/** MySQL database username */
define('DB_USER', SAE_MYSQL_USER);

/** MySQL database password */
define('DB_PASSWORD', SAE_MYSQL_PASS);

/** MySQL hostname */
define('DB_HOST', SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT);

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
define('AUTH_KEY',         '(qGY=*~ xx0S7{d>bE?X+:Qfhl=`JVBlk2{&oXI5Cq;p(|*a,IV!*jj`~2^B+y2c');
define('SECURE_AUTH_KEY',  '9,DJ(-ACT{Q]0l38_H%,,LRj<:V.N><mBlxZdy!|^w-[9)N{J1<w|SQq8iJaq75^');
define('LOGGED_IN_KEY',    'Zh>eM(|*q`,K%i7;tqw-1z$zf VUn{ZG$)yO7}+1S0n.kX?o }if$w(|h4:g.e7[');
define('NONCE_KEY',        ' k}>]iJxTVzL@-&L+f3^1g-bKe{<Gn^aRi)8M_B1fZO~UTw{*J#sc}l+>9kSisV.');
define('AUTH_SALT',        '5]q0.bjan`Xs<khp|LE1aS|pzr+X>~=Qf;pfU:%n@J( By3Y0chZ<.$IX/I@aq@2');
define('SECURE_AUTH_SALT', '-a!-RlG21ve-)<$y1$D7c^L.bjd]?D;/`#v[4zPuP@x[#Ax:+sEC}H|N5OOIai;s');
define('LOGGED_IN_SALT',   'yylkWK2LOHrbMZFdhF)xq!YJ>S,kJJ-%/X:cZC_%VoRNE1pZd|1I!!I+r&++eB/;');
define('NONCE_SALT',       'Z$g=H:K/yIsJz!sT*+)3*MxgewJI1z7YjS0}L5?*AYrx>2FFRY=PmDkv0<6mN]oX');

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
define('WPLANG', 'zh_CN'); 
define('WP_ZH_CN_ICP_NUM', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
