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
define( 'DB_NAME', 'mcasem2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         'LJv,)B4Er|)o5R,-y{WD#*+$_o6gAt(&apYi(@URVK0X.sHaJ@NV P~xIGJ8p|80' );
define( 'SECURE_AUTH_KEY',  '1jH: 9^MSOIR6PEhpQx{Z{a/>:9.3?o:5;:]N*LtVK0B6HICsM@c|ibDa=(0] &w' );
define( 'LOGGED_IN_KEY',    'z-Q,y.c[U(%|>/1==Qqcm z5(rWys.*+;BXliXt`Z/H%Dlf1:>hf$RXF.Fvje:6t' );
define( 'NONCE_KEY',        'Z;{i,k/$rpXCQ#Rd+<$kUzz40r=KL2IClxz7!9B>;77N&-1PJwP#_|Yd?5usgqG;' );
define( 'AUTH_SALT',        'D?bF*]Rv0YCrHv{W$Sn6E5+G,!h|Q!?b&Ep@gxZ/mH:H5DoR=Cp!*GRO0,*`f5Gn' );
define( 'SECURE_AUTH_SALT', '$Co915>p7e kE}McuK`Js-0ktTTt+Db1/~7~mi.p{6.0G@59Gj30kkig c8<^V#j' );
define( 'LOGGED_IN_SALT',   '#Krx#~n)XGqzyBi>YOG/}<Ne.Fl=^-JAWj7CDDFjpwqe;#v#R+nB44tYqK{ji2/;' );
define( 'NONCE_SALT',       '~^;@hh873nN<H)x<UoSsM3`5&q|O39OQ@WEVyuEE7A|I2L%<`7fb#`S-|S;)UR80' );

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
