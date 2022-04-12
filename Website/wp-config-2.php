<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
define( 'DB_NAME', 'globe597_wp580' );

/** MySQL database username */
define( 'DB_USER', 'globe597_wp580' );

/** MySQL database password */
define( 'DB_PASSWORD', '0Sp(8S71p(' );

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
define( 'AUTH_KEY',         'okylnnmgz9kbywzj5gqcmzbu3c6nwnl51gq5i14c9zvuml2baw47qfu6upvrcaxv' );
define( 'SECURE_AUTH_KEY',  '4molcwdsnfjmgzmfbddpncrmybg3saftfv4mzgbnqh9ovrddq9aenenarrcjzhn9' );
define( 'LOGGED_IN_KEY',    'ozycertsiwctujnhd0dnh5tb622vh1elz70ij3pjjm7ycilbae61a7bksvu39liu' );
define( 'NONCE_KEY',        'h3w8sgvge2ganswf5xudrzdexuw3uwmhodsg2ntcneo8k2oi5hbd2we1w4ykrraf' );
define( 'AUTH_SALT',        'qmgwzb46qqwcqkbhrn0qlc3t3rsrjgprmr3crnxa8vdwnsak1mwafbtlouonuyvq' );
define( 'SECURE_AUTH_SALT', 'cesdexbn1gt1pqkjstmpfjairbakq3xfemrb4ovyxmf5fleefagall5z2doqmqce' );
define( 'LOGGED_IN_SALT',   '60qjdouecmti88gzqhf03jhoppxt4nn246osdu8rwjiuvplwa7shnsuej1ebcfkq' );
define( 'NONCE_SALT',       'kckxlj5xni9ral8s4lcortopzo4qev6n0lfc0efqakx8lkaz2d6lbmdaadualeyq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmm_';

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
