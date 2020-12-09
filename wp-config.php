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
include "wp-config.env.php";

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0hwe1ngVD1+QiHt0QkxP6THzRrnhWZ6md+cf/flx8Q++jfL+iBJITJx0GB7d5PtDVp6Cuni5CiAVx/5/Wsh/3Q==');
define('SECURE_AUTH_KEY',  'AeR3b9MqRNIQCTy0Er/N6GxGTUOijQM0ELBF1G2M10iuSbDhy4hHj0IsXZNZTlNMWAzQ/GV0uMp8UNsOZd3mhQ==');
define('LOGGED_IN_KEY',    'mXeWRuzXij7+bt2yJ8kqnkN0R8RE/MerKsGRpZRrwVQ3TUMkaKOhfioS9kcrptt0Two3wmm9c2TIb6L13oSxoQ==');
define('NONCE_KEY',        'iAalMEqGTp4SuGUdLOq+zkOFY/MeRSCNEnJF9zSptCCIIRK1AyV0qO93Jd9ThVARH3MOOo3yLXFCbEq0/oHBPA==');
define('AUTH_SALT',        'iHTCW/1O06rbi0al797tMvkvGDgx6rlxdPToPdGldX5sKUf2EAJEKPv8VyYdasXVz8PwsDPw4tq8e7T0ySvmKA==');
define('SECURE_AUTH_SALT', 'HZdreHCI+FzDX+Md7XUqpYyCDZRtVgAcWpR6MObMAMOSR+MST4x38DI2LLLQiBb86Ryd1LA6VeOAYSUCcigahw==');
define('LOGGED_IN_SALT',   'f3cAr3mf/vpBVZU5Q/cHDv7Pnz5kuXC6VmX+nDhEzrLgty2FFx6Op6ePOD1ku4oxk3i7lK5GisU6FWyiAY5Tzg==');
define('NONCE_SALT',       '3v7iDaHLjFpQYryVT9vO8K2iovolLkRPLqlsmRPmeHChtGzoHVr73ovNEHP2ksXaYIK2y19nyaH0lMZmme6Diw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
