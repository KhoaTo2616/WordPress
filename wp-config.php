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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'r2z0qaaA_+!Z2rYE0+WD=Fc=8VP;AhB4J(I=ictjL3?KSkF3L18Aj1KmR8KbZRAa' );
define( 'SECURE_AUTH_KEY',  'usT;H+ X&uk}]L1kMBfyvT-}bymy/6ZEPQc;ip<Q9vxR:[1=WNNs:8_<k7u=ED7D' );
define( 'LOGGED_IN_KEY',    '_+)1-;lS$Q)nWo-gac!f:+eY1B<]CKz<%nIg>E=>>(.O4MTY/-FL`qzFX`7k^;gR' );
define( 'NONCE_KEY',        '(ARXSuR7q>f0~FjR3~yZoL)B{[{q2bp/@uixs4qWhYqV #^Ej1j&Lhitfq|rEDSq' );
define( 'AUTH_SALT',        'ojT+(mAv0K2v4Q8PI5e:pkxMTRki%4ib8:*#E T-W bqBoOBOFk@p(]Z/Ck-J{0e' );
define( 'SECURE_AUTH_SALT', 'FOyq,Xr.$[%CStmwI$p30sa=tD7m><(3sJaIsF3bQr_{z%Pf.}=nTyAw/MTQxGp9' );
define( 'LOGGED_IN_SALT',   '?z4nh5`a&*7~A(ZiP2:.4qz<WmvGV>:|3>2rDAKU#Y0 :,]egu[0zBaSk#y %DSd' );
define( 'NONCE_SALT',       '`[Ci|7V+gmhbmDg6n%4[j4vb|v-*}5({mG>,4/#CmENl`KRXG4q!lh1=5~3j^[LK' );

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
