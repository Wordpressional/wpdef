<?php

define('DB_NAME', 'hack');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('AUTH_KEY',         'jzGuG1zCawhx-@QL/n=!|BB3^S5B$3%OSyR {=??R*Z=Z,)0wut(6SbzF&R*6{E+');
define('SECURE_AUTH_KEY',  '%x`Mjm!_3mqzVb&3%*=yFdrKcsF7 Va3ItM*wMPafZ<>>u6sfqq(;BZuE60 4CPY');
define('LOGGED_IN_KEY',    '/!4&l}tmw8$iWj!U0/>%}CmC&2knL3]j7Yq.FH&MRsbO/A~~BQ[SLdBVk@GQUTOB');
define('NONCE_KEY',        'heK}pMbM:,Lw5u<?,*4N2%zp#v:7zZo S!bbee`)]Vr}+#bPSC9{j?&Ik#uqVX0J');
define('AUTH_SALT',        'Gw(ms|YtuX=Aby*?RI;>vD`BpMKV;!7-&N^^-%+t{Vlc`-<8I1UPt|#~0T0<9]PA');
define('SECURE_AUTH_SALT', 'UD|$Xnz&6+Bmm4(jYAq3XGutZ4.znIT*$#g))n2*gnCjkl3[N;ZdDOU!=c0~tjNd');
define('LOGGED_IN_SALT',   ']-Gh Hhp.?V6ml,>LBoa8j?[~AqXrBaw,e#],6h]Bvx9uAuGvsg*s[ve=$F=#yB/');
define('NONCE_SALT',       '=ovD(D*{}.{0SqgEgWL^hQLxR7pK,:_)oJYabmV[_[*C:{bA`@<>m=vl>J`-,1!V');

$table_prefix  = 'hck_';

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/app' );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/app' );
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/app/addons' );
define( 'WP_PLUGIN_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/app/addons' );
define( 'UPLOADS', 'app/assets');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
