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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'wB9vFzZxB~XMzssr@&Ki&KqTv|sbK[BWtqo*6)>|EKW^Dr#/v(s&u35]yZ[WFc8/');
define('SECURE_AUTH_KEY',  ' jdG{;b6uE)>|-+On&}UT;,MpQ#-!I}q7;DkSfv;MrQdb-)V-T{2K4B+^|_ZO 9Z');
define('LOGGED_IN_KEY',    'T*&ea1+ M$Z@B=bQ|2)BEnP}R&IL^E)E+-sI}=mx88tNtMe^N8%duY?rFY|M>>3C');
define('NONCE_KEY',        'He*h,,|@sj8Iu_O%dV8rc|paCN8yQ;^|7!cU*g(H$n$tsJ2;Y*+#2WRkxu^H5DU8');
define('AUTH_SALT',        '$9hbE}%:ee[VJ2i,oo+n)Ge3nyH-,^L7$$ ->hnUj//new1RF)=`PVOM%_H.ZMk2');
define('SECURE_AUTH_SALT', ';z`DZq.%gj1}&>;}F7ORF,v8fN};TrJs.I4c-Qn]6+j:ps?QUy.aolGt,wO(a^yj');
define('LOGGED_IN_SALT',   '[XR#pxb3Q=Z#)F|KQ[]s3_q|Qja%t^_@1Ya{BDp)%S!~gOQ5QthGsGY/)KClm(Bq');
define('NONCE_SALT',       '{{0yVV,Vhgq_+9H0@5&OHTg&l-0O,@ZX}T.gU+D3Z~Zy,T3GA)|f;T7F|?TGY}HQ');

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
define('WPLANG', '');

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
