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
define( 'DB_NAME', 'webdev_db' );

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
define( 'AUTH_KEY',         'rFT1GM!uoZAI`1g_~Pd+s,rj[M=Fc]`vb(+c+!U;7/O}U,b:.R%S%OCr79Hz~:TE' );
define( 'SECURE_AUTH_KEY',  'ax%a#>-0J?p>z6;S;nir<TNZ`*#OpN*3/,wmBr]_Yr@e3?j[i#|]K/SlD.,mQ+C&' );
define( 'LOGGED_IN_KEY',    'M?~-Q:GEK-SG5`M{sq=b`RU-Y4A@{m3rD]5[++$=.1Kx[Ih3.E_wC+ibAFLS$:-}' );
define( 'NONCE_KEY',        '3(+Ga(gJsPLKU).03}&M|, S>tkS9*6r`0C}3Jl;kPp 2L4rrl5Lj+fco|BT#B*z' );
define( 'AUTH_SALT',        '*Dt>fV6w%NIat6_rf}~oI}eCLnM25uT+%jIWG6D&j7H3 wpo#clhK(arhm1NONlL' );
define( 'SECURE_AUTH_SALT', '7>;blQvjJd(_k,{|t4Z-(o;q2qf(|)9o}Mht=`/vIelIBij1Yo/U.TIgg#baj7LY' );
define( 'LOGGED_IN_SALT',   'UvR=^D|j5|)vj/lV:b6rYF//m,<8Q8)lI9`}.<2T?i?lzOaHx H+jmO26u6<6:SH' );
define( 'NONCE_SALT',       'e>KqBJ?gEHmd]NAzIU,C`l8X;/7}lMRr}6h-g9 r[c^?%=B0V,4}faXc%Lt$~I.}' );


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
