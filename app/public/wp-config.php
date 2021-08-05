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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZeQ5A1ON2B3mBRZrT6X4lKII0w7C00Pt7GCjfVss5ZXpwrjbJ1vbFmHJildilVzmcqdGZi8OU/nDe8ZUp+zREA==');
define('SECURE_AUTH_KEY',  '44aeu2zVuMeJIPxQqByBZfllw9FdFMX6fhcltBoiVMSSagp4PDUx66P/EP7lAAxtWRCs63SunM/24FKbWHKEXA==');
define('LOGGED_IN_KEY',    'WGDr7Y/PhGPm+DD3IAQ887/SdqkxPmCUPAQle/wFbWALjJ5vefuluT4Dp0EYEQwJM6/NOvqV8kUhlxIeg7r5Lg==');
define('NONCE_KEY',        'WrVHEs4CmUfepl+H7IhVdgIbRir5uhEf0M6Ugm+HxRiUAilTBboA+QU4ox8O2HAmeb+sOWYAZBcOuM5YDlPsYg==');
define('AUTH_SALT',        'UxCaW8kjX9JxKh/rZqC5qw4BCPQuDEMAjMwpxtQoW3tnGoPpoNkmoFQzn5M8ZcIQZICT1/XIXkBfla6u3DKPSg==');
define('SECURE_AUTH_SALT', 'M5SuhxWdCttKJQkg1MWZLKmTMT6dzXuADFjqR1FiqtspJyPUqnwoHChockwH3M8l7tXZ50+gysJU+dtg764zxw==');
define('LOGGED_IN_SALT',   'iy1AX6npBS2YAM0DnfbcUizpIWjJBN9RLSIL4Y5n8oIMGYrT3d1b8Zdm7n9mr0xRqJeF4BarPBKjVKea3VKmhw==');
define('NONCE_SALT',       '4+Df9N3CW9GcWc1T3nIb3qFQz36k2VTNa5wWuRzpimwCcGyDWWdo3A840UVcDlO2zJGhUZW3Tlu+zWGUglPEqg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
