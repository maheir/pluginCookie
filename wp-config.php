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
define( 'DB_NAME', 'Furie' );

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
define( 'AUTH_KEY',         'ifMsa>Ey[Aey+.a)A.-7}i`jy+!<~N-V_W}P4F@a51s~A]OIeGW9yjT-r3i~ull*' );
define( 'SECURE_AUTH_KEY',  '0U=lk25k?yTEFE0Pn1-<8;p}?z;y3 ^Y=2=8BqTL7rU|_a UnZww))GqP:8X~%)r' );
define( 'LOGGED_IN_KEY',    'L6;[ZhXM^@u&vM[o[cxw_TP5*,vG}PQpcvTU]3~4h-awi1--e cjA0X0}ne<m(e7' );
define( 'NONCE_KEY',        'c|ZK|>9g; 9|idA$a,BB?CE>CDQ8Ii <9i#O6#`:CpO3ds>0IB$q6-_4{Wm.dnC9' );
define( 'AUTH_SALT',        '{HU3$0ctA*d`R-!Xk!k7NEKf.Zy?@y+|..d2Yu*{mU&I@fPyODmeBz%>QA:m0~%A' );
define( 'SECURE_AUTH_SALT', 'X<>IU<qXmq6^QmRJYpo[Z{L@eJ&L0DIf}fWD(|p&AMX1n]V!#LsnvC@N20nhF:3m' );
define( 'LOGGED_IN_SALT',   'M4qK:bNYO+FxNm3Eap?[l.)ayrZZ/QF4+4&6lZ}X_I!A`u*E39K[k)fP!UBQH>gR' );
define( 'NONCE_SALT',       'b~y0Mt &T38-~f8Jo(IuMs3}@8WQhd4Ha )(k`#)n3C!zbSoI4)9D8~` |bd}a_}' );

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
