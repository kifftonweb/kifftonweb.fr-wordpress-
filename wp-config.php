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
define('DB_NAME', 'alexandruzktw');

/** MySQL database username */
define('DB_USER', 'alexandruzktw');

/** MySQL database password */
define('DB_PASSWORD', 'Kifkifnet40100');

/** MySQL hostname */
define('DB_HOST', 'alexandruzktw.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/gu3SbNxStIh3xAjoXM4UEcEBiaMmrif624+HvaAxrWOa0yFR+ZJ3JMBydGF');
define('SECURE_AUTH_KEY',  '75jqgs/tlxpDDFlRQhkgHKYv2+ha4zan8qEFORWR1AtVylLPIzeFWTYhoQfA');
define('LOGGED_IN_KEY',    'q3b1oTDTkTrG8VG89ej/STs22oSiwIIIn1Lmy8HY7yZe5FRyb7oAtIUDqv8y');
define('NONCE_KEY',        '+1iDiZHKkQ6iZbsoCjF+FG3dlKwMkSm1/RaeBXydX00uLWsPzC0dYZinzqlX');
define('AUTH_SALT',        'Zu/NGvMGHRUB5g5/Eghg8WicywpMD4cAPL4hfHlRIXHBv89splCfYd9GQQZ2');
define('SECURE_AUTH_SALT', 'gmkMtd9hAwGVgoP/JEyZsaS0vog29f1xxJleladFIQpgktE7xs4al+aFkNZj');
define('LOGGED_IN_SALT',   'GRRFeOWnvqvOeZlH/tqTgCjFEuLWXsZhIwdDsnh/U9jYCj6zaWDMshFohgBg');
define('NONCE_SALT',       '1d6rq1wx1tumXXBMJkVMQynDQ2DuA61GzeugwrH9WJ+mYSONO1BNWKunNLQU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor8243_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
