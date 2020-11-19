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
define( 'DB_NAME', 'wordpress-theme-ajjs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3=aUrG~G%Q&lasC|LB}Ir1SuIQi0/^;NNlB2`sX/2ogKA@yve4*ej.ge+?B:Wf28' );
define( 'SECURE_AUTH_KEY',  'P;Nk{KyK!p|#&8^i)C?3F>q+A8js.#|pQE>uKz-5!t!33C{iv2j@uW~{M  TOvn ' );
define( 'LOGGED_IN_KEY',    'rrLNo3#G3LdUSjHYm;hR0f3Q6F%QH,XTb]To:OyI8=.l@Zu]~Q8onb[U4UP[m4&&' );
define( 'NONCE_KEY',        ';g5UL;(uxN#c7}6O-v8ogKR0vEo3;yW80g0w.EI^W?w*zQSoXPg46;1wJNn*WOX&' );
define( 'AUTH_SALT',        'NTt60f#6J>CHr?5<=p^<fzkK`8qo|MHx2hpuh^.=^JDuy#v@w=>B:5=mV2B#iaDI' );
define( 'SECURE_AUTH_SALT', 'MJ+9 x1Uff3>Rfd4Hy;at#n?^ZXl^%Sv$R >l,4W?bm5ZLh$rtdBsI(!Yf6d,t]v' );
define( 'LOGGED_IN_SALT',   '?FtPd=l5o-W]9(_|m,[6+JiO6sr2M;DdkWSldyy/|pKH0wsb`1qYY-U=@C#+~4Qs' );
define( 'NONCE_SALT',       'daQCZw-47WvN?dz6][bM)Nz@Ot0uSi M^,OMPcx&~W:APy;r5grfy%c;JV#Ye:3a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
