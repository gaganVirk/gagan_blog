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
define( 'DB_NAME', 'fictionaDBbc39n');

/** MySQL database username */
define( 'DB_USER', 'fictionaDBbc39n');

/** MySQL database password */
define( 'DB_PASSWORD', '5x1irXdlRR');

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
define( 'AUTH_KEY', '7nhS#-_sG1#xK5D1lVZ1w!|-C149~VZOK8C-ZhzZ04[|z@V48[0ZNRZCz@svknF,0');
define( 'SECURE_AUTH_KEY', 'Z5|:!K4N8BzkrR,zz@oG|}@VFJYM^grcf3>>nB04F0YJbfQ<nujnE.,y$UFB3rbf');
define( 'LOGGED_IN_KEY', 'S1~_h5]15]dDVGK~sod14[~oG15C1lKZNR|z!g4>[z@RGC}kVZnc0v$rFJ38@RFNR');
define( 'NONCE_KEY', 'wVGO:loZdOwlswl9~04[RGKVGocghV~s-@sG|8B}kJUFJ@rgR[}@>oC04M}gUYjU>');
define( 'AUTH_SALT', '3,MUIIQ37jrUYfIQ$^jrryn3B,{6*<TIPPXAEqybibQX.{uyy*jAI{3AH<;aiXWe');
define( 'SECURE_AUTH_SALT', 'oCG[4C|}VcFNUJQ@,jrrzc3B,},>rzFNBBJ}0ckNUnQX,{ryy^jBI{3}y^MUJIQ3');
define( 'LOGGED_IN_SALT', '*TbAIIPEqybfmtWe6*#_]t+S5D6A.]XeHTaDLt+emthp5D#][1-SaDKDH]1eSaahK');
define( 'NONCE_SALT', '[dCNV8CowkrzYg}4>>0z!JR4B4C0ckJRRYNz!goYNU!>rvv@g8F>0|}v@J8FFJ}4g');

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
