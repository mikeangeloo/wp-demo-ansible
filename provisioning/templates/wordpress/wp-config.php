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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'bananas' );

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
define( 'AUTH_KEY',         'uVmKgz!&s8_aIy]D6B&qokQFq6x|Uhy4)z-^):zyH|5HrGT5&iVx4SHT}X_K=-(Z' );
define( 'SECURE_AUTH_KEY',  '3?.Y%9>b+;u#>XV`H8]OOaA+,:=V+iyn@^5nQx38:?}Cn`o bAA./NS/C:iWZNg$' );
define( 'LOGGED_IN_KEY',    'mT#+!U<R@;,EA9]W)pp>*c/V}9OJ:)a6UCQ)5:FfG_CNAB:L8|`@gLKSCBIIH2Wa' );
define( 'NONCE_KEY',        '$zhR5U+lW_WTVrd5O]sMSUlEG(J}<J~m3OEp`Nxe_j5<*|DwnE&:*X2O9&|ieN#S' );
define( 'AUTH_SALT',        'HMZ^d9Y|1mQurP>.f.uZ{^uqzriV;z56d#^4oJ%:VYAQsAY%)qYPc(bjwq.;GwVN' );
define( 'SECURE_AUTH_SALT', '=%9j_?X:TLj>oTN6-XhO`l:YL4BmWgAH)]p|yKM[kYYsYOlA>5DhwYtl`oX_A;&_' );
define( 'LOGGED_IN_SALT',   'ZiWDmT6+rKpkwyVIb=;KWm=:+i]UDp;_P-/zttIKsk+or72BlA<tabgXo_,IPK?V' );
define( 'NONCE_SALT',       '2(Mi:5h=D&-?$r7_69|4-$`p:v#Y)A+H)~$s;nzxSA1)LjCW;b=PKzr1>{+X^b#!' );

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
