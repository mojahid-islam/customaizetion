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
define( 'DB_NAME', 'customaizetion' );

/** MySQL database username */
define( 'DB_USER', 'mojahid12' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mojahid?*#0*#' );

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
define( 'AUTH_KEY',         '?=hPO,fiJ_}xC`g(iMd;`oO?!g}k9{kkY}U}Q21s1eAJ[!ni5*x$D6,6-^Xo9$LR' );
define( 'SECURE_AUTH_KEY',  'sh{~*FteL?Hr38=afc6$(cB,*Yi3(uYy9I.0s0G`Y1jt-*QPfAa6t.-5y_ 3~~!s' );
define( 'LOGGED_IN_KEY',    '+ /0+>_Swgth.xdB-igLm)MlnlC]yuHSDr(F@:WP,g}{WZlD7$e~O%y=plG` U|m' );
define( 'NONCE_KEY',        '.%K|r<@6xGq)sDmcH~cEZrdU,`mu:|GN?P.HP2HUlrk+O@86p3(TUb2Wg~8FV9gJ' );
define( 'AUTH_SALT',        '~Pf/Q8Mh>{Rg`35Tw-hH};S4X$~Q5Z/|pM#v@_,8Krd_5EnKF,PX#kcv<)I+w_&J' );
define( 'SECURE_AUTH_SALT', 'bV1b3fk+D5tH|Xro1c&G@u*jmNn+iQdEZrs}*]d>OxYrBu*|}o0{D1S2HT:cqH3w' );
define( 'LOGGED_IN_SALT',   '{>y%TTXeyYJ^[~$TO%jQ`/9jCm-(lo.R76 m*~xRI:}nwC5|j<F8jX/FSAA6N,wf' );
define( 'NONCE_SALT',       'KWxv8my[(<3!GeZa2I>p0J9Q7]aaTtA[k#4>u+jGZ0MG9h?<2w: ~]P1vJGK^Ma^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_25';

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
