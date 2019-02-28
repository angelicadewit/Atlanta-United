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
define( 'DB_NAME', 'atlanta-united' );

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
define( 'AUTH_KEY',         'Sud* s{|C_A$+AuZ-~v`0dWK{%eu?CqVwya0D6MC )xq+~4;|O;>x/|@GU+%B,lB' );
define( 'SECURE_AUTH_KEY',  '1OPEO/qw0R.nbg-k-/1_RHVt~K*TB.c2>lOxrD%q2>Daw|A``m4 _y)i}Wh [2G0' );
define( 'LOGGED_IN_KEY',    'u# a*@=1+jd~IY^ Z$6O;6J}?/HoBksa()akj8N^>O(T;g)/cDM`14)m:#TvI+T[' );
define( 'NONCE_KEY',        'NTLN8#8Q5NJFR*A]UO-gsi#_0})S].y-{l:-!eYa3nb(@MUo>K:?g)$[-!0m&a<n' );
define( 'AUTH_SALT',        'pf:#vW$Q6r#zdvQokJ~SR?2p4wrdO`n9BvV^u-]NXavIJe/ujVxTKLUx:0T<x:tu' );
define( 'SECURE_AUTH_SALT', ')n=G{!ueK45l`bHNTGJ;t[4FIl=n[@8E6K_*VVGT!*8RT^=C^F:=U(:UsNK=(y<(' );
define( 'LOGGED_IN_SALT',   '=i jx/5ntwrgy)I 9k7Q%r*Hq[gFwS!x7^~:h/:kYNnB!@HGDqF(M/R2>KUiP-bM' );
define( 'NONCE_SALT',       'G|/K4ZVJf*}Nsl@9t~gGfT;z_=Al;:`*x^`.rl@-jL@m<w*mY{Q ~$6T!68:S$#d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_atlutd';

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
