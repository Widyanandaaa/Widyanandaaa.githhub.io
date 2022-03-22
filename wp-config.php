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
define( 'DB_NAME', 'Widyananda7' );

/** Database username */
define( 'DB_USER', 'Zidane' );

/** Database password */
define( 'DB_PASSWORD', '7Az1Zie' );

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
define( 'AUTH_KEY',         'u`3Oz<JvUG9X,[Ex+o/0/ryyAp1H19bK.]skDXJefyvsJ8cq&p]RVHenZ%{B^ mO' );
define( 'SECURE_AUTH_KEY',  'LLBjq:#i_0*jd9Lp-6@-SO+bCxd.yfG,ui./5YFk3j->X_F%Uk%SMD?;vFy^)P-;' );
define( 'LOGGED_IN_KEY',    'rLMCCHPD7E4WZ,v#Qh4x7*[pBXDf^~a-W{X*<f{3f/=tzZ9>B,z@$Gq<<%CrgOs9' );
define( 'NONCE_KEY',        'aa+z--FR)ZQ!zby4c]6xBt>4Ww|oaY9(VmjeT=sku]Ze)uO#CCdx[D1;R7!$j.F<' );
define( 'AUTH_SALT',        'Zc!h~<nyQb<I|q01D:t|yKKswK3E0Z4}iW_n24#Hb=v9Jr7s}+^3=KGrWW@|iST=' );
define( 'SECURE_AUTH_SALT', 'LrWKM $gm`bkwQeSn%j7@R{gGs=9[~%dU/Nu`>R$~mqx>q&*&BQSVlI5=X.n%-U4' );
define( 'LOGGED_IN_SALT',   'A/&_[adXJ/,vE`(s%g~iJo$ -mR}c@?{N]NQ+ZyHvTRTOcRJia*t+Z<FyVmmt(DI' );
define( 'NONCE_SALT',       '=q8NMdF5?@]2eMJ<#TS,oi}v%nk?A6eu$AoB!zaq(z`YOTFg<D7Y{3zSaGJ{Am|5' );

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
