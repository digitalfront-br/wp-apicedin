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
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ooDX8niqlfOJ5KGi9Xc/i6AMAAJWm15wLyMFN7/aHjK0WvaQc2JjLY+FGSNlo2z1BdTlEXmZs6Oi/z59ToQcNg==');
define('SECURE_AUTH_KEY',  'dB7fHFIheNI8Zjxa1Ccbk7gTY3zQUxuvAIW0aO6yG517E2efh18gSPZ6HCsV+HaqXYHn3FDSyrMNGHYH9EsN7A==');
define('LOGGED_IN_KEY',    'pRTxZeVtI/XeiYDmDyzpbtBS4u9BIRGpvT7djpdZyciUFo7M7Z9qb9WbdGvqtOI4RszCKw3ecLSMEBi2YBvOBw==');
define('NONCE_KEY',        '5rjqdYtaw3TUzhNGgF1dbhj3KrsWisDsBEVuxXJE5Bc5dhZsAsld1DMkz2jA6GmNd6oxHzsKH82VFDoBaNnesg==');
define('AUTH_SALT',        'Spbjw5zDqW5qGNIi0hBOwcdNVI/J23gKR13WLyppG+Dn37c7M8q2+Engw4cAHH06LVo2Yi/250gy5wTwvha2ug==');
define('SECURE_AUTH_SALT', 'P1lDrtAzeDxgkUfRmMLxw4j3SvhcufsE8ISWHFm4D+J45RIkrEwn0ZMeX7w0XSF97XWoCJSnkrIHtPDggcuK0w==');
define('LOGGED_IN_SALT',   'RVhVPtZarDApBNyobJfWZ9T3I6e4CmnsFQL+psFho9kybK3AiTyW8DSUKT34V0Xjrbn6RPdJdnUEe0Iu5Voj1w==');
define('NONCE_SALT',       'BIQb0A/eorGRoOn5DTgX5X1367i8y495lVUXWovT2iRaKC43tJN78PCKicUNLONd07yN/aegf8koXFMUfQ7/Dw==');

define('JWT_AUTH_SECRET_KEY', '#HV$P}U_w-nolV5>2r:sY-m.u0Gc)VPN-7[jE+MadvSVk0vP5N5,|[|r:ePf;a}^');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
