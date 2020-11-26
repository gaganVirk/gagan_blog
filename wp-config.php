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
define( 'DB_NAME', 'gaganvirDBnvtqp');

/** MySQL database username */
define( 'DB_USER', 'gaganvirDBnvtqp');

/** MySQL database password */
define( 'DB_PASSWORD', 'cUOlroC9Fh');

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
define( 'AUTH_KEY', 'X7I<3y{uTfAL*+#ixW9S1H#p_lxatS5K]C|l-ZsV4K[G|1-ZvVkJ}F,4zcvUkJ}F,');
define( 'SECURE_AUTH_KEY', '3jrQmMA^6+{qPmLXA*2+<q_mLa9S5+]p#lOaDW5~]t|o-ZCV8K:s[o@dCYCN}v>r');
define( 'LOGGED_IN_KEY', 'nuPE.+aDP;L]6*e+amLeH]5+1wZlKhK[9~1-ZoOkJ:8!4@[oRkNYC!7@}rUnMcB,');
define( 'NONCE_KEY', 'Iy^fT6I{q.myXuT2H<9.ixWtS5H#D_1xatSdG#8_:w[olZwk!C0NCZzk|v0NBYNnY');
define( 'AUTH_SALT', 'qq*A;LmXyi.x;PDaPm#+2h~9]K5WKh_s:~8ZKkVw:!C}NkYvk!z4RFcQn>z3>F3Q');
define( 'SECURE_AUTH_SALT', 'GJkYvk,B0RBcMn>y3,FcQnby3.E3QEb$m<y2PEePq<Wti_9;L9WKh_t:_9ZKlVw:!');
define( 'LOGGED_IN_SALT', 'Erj.AMAXLi.y;.EbPma+2#D2PDa+p#-1SDdOp]-5|GdRs8ZJk!v0!CcNoYz0,B0Q');
define( 'NONCE_SALT', 'V!z4>FgUrg@r}JBYMj,y^BIjXuj*A{MAXyi.u;PAaLm.x;_D;Ola+l#D1O~5VGh');

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
