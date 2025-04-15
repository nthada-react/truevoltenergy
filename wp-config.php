<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'truevolt_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5{PAmIY3t<we+xNOw+6]P(KXus1WS]^T`O6*nG!;gYYl^?:VN9WxAIRbCj#Jg,K=' );
define( 'SECURE_AUTH_KEY',  'f+CSNLP*AB<D}CwK9DH%|S7d@a=}9F>x8NMMbbaqa&O=,nq=TRO/Hv}e5USrtrAG' );
define( 'LOGGED_IN_KEY',    'z~_``V+eG>5$?r=b^P,WQ1#610]9GJG=w:s]cy/.<Cb0{g22Jt6X]<tpQ]%uz!Aj' );
define( 'NONCE_KEY',        'X]@XkIl;W,G:Sqg`%sEyGlWZ}Mft~7T{2[S/zHG9N`AKsI{ra%dYP=F:%UGsF4O5' );
define( 'AUTH_SALT',        ':lUP+g)HRcad=)2{={bp5*ijA$q&^<sg.K_T.n?yq==:)0kgMB/f8OVw}dhpdjeE' );
define( 'SECURE_AUTH_SALT', '3j2R!DSo&KX#u`otjuwuh5JF7BJy~,hS9jP~3%yw+=s1D]F9A`f>Z|zQPva;`@ql' );
define( 'LOGGED_IN_SALT',   'Pj2R-gNv,%trev;}.;Qb13)/2)M4[jcCubQj/|J!fPV|5e6vk;! w9|//dt;I%jG' );
define( 'NONCE_SALT',       'Gjg`,0tuh@&QtPsE87,zSRJ[+$$v:0N)p>$(<QDT0n(fX~ra;iR#k+siDrG0=._?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
