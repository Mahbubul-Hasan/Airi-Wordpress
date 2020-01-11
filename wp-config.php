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
define( 'DB_NAME', 'airi-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Mahbubul' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'X%GsX+@1LK*1!L|p{7Iq^2[fzJ-#z%aD(C1-!/(]N=Iw1VC~rgz]ylgceY~iSv]p' );
define( 'SECURE_AUTH_KEY',  '<Evi+s/Q$G paNBwQ5mm!^5Mw062[~ABh%vJ;Hqb]QrxLE@CiN!hQnE$(..>G&V-' );
define( 'LOGGED_IN_KEY',    'HX2W?8XDvi[z$:]xJ!Q4(YC_HFBA]OorTBN{JF<:QdA*H|,^2Vbz|)PdK*LneQ9T' );
define( 'NONCE_KEY',        'X%,CM5KYB1<cO/$J([NwIz3q/j-HNP0lUZu_E$&LXt>RC9oy6%T3BS<<N9c:_8S!' );
define( 'AUTH_SALT',        'kVF<5P_~6,5BBh^7;[d?@G-!BmMqSH%}@@e=EKnt#;I=SJ`LEJFwUwE.Dj*]-y5g' );
define( 'SECURE_AUTH_SALT', 'Qobz)jreCwO!Wk>2!4aiv_pVACo+VjtU01Z4b*#li!)WS7.y[rCXJMdUoS{-EK)6' );
define( 'LOGGED_IN_SALT',   'FM/L/YBNGwo-rAKED#zzY0n%AHgMP~=)@}yZ1)ftna*v[LE^ziTDyddz:qKOdnE%' );
define( 'NONCE_SALT',       'KSGlA:tB TJ:|^x/q$ebb1u&YcA>vvu2;D}_T!,)OWI?&En()UT6)+:~J,A@&}%6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'airi';

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
