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
define( 'DB_NAME', 'legacy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1IE zr[?7czy)6VCeVi5|DQ|fv.!!4~RshO.h0a9~};Sw.x[eAJ^!:Vk5d6l-y^F' );
define( 'SECURE_AUTH_KEY',  'iM1|s;orLEw8O^O=2T~xnL&zG42hnli!ji/b_@+9cVJp+>#L-<H(7 $6k{Npk?I/' );
define( 'LOGGED_IN_KEY',    '<*I#-tev8X|!:%tEo`7w1bvTz2M|wqQu3Y@Xg2x{cn<<e^Jy6pC&i0mB},h#I_Z&' );
define( 'NONCE_KEY',        'EoK0:kTmg o-:VQNQFuMR@A:DgOx6e#12r;S5+X7j`}Ue}nmu$aXHZgL44kMzzV>' );
define( 'AUTH_SALT',        'FCMym/~-YnElgL0I/j&HG|_rDnk`b*V!{tTb=(c/JiKUaKcw6I6}e{EY,-?(S5vQ' );
define( 'SECURE_AUTH_SALT', '$DQu4vSb}T6;fXME^Qmi0<77gmI_?lKw{i$cVH`F|j}` ZY&+LbORP!bDxThm/*Y' );
define( 'LOGGED_IN_SALT',   'LX<=:sEGoz{Bi C9X<cBhBzt_<6aVc#ptEL]2_jxPvPem,?him{|:OQ7zQExuX2h' );
define( 'NONCE_SALT',       '^1r+8B?3Mx%{<o(/d4I^62JK];l/yRu!*n`;!s7bIMvsbNJ oC6{M{Y2YjX*[i#@' );

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
