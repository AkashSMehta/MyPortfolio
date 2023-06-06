<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'akashportfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z}v- mn!B2c1Q6cq:O!B=?yk@D#l7muy`E|8bgkm(I>](1.L_BS?Sp+F6JJm^tR!' );
define( 'SECURE_AUTH_KEY',  '1|s#tn}]F&2YLlMhmCYU]QF$`WHmdokntOVxX;VP@-1 /^QNUW7 9ri{vgC^s5{p' );
define( 'LOGGED_IN_KEY',    'bZIU47B~17<U9}Bbf8kEarna~QJA1w-CO,ffCA]^/^w&VYSX+JRq/0[BBjZeb`B+' );
define( 'NONCE_KEY',        ' t?0B9pzHFrOzrtK_Mt?|rU[>ZEFFXoF#K1:g27j/yObnegE.xoO6w}GI$]l7`=Q' );
define( 'AUTH_SALT',        'Qa5|F lTtElT%4wyRtT||A~hl>]t5<j-^m=#GksC?*5Pe3T&5eHop:9o:E%2E@1|' );
define( 'SECURE_AUTH_SALT', 'VE~L;?%1s2?7fs}81Lf7<O0dV->rUqI^AvVm~1vI(Mw&9Q{;x(_VF#}NVC*z^KH/' );
define( 'LOGGED_IN_SALT',   'P6hH|H5!pd(@iO0Y#mLx@#wsoq7R7F.JrsT*[>$X,xy|B!`}rpP7|ff9g#qUI_Cv' );
define( 'NONCE_SALT',       'Xbt0`Bo`~3Pk> `^kZxHg`<qOh;OOZe2~=Km3?p@}#1EAg1/~^X8.1I1koRVM7aC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
