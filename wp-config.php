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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '+|%um!g0Ek)YE}?sEEGbC>;~?d`VZKGZs[0$N5ThD9JM>^N59A-LkxS>.u<v ;rs' );
define( 'SECURE_AUTH_KEY',  'SdGP// N#RdHvTEuZzV|8U#b:BeD.<vmF})}/pg@3~rbVe^dJTE>)_;0~Ib!:sTs' );
define( 'LOGGED_IN_KEY',    '~NajO2Mb_II*$|p;iI/qazQ3HVN9Fg%9}6<ZnMRHh2!3Y`b.gH$y/.Z9G|/?*[*o' );
define( 'NONCE_KEY',        'e$N!V?Rm>e4|NbozYoJpZ[c9IN,Q$m;rKEvON-#p8O0dE%IUR|k>7v$+ZST`!yB)' );
define( 'AUTH_SALT',        'bbE/$6<^W@%:$2s!@TxTKA)/i>mp7bFf}V#[dR`7xea^MO(Ybf]6V3{6|2csram3' );
define( 'SECURE_AUTH_SALT', ')zX8L&,j~?fRBXiXD[chpK!DMbm].$lEv*?p+n((xS*Ts*+/UJhp$^dg3(V=,p%7' );
define( 'LOGGED_IN_SALT',   'Gxp`gqHyilZa#@@PXY{,} UVA;xfWHyN>BX1h!W _B+C4kYDIn{eG,N$qwY<3v54' );
define( 'NONCE_SALT',       'vOFA{x<YF42n/R@X{xqFWg//P{HKJ_QRS!*lFn,79LBC[!Rnq_C|5-YI%m9=7s[^' );

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
