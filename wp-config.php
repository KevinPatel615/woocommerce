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
define( 'DB_NAME', 'project_woocommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^bHe>T)oIv/.(V(q /JdE|X7)AZv^t:>Z<OMUA!UuPLkVb$qD_%#cX!48)dbFv4C' );
define( 'SECURE_AUTH_KEY',  '!J`MQC<#67<z$H^+&SrYPJ}wBA4oKkJ0|{zv56/uRMk|)Sc:(*. n?q[6UiE6[le' );
define( 'LOGGED_IN_KEY',    ' 0Su+QCon78<5MS=ps!}{<;?RQBDjrFxGH>qknVjlsLl,0,Qs=fA/#`]c+,*XpJt' );
define( 'NONCE_KEY',        '=hTm^K30cC !=#rYEuagL97]vZrMmbXg]1C{>?uO]2t+OCk7CAEca.%&H@DvMTPT' );
define( 'AUTH_SALT',        'YGwuywCbmr /1=0KM>>(`ZGMr5g)%AThDY2O(< 4q_&GQ0:%8N6D&8Mre0]:V5*n' );
define( 'SECURE_AUTH_SALT', '.h[K5oV`-RAxNP<G+Q ^k0l4:5TQYopsy%5( u9b:?N+Ze+9 &,[&?-cC&G<eD*X' );
define( 'LOGGED_IN_SALT',   'wNluF)]n&s/#mV!:|S@5j#TEl^--&cf SzwAkecLT.qS)S5+oQgu]r*@}+C-,5sx' );
define( 'NONCE_SALT',       'fENM`Jg5MUw]K<@-SmRnB`1|XxHDj$e@UsEUz={hTi_]+qTnte[~RhgZkQ^}Qi6#' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
