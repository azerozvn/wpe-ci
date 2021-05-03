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
define( 'DB_NAME', 'wpe_ci' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'cEcEdSvq %F&KYZ?o0_lT1=R&;/N(]@?5:{,]rn,mbSjqjB@Wz4%6mjOE0Tfk[;(' );
define( 'SECURE_AUTH_KEY',  'BR<P{rAAo}NR+ZhWt]bHZzv[V(w^<:1S!AhVYM/ MGnIZ+mAlQdyS3_h4gG33-cT' );
define( 'LOGGED_IN_KEY',    '1K8I3WR.Fza`C>^p:~6o[nk*oalUDfF?wPyUp6>&^=pEmz3ic|r> $-< z41oP9o' );
define( 'NONCE_KEY',        'P50UAB%Hp]kx&v?)(y-9u$JG2~XTbPXu^6h%FLd?-/<{)TEQJGZ.?2Ys9s9T-q++' );
define( 'AUTH_SALT',        'GFoW8df<1hpXOvaTMngPraL5HKS;JaWtw!9IR]C$c*?x.4C?ES`V_6f3D.olwJQe' );
define( 'SECURE_AUTH_SALT', 'k>!n@- n0L7*8zdv*DZhw88jV1X4Z$x?nYatFPb0GA4X`,;U8?z(@}+p(vT14sk1' );
define( 'LOGGED_IN_SALT',   'n`>xFtS`D&/MZ.4KbBcz2:WTK0m{!x+`j3BK%l+6lH5 sI0~~ScIbVq.t3c9eaKe' );
define( 'NONCE_SALT',       '1f4*D7#m$/noHaN^]_<T+wHd#qA/Js3N4tKexRr-_l<=&G~]I61./LW0ce$QLM<c' );

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
