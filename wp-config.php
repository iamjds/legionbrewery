<?php
# Database Configuration
define( 'DB_NAME', 'wp_legionbrewistg' );
define( 'DB_USER', 'legionbrewistg' );
define( 'DB_PASSWORD', 'toC9vm4UyHYKL2KXBrtn' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'CP2qh[Zo ][M-7h.1X{n/8Y6/@+o;n)m@.-g|?*!1;XCMJ=bi$AzD^G2Us/hP`bm');
define('SECURE_AUTH_KEY',  'jppMu-*~GW=3A2}.#[dwQ3f.#Pa2SE3d.Iz})&rHbpwUKql/0I*AZu<>+?^5@>@W');
define('LOGGED_IN_KEY',    '#pQLecQw+BF~nk7wYuq2j6:|x*#e$EfIhT*KZv+`1RSJ8<X_^g,PGhfAYrbQc}@s');
define('NONCE_KEY',        '6_|)r7<]99zNXAR,57*, 84}KF~5z-lC4WkC|Ag$m=f&coe0z^-PL|Bbp(_c?(Xb');
define('AUTH_SALT',        '*BbkKkek)XrXKy.Z0`/.CeEttxGmfz%sOsdVyqY%fiTOV@R.|S9vwmMc|i)}!sT)');
define('SECURE_AUTH_SALT', '.?d[i25KRhzCe|v|x4k^ttH7N8eQ&Vml*`Eh|p6IS:t?~#jwzq5a:$@hfG}ao!0*');
define('LOGGED_IN_SALT',   ':AQkC$?+drXht<tx!^azAW69!^&<%R><$r)&vv;XaWNFu>Zdp~7pG)pZVUkk7@Z|');
define('NONCE_SALT',       ',v[+}{R_=fo]oQ0E!>WuJz*t+a-jK9eQ&U;p&kceX<k~bLu>)|GdRq$hHIC(e,UQ');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'legionbrewistg' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '5dfd047fb0bd762434890e98361e58cef9ab48d2' );

define( 'WPE_CLUSTER_ID', '100853' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'legionbrewistg.wpengine.com', 1 => 'legionbrewistg.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100853', );

$wpe_special_ips=array ( 0 => '104.198.61.236', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
