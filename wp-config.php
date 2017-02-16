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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'oneclick_gpm');

/** MySQL database username */
define('DB_USER', 'oneclick_gpm');

/** MySQL database password */
define('DB_PASSWORD', '%}o{{=XF7{m6*Tc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%r+,u~Ye~Ti~M3qADW-J]#k<$0,TA5T`k3fXiSY>Ayg0#<%.`e.8XZ4,wB_BZM^$');
define('SECURE_AUTH_KEY',  '|Ue$9fntvFz-Q@_DpjZJYt:p8LgP;fpW#QLBd>K4unK|+b!D5lS>l|m@$_m>|9Py');
define('LOGGED_IN_KEY',    'CsS7nt[0mT>v=B~%.1q^3/E=]at3zS;PijwK}),]@[k9>ZYc ;vrkV`FJ5U/UC(B');
define('NONCE_KEY',        '9zh@9@mKQ]oP?_I4LJ+gKSLuuD-bv+IMz]kzD`~uy?RM+fp=TkDf|05SsXqqOHe>');
define('AUTH_SALT',        'OI<S5I}21]ridwOHLlFS,n)l|YupKODN%:N)a{M_zR$pFhL ~i,0S GhkYlqa#n&');
define('SECURE_AUTH_SALT', '%D`8dpGiM2),E(=`jUx}MH5Z@[N,7@bUdNjd[l;##v}6;&:%(Bf&oU8}UD6O;aVK');
define('LOGGED_IN_SALT',   'aa}&6&PCH_Mq5`cqT-kIlP>4nVYbAXPDBE{-y,d]a`_.]xWzd,`B!?AI2%G`GWkX');
define('NONCE_SALT',       'C<d[~!>w~BBjK{UgH(rRr:(8`z<VF=YX FP$ktp{%>LB L/SIA.]KNmRCfOKH0?O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
