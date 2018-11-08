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
define('DB_NAME', 'nexus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wagner@123');

/** MySQL hostname */
define('DB_HOST', '172.25.0.3');

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
define('AUTH_KEY',         'OVCKp*Ep6)kVuN%~I- NVlu_& g}BOmMZw[?H6ClmJT6z>f<[0esW~`!SM>,;7bR');
define('SECURE_AUTH_KEY',  '<[20*,7&aOB^&]^aF``TC~afB4~ f<yJE}hg&E>Xt[:yhTfW8]SM<0hAF^e=(5&X');
define('LOGGED_IN_KEY',    'nMLU^m7BH{^#u:U)5J+-T;e&F3hTPxS{yd]>@./eD(}by|%:@Y{e$Ksyl5Cz~jBC');
define('NONCE_KEY',        'FJ||mf:6nmFttDx0]JemNuM;.y~G5Fprm&gM8^T;Rjq2/1-O/f5j#E*Q#o^n=TiT');
define('AUTH_SALT',        'i!VT$<Pm:u]cPXy64@D1{,t(kj%RNCj93p$oi2#tK)JD0-hI%)<Q!IL4y3l4apC-');
define('SECURE_AUTH_SALT', 'o(xW$k[O*)dzAtT:cjuZR$dz?GnU<!wtb.W0/=qM$Oc{Nwg+]_n{;]~WS6F`AAIk');
define('LOGGED_IN_SALT',   '^u0@U^QMD,7x9Otr+9?37kz#<31c+J5BQ[ju|<iPOT]h9Z)v6`$KzpV;>s7nJwCc');
define('NONCE_SALT',       '-d:]~Ghk`jrL<GF!7n(X2LP>mg:9}*/He#,_H3Ots)gopP^h#U}n%Nl&(5+}F$<y');

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
