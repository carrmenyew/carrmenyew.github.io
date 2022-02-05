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
define( 'DB_NAME', 'bycarmen_wp200' );

/** MySQL database username */
define( 'DB_USER', 'bycarmen_wp200' );

/** MySQL database password */
define( 'DB_PASSWORD', '3(96s[1Spw' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'yf5ks1iwr0cexkp2nex52bfzavy3oxpbgzrrqka4o0k5ubxj6f26ryjykhdqhl4t' );
define( 'SECURE_AUTH_KEY',  'tqa9ivcsgbfvdkux7wjipndvi7f9benydasmhavlnnm3fda8kc9ljgfcp0smbwzi' );
define( 'LOGGED_IN_KEY',    'mazw31c9sgktgkdhnqpzlz67bv8isp2mchhl9vcvikv8o2adh5cwhscxpy0jq3wi' );
define( 'NONCE_KEY',        'k0u3cr861qndnxdv1n9sf3drkgmc9xtp9rkb2g4ge3fyw3lk0ajaaqai7cgidaec' );
define( 'AUTH_SALT',        'eflddzsoxzyhlfphzk4a63ixxbvf2yza2szam1vboseeydkdrydqn8yihsq3fxkb' );
define( 'SECURE_AUTH_SALT', 'cdpinbolitykrvi9uyzatfr6o2ifyl80fvbhkwvano84tgfeuninknriohkj1zns' );
define( 'LOGGED_IN_SALT',   'rywqko3b1plztmu2jabiii24mnsjo8xyncadvjipgjm6et5rz5ue299mazkg64ig' );
define( 'NONCE_SALT',       'mljrcmwyvnou2zdbbqzvznhvvwicre9v2hp9qgfyxigd37mrjhlbciu8oczppnxi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvj_';

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
