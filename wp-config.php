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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'build_bd' );

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
define( 'AUTH_KEY',         'h$~_ybcyK)R.a2puAuBfG{nMRR~,r1rP5HT`yS~Jsvp~rOfTAz?J~ANI/{dlGm]%' );
define( 'SECURE_AUTH_KEY',  'n{L3Hw+4Y+wFS:W{`QfqnEvEhoet-ECR<RzuBl Jxww%}e09o5A?Q(:_4e/<G:!G' );
define( 'LOGGED_IN_KEY',    'I-u?Pmhq&K~8kR7J VV3B:K,o|Qpqy5:6IY7Oy Og OWFfdJP0,;OEqjsvvKxjRs' );
define( 'NONCE_KEY',        '0w_>Q/BC4H}F*To.UR)MKOgGI#;Wjc76Jo58F&xkp2T~=dBw3I>Y$Ko~>bx?!@F^' );
define( 'AUTH_SALT',        'TraUr!%oFgI4o/Rlfc%rr515|Vvj^|G(PQSHzzD%,7)2A>OVUhpl@<R^Hm6cmE)$' );
define( 'SECURE_AUTH_SALT', 'CU;|-?r n!XUm/?*_&NQ%B8C*~MFD%jO3f7BC2wpUS(B{:P1br;C/Mg~m~s<0l/F' );
define( 'LOGGED_IN_SALT',   '>vCBh),jnlDL%jT>[CgY1niRhnJ7:$PPJ=zk1l;h,N$c2A[Y>mkk9AKei^,GexPE' );
define( 'NONCE_SALT',       ' ye6Wb]?|eJL z7_I6,^6OE)>`Z&ms93yKW;Poh)C$&th<IW0xE1W_ha84gD1Z=i' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
