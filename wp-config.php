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
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_nivel' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'di mi clave' );

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
define( 'AUTH_KEY',         '!ua@,6q9a~^cE-LB89cxS2mz#{D@(k7B2R8/uf5+-~J;9(lyeYPr}oHz_|zMu}us' );
define( 'SECURE_AUTH_KEY',  'T|&DNh=zF+:Cy7U5+&f~n B3-4k|zrkfY!~SN!Hl4#[e:a+>G)=iLKl,#P8*Jg]Q' );
define( 'LOGGED_IN_KEY',    '-,gJ*1#L7,%OeOiD*!0iC?Hxlj|xuNP7ZKG$f&f%Iw,t9.4s v>cIf{LM-H,}*8M' );
define( 'NONCE_KEY',        'QE[iA.M,a<c$22fUL.4s4hbN>d].T82ryjC6@NGVJB*7akE.=8EU]8vXI2_yU1BS' );
define( 'AUTH_SALT',        'is&4|AsV9Ok*?5E=!T%7f4cusPC<E]~jQc1UYXju#?5`&%o3Zw;2g3tsY5=$[MeL' );
define( 'SECURE_AUTH_SALT', 'WqQuT(0C*88c|HT75P.ROxQ|^a5&tMfV?IMepHboZUv):Q&Q[F6~-^w1nLNv?~A3' );
define( 'LOGGED_IN_SALT',   'z<.SstZ)joS^s/w7Am(fie_k#?gGu?2Tdq5:iyuk2Ke|T}|vugA,h,~_rxgV076q' );
define( 'NONCE_SALT',       '8Y-XpKtW%VzSWznVLK4-WQYPB>19;wH~(v3?,V3=0y4Kgn11?kysF.E(F:4;l[]U' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
