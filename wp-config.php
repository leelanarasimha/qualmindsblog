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
define( 'DB_NAME', 'qualminds' );

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
define( 'AUTH_KEY',         'j4d@++.r89(PtR evV1>1+-lLZl@u~BT{j*b[vTL=Uuc_sg1C]pOP-JU3[!1mL,9' );
define( 'SECURE_AUTH_KEY',  '!IxeXzy@E,[0(N.EEN9a+vQ.#i*3?i)}zM2^Um4:]vU{^:?raW$H0H*]3Y0/Q4T&' );
define( 'LOGGED_IN_KEY',    ']hKFSZ,41s|xtVU_0rR[`$H;My`R%Sf2,LCvXli_[aIz3g?RoR;O,eZDw~ApxB8b' );
define( 'NONCE_KEY',        '|T^uY3~Qr+{;*+G<V.l6]l]pi4LCmGP0mN+;rgzx&*/15NH,~j_hn,$!*SRhJA}v' );
define( 'AUTH_SALT',        'n`75|F7cD.JF=K8kPT6Pph HXrT<E%;BF=R*`emsH#%/ljkv{,;9I#FiSsg^UR<t' );
define( 'SECURE_AUTH_SALT', 'n:,@}|N4C(q*PEck>Bd>@cf2/JH^oNz,pj~*2ksEFxoam.W58e:!!eY#?I5ihbx,' );
define( 'LOGGED_IN_SALT',   ':Xx;|3CU e=d4DrrU =`*@XBFVHPl<b5c&LMEams2rqbP,bdTm&fPB(rNsd`&FN3' );
define( 'NONCE_SALT',       'eht04.]wdgM%7x%}`T!p8l[*tm56X76V}0oddm&_ BHh2sho~@ ,o-Ws.^e`QAHD' );

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
