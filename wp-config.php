<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio-site');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|utMZ#o)s%2;>o,_rs0WtbVYC6WI7AP*x97GKmxYNW7- o<Fkm1%Fg`mRV0_H1ZR');
define('SECURE_AUTH_KEY',  '[8frp|*=[s|92s%Zl`84*ju2KDx~JlBad:.wS.]ryh82?2aV|=M4Or$hjk<)Chmv');
define('LOGGED_IN_KEY',    'CS>10vd[KoE1fe(E=+EPP oh.BwxJ Po-w+@U=Nz+7&qWiFr%:aif{g F+?1+-Vq');
define('NONCE_KEY',        'x|J-+VtM<kboS!-7P6qm(z_m1[PE(Z-&1k&<t@K/K<%8iU,E9H`7^l.i+U;%SI2D');
define('AUTH_SALT',        'sj23oNXrJZ[IG%!WNuHCQ*1%8F$O|]V>,j<$M%Tsy>>k1EaihL^bC(STpGIBeM[t');
define('SECURE_AUTH_SALT', '<-D9dy=5lL~8-KM04kQ])--OfnEfztnu,(sn[[zH+EHcmw{7c+)io3t6+bm6p `k');
define('LOGGED_IN_SALT',   'Dy06tCUq6Uu<I73mg8]M#1f:N+:{kbgsAPl@Jho&<z[#$&>n(IQM=>O#m]ITG-ET');
define('NONCE_SALT',       '_10nPSNx7V;*5IcG-zRjDGO)Df1>ye,=4rTJ:lp<x=+[|-t=w)FAvbvnH|0LAw])');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'portfolio_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
