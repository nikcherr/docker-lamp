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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '0}#y<>s)+Wd,p|XkIsh!lA>~$xye1]_?)xB,yY@>LJ^pFae|+hxG!c/bc=Ls5/zF');
define('SECURE_AUTH_KEY',  ' GGd?:Lpe$sB@U6Q@5sXHc4aLOwI|@ewdq-}t8*#B5.G%ATsX%6Ikb?d52.^Ag/7');
define('LOGGED_IN_KEY',    'pFPWZo3FW8wjeyOsQ,SpcF.k-a3k1G=%reuHsys(;VbTb_|hIz(L6v+Pa;f/6e_!');
define('NONCE_KEY',        '>P|0@g(P1+/oU[?bszZ;ul8dT4+TYu.f![IN+2f]XY?$Qr$7YJqjQ+A:qmvGp_[W');
define('AUTH_SALT',        '^$=rgIiuJ/=o{BLG-.1WBftI#DJt-~zD({>/-;kZM-$KS~HT!gnF=k.K8>j-CN2p');
define('SECURE_AUTH_SALT', '. ~y9?{^}[vD2TGY`XnRA{^YT*8Js%PO~e8jY]XZ/d&^@p,BN}{](YS-1Nhd-bJn');
define('LOGGED_IN_SALT',   '>n>G_c j^?xaJ[Un@z.NE7`9V.J!&TK*yPN9rxtkErUbjalLY]W//p1Eh<:M8WrL');
define('NONCE_SALT',       'feyJe,S&45vFk4B!C3mEua#HGjF+e[KatU00 wrIZ}r5Zo-l5;*Bf:g+!EJ?VWXj');

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
