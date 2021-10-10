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
define( 'DB_NAME', 'build-admin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[U8-tE_3ZY3`4AY8h:tIF><@Q{7]^>1?152-c<o%bX[rpMk_hT?FH!nPh|e1L O.' );
define( 'SECURE_AUTH_KEY',  'K5+ Tm|*)W0q<j2~[C[^nacRS?D8e6e@Zoh}Lk[&zKpuxIp_|Zta[f3|km;lk_u[' );
define( 'LOGGED_IN_KEY',    'y#gjdxqZx^|C[u80d6Rt_P6(F,,ShH@7uB9r5+a(`ABt2+adEi&UO$faKXOfkoSz' );
define( 'NONCE_KEY',        'ko$PGlNJA#Ir%i[t9UZQDrxZ{>+fI-uV?jC7 ^qo 0PbWPp4h43}bB%W>]]4bNZI' );
define( 'AUTH_SALT',        's]l~c?`rR807g,kF,ujph<0*XoE4_c[8!v8siM9VV.4GbeNZM|7zARzUkr,d@?/#' );
define( 'SECURE_AUTH_SALT', '}8u=Rv?!m_*{EQS3rG+0StkZs7Kfn*jYA&/Cw&@^)WTIQN7y3>6QXhY]%cL>Dvi!' );
define( 'LOGGED_IN_SALT',   '3nZ$3$p^6uvO%J|<L&i,YpX@2}*|0?skP-YZiu2jrM:-f9+;hTmwPa2ID9#g7w?`' );
define( 'NONCE_SALT',       '!8^N,0pHr61?qii)T<#){FqXH=Xr}|*u~jAY9|Ft@w2d;<f!ZrmkvN.8U_(/+@Sa' );

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
