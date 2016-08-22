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
define('DB_NAME', 'letswritecode');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'FKjwvYVCJAydKBrE');

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
define('AUTH_KEY',         '~XUcI*AT2iy}Ids8Lr3~&a{!m[C^8Foc/%ju H5xH>q!?nvOSV~Oqw[tyn&|=G]h');
define('SECURE_AUTH_KEY',  'OSq-=p+E.rhGy[F1Gbdla^3vA<rLx>7{|nZh_c}M*ZrE<+4(?(=sp$6LOqs+QVub');
define('LOGGED_IN_KEY',    ']?2,s-b.f CMa^x+-!Fy)+q$WCF!LS}^Kh}q(NB6~6Be2.w:kYkECr*#9dWUqe 0');
define('NONCE_KEY',        '7L=@pB9g_tI+5^]m,P1u99;.XPHEKj@_<<;Z;|kvL;97iB743,|+ygaW]8G(|H;w');
define('AUTH_SALT',        'bT7Oy_n7r=?+ff]h]K;+h}:J|;_>g|C:.k5hW&>o;bIp@Osa r]PQ|`Q,)qJm;HO');
define('SECURE_AUTH_SALT', '*vs[kC;:_Jx;oM|oDIV3LT01 =81_@Tt-C0uA_sMT?9Uu}+3u1>[ne+j^LWxrx!>');
define('LOGGED_IN_SALT',   'UJ>=BdokJx5r=00SmEVo8W^ A@9}v,;SeK5N3OQ>S,<@u,}QEx>(yaZV2wv|Thv|');
define('NONCE_SALT',       'n}>T*|~s+R)+K7nK]DWuL(o #oo<Ma`Ez{>,Pe!12fC%[8:`M#|vwT@WVTQr-M!|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
