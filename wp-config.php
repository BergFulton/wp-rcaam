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
define('DB_NAME', 'wp_rcaam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'jjzqiekUu3|P4Gx6o80LfF;<x&*.$/[>T,*tY%yGYkMFvdrMU1gqD0|.hKb6<ojs');
define('SECURE_AUTH_KEY',  'f?xRg([e|>B9#D|8X|Gz@=4uF:gOg6|T}:=NjdGGiI_$V}3AfA[[v}r<0dG`ra|D');
define('LOGGED_IN_KEY',    'WtSFw6=*NUt.va.^;1@,u-SU+[XrN`I+qqJ{>[P61hikl+Lej`:O lX% 30rbl9D');
define('NONCE_KEY',        'Nk*%Ck[89*wYz7H8%poE.:f)GoU5?%g|*#++g22aY%N]y%##Sa(VBy?MPTV>CH}U');
define('AUTH_SALT',        'tVHORIRG.3G.`J51+gp:W!nPw{PN`^Vj~!7iaj[=-oNI5:EVdRYv#0V_jhR 5lLd');
define('SECURE_AUTH_SALT', 'zodr}>lV6mgVMNz0:E*S=%*(`r,rz{Tz/+b{q_2_/|()}8b0,&:Z*S1!,`?=5k1s');
define('LOGGED_IN_SALT',   '-3&>E^8We)w}V;!mV=-!DQ <1/d{T?;&,P.!Jl+JGR2=)[]1[R85Lz[^.3(4o{b+');
define('NONCE_SALT',       '|O$)(B7QhSn7LW2W_`:WU(ppj*wn)dn@H<ZeP2U><smeSx_xWbEE_I U~)EW0<Yi');

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
