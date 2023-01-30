<?php
	define("DB_NAME",				getenv("MARIADB_DATABASE"));
	define("DB_USER",				getenv("MARIADB_USER"));
	define("DB_PASSWORD",			getenv("MARIADB_PASSWORD"));
	define("DB_HOST",				getenv("WORDPRESS_MARIADB_HOST") . ":3306");
	define("DB_CHARSET",			getenv("MARIADB_CHARSET"));
	define("DB_COLLATE",			getenv("MARIADB_COLLATE"));

	define('AUTH_KEY',         'BEn{EqLq+x?taSC%a[-i>t.kNHkSe?L;2-]ABUH-i-=[Nqel<g^^}[Sp80)>{u7-');
	define('SECURE_AUTH_KEY',  'K8-LVC1angT>4zchsB{$f:LRs3vcrM$e-?9r))cDG78gfY}Mx|B9b,@w29F_aH6p');
	define('LOGGED_IN_KEY',    '0#jJB%U~[Pap,|WCyC-FC2GG6YDGaqi[18W:1`v !%, ^Hha{IfM`){>B~Pvi/[G');
	define('NONCE_KEY',        'gz%FEYeA-!WU9^Vg-/+rI0*OBiQ-*iRbw,|`]bE)R%h2|ebq,B/Av-CWg3da>e?Y');
	define('AUTH_SALT',        'RZ*p>yXUU}41*.rC-WDy[zGeXdg,K`b{AVORK+/Xz_/PN^zpcVI#m.lFfCL$ X}w');
	define('SECURE_AUTH_SALT', ')!@p-{t]HA2(3BQ|sYJhu!8)||koIX)^BkMArAM<gO?Q*{ D4_FRUSfESvmbmGD7');
	define('LOGGED_IN_SALT',   'Rf0Ok.#>6MIfIX}?A!H>YN+{FR_aO&wT-2v:RKLjMr)?X/YTlg}m.j34x+*JC`e?');
	define('NONCE_SALT',       '33A)Qt(eThP,n|j,#U!=VU[f]-pXFL:3&@`+Z{93FRAgzKWK58!-Rb:9Jv+A($}3');
	define("CONCATENATE_SCRIPTS",	false);

	$table_prefix =					getenv("MARIADB_PREFIX");

	define("WP_DEBUG", true);
	if (!defined("ABSPATH"))
		define("ABSPATH", __DIR__ . "/");

	require_once ABSPATH . "wp-settings.php";
