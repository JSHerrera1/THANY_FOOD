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
define( 'DB_NAME', 'recetas_cocina' );

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
define( 'AUTH_KEY',         'Q|~2YB(QZ18Ui%t6[%Kb.(wXvCP1:&X%vBO/gG+XvjQcq# 6i8^ g$mXme<9]aZ7' );
define( 'SECURE_AUTH_KEY',  'Om|ETyl8k3A^_#g)Z}!a$79(i]Wm]$@Q5p9Xk ?>^2DgS7#n usqeF!x~u Ww8vc' );
define( 'LOGGED_IN_KEY',    'j]q7AVA TLL1?${f[{6g6@H,C&,~$oc_0Vvg@CvbkD]TO|-OJv?7crYt[<Cp}aD>' );
define( 'NONCE_KEY',        '(V,L3T>kDcLz5yqArD>Mst4e1+dj PCP}YGLlIJU^:?!r|.SgB4%f9XEuX=ZpIC~' );
define( 'AUTH_SALT',        'q},/O,R.=qJj.u5(PyQtJL#c t8|lKa}3^17h,w`PRkR20-ib+Blx^xrJ4-xoB[|' );
define( 'SECURE_AUTH_SALT', 'Wt6FJRd-8Vf#mn&]5rz(s~!(t%]VsO~hg@%u)A$wjr_F qDHB3;MTV 9,;}&v+%y' );
define( 'LOGGED_IN_SALT',   '1H!tPK!;=%YR6p<C,{]#c_p2zUznyLbO*B~~^X]iyVZ-HVCAj@SfC`E]Yp<#HNVL' );
define( 'NONCE_SALT',       '#a[TF*5D#Kd|<Jo!|h<4D4NewRW%7E1D#Ym8!wmT4nPKp+;9sM2]}-y9$Y-v1b,W' );

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
