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
define('DB_NAME', 'db21488_laromme');

/** MySQL database username */
define('DB_USER', 'db21488');

/** MySQL database password */
define('DB_PASSWORD', 'F1r3dr@g0nDB');

/** MySQL hostname */
define('DB_HOST', 'external-db.s21488.gridserver.com');

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
define('AUTH_KEY',         'ueU-O!]=%maTsNv.Z(,kN;@A]WKV{j>O<NYuHuNdKUIg?M^rt,2yd5KXokk(c=<8');
define('SECURE_AUTH_KEY',  '?7E{tu9;%|cCg|$V%),Z+Z*_UR%;gWsz-`)l{})ZLM,?eOxG$-0F=/a8JU8CJaQl');
define('LOGGED_IN_KEY',    'ugU4j;7[{[4@x|PmIWL)v tTH<3Bzp%Ib2|8P14$%s$MgqxH.SW;y@h<aKBnNX^U');
define('NONCE_KEY',        'I(:{}=YbO#A(cMzCX!za%k5~-e)-L~ CqaJ}uw&/sZ+ELh6j3vDD>!]37tScj8vL');
define('AUTH_SALT',        'GY+;l4%cPgF.2|@ %s+/|&mUBS-:$Lt_2nVlN:I>xA#fEus3-R]_%s;7O0$L|S9n');
define('SECURE_AUTH_SALT', 'Wxs>Tyo-qew@kq[Et#D{?)IZ]+,%=@%j;x[ dFwt_;,).EBr-YB!kAKA!K+n0}z.');
define('LOGGED_IN_SALT',   '&.jULlu{+oT9m;go3f>An/#??Ck<PY{(I+MJ881#S)j7_^FC++*,*M 196Yk6*F+');
define('NONCE_SALT',       'Yg[}.}>!%<e}xPkJt?/K`fIqVyV8_=O?n:RH!= zw08gR]wWj,oP-W!-e;RMD2d5');

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
