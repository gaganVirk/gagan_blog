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
define( 'DB_NAME', 'virkDBm2vx');

/** MySQL database username */
define( 'DB_USER', 'virkDBm2vx');

/** MySQL database password */
define( 'DB_PASSWORD', 'SePvbS8gYE');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'yBj73,YJzj73nY}@vg4|YJ@oC[cN!soC:gN!sGCwdZ[|VOK-wdC[_hOK-wp95lhO:');
define( 'SECURE_AUTH_KEY', 'N,rjJB>kgY>,@NFB4cUQ}yrQJrng0},UNJBrjgB>^gYF!@kFF0kg4|VGwC:gR|wK');
define( 'LOGGED_IN_KEY', ',Fzk8>cN!roC}gR|vJ0kV[zN8sg[|Z|wG5lV[-O9sdZ:~OCtd1_WG#xK5pa;~O9te');
define( 'NONCE_KEY', ',rF0jU>vJ4nY}@RBvg4|kV[zN8sc:@RCwg4|ZK~oC:hR|wK5plV[-C9td1_WG-D:h');
define( 'AUTH_SALT', '*I6$QA^qEfQ,uI3fYU,$yUB3yrY3}>YQMFvnjF},jcJ,^zJB70gYU0@vUN4vrk');
define( 'SECURE_AUTH_SALT', '-o81:|VOK#spK1[phO[#~OGD5xdW5:-WSK+tph1]#iOH#~lHD5mea]_*xH96xeW6;');
define( 'LOGGED_IN_SALT', '3yQAqb{fQ,uI3nY}$M7rc0^UQBj7>cYJ@nB}gR|vJ4oY}@RCsc0!VG-k8[dN!sG1');
define( 'NONCE_SALT', 'Hple;#_SLH_piH9#ieW#*+tD622{xXP6yqm6<.TME.qjIA<jfX<^$uE73ubU3{yU');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
