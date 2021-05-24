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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '$L-2jJ&.?:p4k,O IIr[z`D/I_`:X)GfcIU.eHMUs~agx5BKmlOU}%+ZDgfAG9XN' );
define( 'SECURE_AUTH_KEY',  '3c!p^=oFuL98jw_Km8?~MT4wi$Ob{+!/w2ar$C%h_Lr^3c~aH{WXsaBeeq|pI%i:' );
define( 'LOGGED_IN_KEY',    '`EEiJ{cFL=;$%(h..^!0[ hM5ivhdHXN=XAUvjA#0uoty4NKs(+& mjlLK>SGY1[' );
define( 'NONCE_KEY',        'R|q8/QdU#X@.U6W7?=i ^kW{~v?p=J+x`nn3j2w*C#Xy[8~%>&(I2DmWG[n$A>o]' );
define( 'AUTH_SALT',        '~Sp@WV]{bDr(gB}+~%X&u[VM`km3,I~X,;Q#fsf4hIl{D~q-,:dU78z]*NU:/x]r' );
define( 'SECURE_AUTH_SALT', '[5),^;sc`w)bWU/2&wY~U2~I33F XD6#+8a~&]R7!|H]+<v jX/WH+M2+zRk*RA^' );
define( 'LOGGED_IN_SALT',   'hLA!rQMyP)9@e~EsWw{b$Kbgf4TdOr,LPLiKeZk8S)$L{b-mWFOg(7QF.~,GcTc-' );
define( 'NONCE_SALT',       'RR5!!kPb~o8=f~}x[j/)( !`R%0|}NhC/xPLH3T[+i6Zk]8k0I8/>SK|@j-|}D1^' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
