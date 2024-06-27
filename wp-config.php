<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'S5hT)<1_`AJW|+EeI >M;l{%0! x!^tQ>fbLp@dD%xOb:3`6f}RQEMPDp;0EAf5W' );
define( 'SECURE_AUTH_KEY',  'NRZt,Jb4<OV<utHmVB}<Gw|(jofV?3bJ@QTcEX6DClWTr!s=4It$$%Gnhs%(aOMy' );
define( 'LOGGED_IN_KEY',    '3ZRefY0 v*SDrk>3s [OZhD:o_GavwuA&FPR()F|Bi$n;4~p4)[tI[#rudBWYTz&' );
define( 'NONCE_KEY',        '5lluk&]!E3HQluvXg!)F-KN@v=.1l-Cti4=F*_@$8%(wf^DGB4QmsZo%}_eq$@VE' );
define( 'AUTH_SALT',        'eZaPvxnwM#G;(2PtBe;Pj^Ui&XI.ihb&dWT)rgpU/!!ZN(PA>-WMQ=?))8Lt[Faj' );
define( 'SECURE_AUTH_SALT', 'V~Faq|p;xf;7_EA1X5E[5{:*C)6/-+c?4iUQrbzQ!soRziz<tVO@<DmAEkH2[+Q+' );
define( 'LOGGED_IN_SALT',   '#Ng/X99?|8W[)K=q*@G]:C!?K:A%%2<z{G<qyx^,X-Bq-r~qKBxSOZ -F5cT+DDS' );
define( 'NONCE_SALT',       'V_;TY@H$2}NLG/m|sE{?):`N:cz]WVO,o5|EJ?3RQF:7?&^)AxK1b(8jwFG6_w)9' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
