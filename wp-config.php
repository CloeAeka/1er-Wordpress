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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O4ED3ZGs4bho4!)*#bH@A%!7I$$lk@ue7>M9|$p|rew)UPf_mpLKPhRF{#_uV~yX' );
define( 'SECURE_AUTH_KEY',  'rzp*83K(?RU,yE+4?(sB+v/&*?$C~-b>eWRAsS$C#Bm)_Q44cJpwPCpg%]6+p<U<' );
define( 'LOGGED_IN_KEY',    '(Fc%P12r[Qr3MWezEW*]Wj-Qt;y}L{MFBZ<scjo~Y&&mZ_v2^&)Jy;0,:4{?&#;%' );
define( 'NONCE_KEY',        'Pkel`Vt V<#BxE5d77?yo$a5/ZsV)+0n:}QE`NBCsDXXm4uf!H)CtP7M44&K+c8N' );
define( 'AUTH_SALT',        'nmrwEXdmxHa8O,$?0v{}hHC!?@i~:ks+e0f0r_OCZ,z~d2*!#J!3vj4AgW!?6WqK' );
define( 'SECURE_AUTH_SALT', 'f4xEQ|/D$-lI<J7;#0tLxLjt^}Z`FIQPi7K.Jw`5pqPn^Cp^0hq1IK%Nqq@qQU5W' );
define( 'LOGGED_IN_SALT',   '5V:POD(4]cPx7Dy5{0aglH>:m+AE[ZtSlWLUwu)yA.(7ivv:5!8p;/<37SxSEMAm' );
define( 'NONCE_SALT',       'h&^~R.Lp7HxO!_L[H#s>jPyViA.sLK=di}?>ff88@3waf[^yD<V]0kU7mo^O6Pa_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iwp_';

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
