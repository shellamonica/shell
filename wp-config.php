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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'w]u%KErPN=J&C8Yo,817XHVhs*(!mZJ,c9c)MMlWr@;1jPxZyJlt3-uh-P:Te>C5' );
define( 'SECURE_AUTH_KEY',  'kyT 9Yopk^CVUC=/vP)sYJUsl5ssII]HL1K8z+JXk%sy-H(*e#%Sm!_!YnZXW3{R' );
define( 'LOGGED_IN_KEY',    'nv _dy52YH@WHSAr_^tq())[saK}z^z8Wgr]R;u%+n1OH1A2f^V}77`4E9Dot-&Q' );
define( 'NONCE_KEY',        'mIC8M;+|(W6dZ Pf&fAY1q_Rw+g>D* |`/G&?<qz-&rz:M$0%EL2>6U LJWf=S.^' );
define( 'AUTH_SALT',        'Lm3]?ty/na=Bizu[!/&xQr(=e+92&ebn:gO;nxpc,u4dOpTQ*~&f<JCNu,~l2z!X' );
define( 'SECURE_AUTH_SALT', 'DaNPBU3e]Omo4oLGF`Vt:!zCT94`5M%mEl56k%boWe?FEBE>;L&kEZJ`x5(FKr{_' );
define( 'LOGGED_IN_SALT',   'iQ*.:`RqbTQg~2*9df,R59g3Y|-c+MSG_;+GpnLm6]~VUHRS!?$(Br$`.v1vETA=' );
define( 'NONCE_SALT',       'THT]Vd^P-IW[jKY+7_!nw)s!7)ZYz-S]&-M[DHd|MZ&TxOMbeeA+qv_Jf|WB:#X[' );

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
