<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mseet_34237136_testqa' );

/** Database username */
define( 'DB_USER', '34237136_3' );

/** Database password */
define( 'DB_PASSWORD', ']8MS75[41p' );

/** Database hostname */
define( 'DB_HOST', 'sql311.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cimn2zgvoe8ccmdkrgoaikuwktsjx7iuqhjw90yo75ji0dmoy7giwa2qehn1ivhe' );
define( 'SECURE_AUTH_KEY',  'ldackfyuamdu10u8gmjlze6gszvjpmv1xpwzexdqjudoxgbakeob4v8bmbfykghu' );
define( 'LOGGED_IN_KEY',    'rzgt4u0lfnvivwyeikof2d4mhnl0svgu5ndxeqls4urfvuurji57gqr1cdpk4ivb' );
define( 'NONCE_KEY',        'by8ivfzqsx1c1ej48q5wwqpfj4e2paww14bwc2nt3ddzwiqznx3i5wdu5iow9slt' );
define( 'AUTH_SALT',        'aetzarppmbcie4mwpkl2g9bnrdxjy8vjiszmywbr7nhsqm6pnmcskcqjmvnbub15' );
define( 'SECURE_AUTH_SALT', 'mpioifvem7fwcmpiyzktdco76xqzpyrpg0arohotxvjdkg1nnfsfwrvdyovvt85f' );
define( 'LOGGED_IN_SALT',   'lrzuozkvyr9x6c3hfthvdglczfwhtsk5lchzsapb6fmdircr3kxjgtv8gcvrpp4e' );
define( 'NONCE_SALT',       'vfjlys0wmf04uhzr3zhbf3t93ibfuailhg6uc2sk5mqkdugtx6ot5j8out6lxnj5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6d_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
