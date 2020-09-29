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
define( 'DB_NAME', 'ultranmn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '&@0e+*w(I+M}2,Uf_71omDm6h[A])=f2fg:B-0rqM%2i3;4Aa,geXw uhb{y(@KI' );
define( 'SECURE_AUTH_KEY',  'jqmcFJMy%lG0 d1a4|@CoT>.96Qp|xVErLS` /_4ICaNs4IF~U-z*T:-3GTb@4UF' );
define( 'LOGGED_IN_KEY',    'tm*yEGO{xTOuR$E|zzfpyk.yZUNpDf,3D_Y-U!~N~*}B-!H+1eKq<P6%J!QxL:KV' );
define( 'NONCE_KEY',        'sbrD6K|gY&WHk)moNy`(.[D$k!2sX,BgM8(z=*>&t9SOI5rTbCYaOJ}1FxT6XPb1' );
define( 'AUTH_SALT',        ';a|$+~BM(NY6z0hgAlYt>_`z5!nr;W~RJxn4v/6vG=k94$UaA#s_e30GG=<KfgJ{' );
define( 'SECURE_AUTH_SALT', '=@*N@sMT<4Qj~9OIs+=]YI0uC+xt|;z^,i|x1]fB7#sUwX(B6yk6Q;-U?35)ty@N' );
define( 'LOGGED_IN_SALT',   'LuGWkO[CS@_]zXzpIQd7MBY ~dtt=E8A $]8JE~oEQ&:JWAFGV?cY5PKUu%nbqyf' );
define( 'NONCE_SALT',       'F>b_BTHeT_(kO|_p#L+xFZ`jLHL@UHwA;x+AFzJ%2 MeSZ.%&HC/TXFa=w;Or=;4' );

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
