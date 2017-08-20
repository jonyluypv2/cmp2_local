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
define('DB_NAME', 'CMP2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0wa#A#9E-d[n?OcUZ$eMdlbS2GlEvjZ8Wx(L@/W$o{kqoM*WmX=s,.vW;Zk[/fzv');
define('SECURE_AUTH_KEY',  'i>C:&}3FiF&7H)d3yF9HEC#!W&w=_W!JA;@6L?M~6##$fTDaN4363H?am7gye>=*');
define('LOGGED_IN_KEY',    'Ik6Dos9zRc)j-H:Rz71dmQ~#6BZH&QZYZ,L>@AAKU^Q:^)sbhZ2q#FVQ vB(3F5~');
define('NONCE_KEY',        '_.SQ9J,zdmezWCNT<crUJsmaiON]c:f;!D}uNpl[e3hx[g,ay@xzhS-XPE2H${o.');
define('AUTH_SALT',        '-?4h6uFXEJ0uxBzo%swhjRf(gM00AV~L*<]8[:H`B/5?cnF(aCECB-ZQTg=BcEMK');
define('SECURE_AUTH_SALT', '~!&xp|zP{$)^0T^JsWd,Ifr=$R(kggy)vKabW*1wXN7857vWKWc>fXpg5B:zuPF;');
define('LOGGED_IN_SALT',   '.8;^28_);Pl Y:Wt~WZ6m3.W(-!_*Fo!HpDYjTC21K:ZnV+.n7u0.q2_4/5#.&^6');
define('NONCE_SALT',       'ePc]E2.=aG]hEh!M`MjXHi8 weP-u2rh);QM^/Cnj%_;g=@FIg2;}n-)dt=9?P|=');

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
