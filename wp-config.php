<?php
define( 'DISALLOW_FILE_EDIT', true ); 
define( 'DB_NAME','c12390bkbookingwp' );
define( 'DB_USER', 'c12390davidk');
define( 'DB_PASSWORD', 'Kda92vid' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',                 '' );
define( 'SECURE_AUTH_KEY',    '' );
define( 'LOGGED_IN_KEY',     '' );
define( 'NONCE_KEY',           '' );
define( 'AUTH_SALT',           '' );
define( 'SECURE_AUTH_SALT',  '' );
define( 'LOGGED_IN_SALT',    '' );
define( 'NONCE_SALT',             '' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';

