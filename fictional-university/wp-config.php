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
define('DB_NAME', 'asr_fu');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Qy4;(Cx#!ajoh/Hwm?W*zVXad8ME+ dneh|mW^ZUASio!JnRmSvw]yz$QHBQZU}6');
define('SECURE_AUTH_KEY',  'R[`XfneUt7#,JB5$~zo}9&L5^$+:Hz~=@9@&R;DWTl7ftD|bYbpzkvc}&+tSY,)s');
define('LOGGED_IN_KEY',    'Bq4~lOcas?ZnB[_BXP`)-~vy35C$aFDFI7S6bw*@LZSeQlF ^vvjNy{>-4 u%PEq');
define('NONCE_KEY',        'Eq}bumF@Ywa<V?=55bj~C@.j7zPs[Pa#$AsX~Q168^ q!zp,x<.Y,Feu4oI z8h=');
define('AUTH_SALT',        ';[=|!w5z j]h!X-EQ~w^T=3G0M?hmcPyunGL&K#:q`s!f3r`UQLo^qozuH%jD:r[');
define('SECURE_AUTH_SALT', '~C%)G[.3[6(BJ_(QS3jI0H`pM&wf@oxLb V3iH.Dn!m4N#3vK0l)`R *`DkdL48W');
define('LOGGED_IN_SALT',   'PtkR!*3i{xuVMh$t(e%,#e$/i_o@X|J[[&J4#eS?<|F%D/yz:B-UM$H~G]>lcjU[');
define('NONCE_SALT',       'Y@g-?N!%l?v~#A7<-B8QOf>v6C&l0sLst(kmoC1G[:bVh-mSCzRD%%^I>.{<xk0}');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
