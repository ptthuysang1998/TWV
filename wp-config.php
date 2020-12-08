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
define( 'DB_NAME', 'wp_twv' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME','http://twv.local:8000/');
define('WP_SITEURL','http://twv.local:8000/');
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i A?&{UIixV|b/K_8dbXar_+6UF8IdJ_14y[nH|v=^,m<boC%?j@$wEv8u=,^>#h');
	define('SECURE_AUTH_KEY',  'Ofx|-70>{%>:mM(wy{QOVA]3`o.BF4`_aEz~NX;O~:}KdueO0iBT;oV  i,*ng+H');
	define('LOGGED_IN_KEY',    '4|rTdeN<1HYp*|=&s,S#/i;n(-V!XpxSed.Nvv?lV6w;5pPTzTQuVEE~%Dpc5^Br');
	define('NONCE_KEY',        'bJG],r^]mahGrsgVn|(1x=w+,&vyo-l}:80y}C$V8S7!@N<D7X/oXIpLu=^5Gv8o');
	define('AUTH_SALT',        '(+4R}_*gJd]A a3RY$]FE%(]F3[$6Vu7}y{e[v;2df;vw56xj2e;l`v+0gF)w)r*');
	define('SECURE_AUTH_SALT', '|}CJL##zzS[L_-TbWP60`>?0F{}66Ob&*E+fq-c[]&RRXRwRthv(1&hqRDwfh-@R');
	define('LOGGED_IN_SALT',   '&yQN(SqcuL,#N+H. 3~D+jz(|m8~F+@7&I*6<lq-Tx0wVTH%p9J^fM@1b3@;10+~');
	define('NONCE_SALT',       '$<?[G9,BA$r-sm.SOH]:EM+Kt:Mq^6*U+{1Nf|8ST,0B*W^^oC(yu|.< `c|-F#>');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
