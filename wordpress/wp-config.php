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
define('DB_NAME', 'kleaner');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '[{ddib5.9j=w +%94P7y6r-J.[V.:.&7@QS>EK.yI]AQncLm6|U~vX]y].cfU@D&');
define('SECURE_AUTH_KEY',  'uR*3)}/l3C1V[7MoQ>EX*sQo?(c0kVhz#o[#8co5eyo.T0M?-me(kGpC(ug*A;b{');
define('LOGGED_IN_KEY',    'YoQlH>4#HuW _3oCyJAy3[5c@X_xI1iS6/|Rpao}4JJ4n|qFrngo?#Z3uePwG]w`');
define('NONCE_KEY',        'HUNPq~e:3su&<Wo`(=*fKhV)y]2>338n?^Wj._BJ=TddAP&s</>}<Zb[K~BzbvO-');
define('AUTH_SALT',        '6Q)V!TQu>5L+?d^H1K!l|2f#~(,?c)2v,f+V_pwQm.Tc)AFVT-r;jgXxsOr?{9QQ');
define('SECURE_AUTH_SALT', 's%JkD8*wpw|%(jkd31*NA&HTic]YVMykit@~XCXq#il@_.wj1Z5HJFR51n[J4qA`');
define('LOGGED_IN_SALT',   'HB15P+gqBI$CQ3!(dM>`.. 5sa[S#8B^r8>*qK;KeGX=s!PZP:<+1^tTIbiC=WJp');
define('NONCE_SALT',       ' NYq7es?_H=2Qe4E.@7p.cTRzq<O>Wg?*Sb Y,9ijw0%}&D6Jsd]}FKH]h%w)G#r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
