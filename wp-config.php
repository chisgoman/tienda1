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
define( 'DB_NAME', 'wp_bd' );

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
define( 'AUTH_KEY',         ',/*:}kf)Q0wKX2mQP07TkI>vPtW?Nf 3Zi_2UM?+OApkV1a+|4@=ms83se0|imUP' );
define( 'SECURE_AUTH_KEY',  'htio*vjwp};<*L5d3?`xr[3LZ$a9J&RqsPi6w0-eia+bNOiKgU4c+#gzRy#wyx7|' );
define( 'LOGGED_IN_KEY',    'G1CGuzhTJ&BF9PCrRdnFoDVaQ1T~ys6C4aQbk$ai_;)Z?~H=Ffj+u6u.R]Ag#nqs' );
define( 'NONCE_KEY',        'ov[@/M`z@G?_Hd(d7}&Ut}1_uY~dazSmr2}[Q8&)BouVTn%!f9~qimO6>([:}O-m' );
define( 'AUTH_SALT',        'mOyG$L=WZ?[=R!.MPBp?<|/A:62-*n1UP`Bc(|:/pI&q)q{aIx.qBm-LcCPok5ra' );
define( 'SECURE_AUTH_SALT', '8pwU A2~> b iVD4XpSexO9XvIUZ:[)2.UEuF1L{FPr1qO|Df qushW52.8!mH=+' );
define( 'LOGGED_IN_SALT',   'Cf>5e#mC{G{?V0n{C.;jh8F1!w=FVfV,yJt.zDZ4bG`boTW+*kiVku/Er,~)aR5&' );
define( 'NONCE_SALT',       'Ka-;~o;2su9y8VW}`vCu#J^r[C0~a>BqoQZfA`XpK/DacW~ro.1.(x.$(i R]D+;' );

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
