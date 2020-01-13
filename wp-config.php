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
define( 'AUTH_KEY',         'x!,LJF/oOuqiB0K~,;6{U2ej5$E[7AVQc,QGU50uF7p_,%$PA5hPIBS&z):(t&^T' );
define( 'SECURE_AUTH_KEY',  'ff*OV=*:wg%a- 6AqVtB!.!IPhb/i}pvJA!NJ|,SJ@Ck^3KyZn?~Z8fFaHQ1R?KM' );
define( 'LOGGED_IN_KEY',    '.oR,?R;bx5tEpdO~a) )Eu7O#yn8g9s92/H|oNK?A783C(siY<w*<Y ru-%q%7/t' );
define( 'NONCE_KEY',        'yE98qw7e{%|#?5+m,&ACi4<)~4NMyh[rFeK5_;$98n5Y3w_@Q-%0lO<>r2d5pEQU' );
define( 'AUTH_SALT',        '|8#Z7JOJq6sH>G$20.<JvS(R}$P]~X9,x2u)o-)#5lLRb,DFgYXi,o4zNm~x_hzO' );
define( 'SECURE_AUTH_SALT', 'EL8HL|zS(vsTVI,H*F974rhe-Ph.$%yPhs]7E{z0w)Q)m4Gz;7g/9.)/7?}|YrQ$' );
define( 'LOGGED_IN_SALT',   '^&0AVs1|kxeSJ?_/{Iv}d*>&k@#]Kt]EH8bd$yt@w!?m$?GX]ot_EY;W@imQRw7%' );
define( 'NONCE_SALT',       '=$i43P)&}MX*F iVU[%|$+9d@%Js5iTcW6T_im5a)3(|(A,{DNu1D5{;Qld/nnJ+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
