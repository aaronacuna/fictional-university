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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_MEMORY_LIMIT', '512M' ); define( 'WP_MAX-MEMORY_LIMIT', '512M' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZyonQrRmdE4ailpqLjjKlhsk8UU3zPF45s4hiL5V1yUvZ2ZEv2l434AhgW6jkKIW+Td4m2YtZQ9abZX5KlF7Ig==');
define('SECURE_AUTH_KEY',  'yzghBFHUlwJWaOz2tf2POBKNRQrt4O7H2wnPe5R3Hr9k4Em6h2pSM+nNzgrajsoKbkHnQ1ecV2t51WnevsyuaQ==');
define('LOGGED_IN_KEY',    'V/Z8Hk+PbnW+9o/UW49S1qzwVFEIbd/6tG+0ibyIywTEIyGWyr/Q4sZkeaC6t/6+sql39AqYurWkb8pCNAZTeA==');
define('NONCE_KEY',        'cH6UYg9YJ8wgW+CEXIZsMwDeXNoiT8RfsCSIo8RzBk+YXG4Ha4f8h0YBeauHtskSHLy23sKfKmCHkrTsCkaDhg==');
define('AUTH_SALT',        'sdiz2ZxNl2yVpf81ldU+8UcPIBSKShHu0pEO42EnpodEIOiB8QyjMtf8kcJy1pgfSz0iLB5NdnVuNtJnjb1NNw==');
define('SECURE_AUTH_SALT', '84ivB2S2zp3Z5xpZzyWHh2XJJK87uCD978sLm2Z/3vBewv8982nz4GwE3q4bjxj8ZzmH8jr/cpXlYRipTLdFMA==');
define('LOGGED_IN_SALT',   't0AL/Sjm5evLCGqs20dBk5z+MpLTZhAOE3zl4s8UtCq1Q3SxqxeOSRtKzq0dMBdyPVdmiNbl3YoP9IIJI+XtlQ==');
define('NONCE_SALT',       'YUZrOY+q4CyblpWZdNtF7PC+vea8Js3afQVZn6LRzYr1HEOZLiyexHu7P/l/cm4XmIuhIkxl8yEpI80m4znZWg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
