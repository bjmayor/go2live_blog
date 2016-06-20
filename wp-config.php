<?php
/** 
 * WordPress 基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL 设置、数据库表名前缀、密匙、
 * WordPress 语言设定以及 ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑 wp-config.php} Codex 页面。MySQL 设置具体信息请咨询您的空间提供商。
 *
 * 这个文件用在于安装程序自动生成 wp-config.php 配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后输入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress 数据库的名称 */
define('DB_NAME', 'go2live');

/** MySQL 数据库用户名 */
define('DB_USER', $_SERVER['MYSQL_USER']);

/** MySQL 数据库密码 */
define('DB_PASSWORD', $_SERVER['MYSQL_PASS']);

/** MySQL 主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', 'utf8');

define('WP_USE_MULTIPLE_DB', true);

$db_list = array(
		'write'=> array(
			array(
				'db_host' => DB_HOST,
				'db_user'=> DB_USER,
				'db_password'=> DB_PASSWORD,
				'db_name'=> DB_NAME,
				'db_charset'=> 'utf8'
				)
			),
		'read'=> array(
			array(
				'db_host' => DB_HOST,
				'db_user'=> DB_USER,
				'db_password'=> DB_PASSWORD,
				'db_name'=> DB_NAME,
				'db_charset'=> 'utf8'
				)
			),
		);
$global_db_list = $db_list['write'];

/**#@+
 * 身份密匙设定。
 *
 * 您可以随意写一些字符
 * 或者直接访问 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私钥生成服务}，
 * 任何修改都会导致 cookie 失效，所有用户必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jkry~#wCk v,gSp@u:lhxUr|$IXw @8#vgUn:b?jO|v71hg0-Mfdz:nOqFYRl-IV');
define('SECURE_AUTH_KEY',  'G1FrxqTAuW_UNwu|I%k5JSZ~XG2}5 !&np]bz?_nbL?TxNr6qm:/Nv7$#z&._q~z');
define('LOGGED_IN_KEY',    'hr@e4KNKM2ulWY{tA6@8$)F<M|6$;M-LbV:=H{2RZCNsRMDrkm~h? z(kGQ-%+-5');
define('NONCE_KEY',        '?fJ6a_~ZTp4UXGw*c9Yhir[lJoG>d_374+Uzc~`X oorf+,vRME6#B4K-@j-cPY8');
define('AUTH_SALT',        '.`x,V?0%C-cSX9!BnNJj]7~*?uL9Y%!rPl7O[?X;QViM1n+[=PaIPWrH@FXwtHN+');
define('SECURE_AUTH_SALT', 'S?E_G+$Xg?PG}-yZ!jJ0y{q8wJ^{&5sW-UnNDF-/5&01I+@uKOp3[pT!q>+A6{rZ');
define('LOGGED_IN_SALT',   'Z$H&_W%1Nky2$W&LIrwwx(Egd2q}GNz11c$,>h/w*y?3J/8G]4:H?kWml)Mm{WNO');
define('NONCE_SALT',       '}@{+nQ):MA7#T[%Hu++NqR.pd-qp9=/a-p;QF.C1-vV};pZuIn;6Zd.zj3t9sTsR');

/**#@-*/

/**
 * WordPress 数据表前缀。
 *
 * 如果您有在同一数据库内安装多个 WordPress 的需求，请为每个 WordPress 设置不同的数据表前缀。
 * 前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * WordPress 语言设置，中文版本默认为中文。
 *
 * 本项设定能够让 WordPress 显示您需要的语言。
 * wp-content/languages 内应放置同名的 .mo 语言文件。
 * 要使用 WordPress 简体中文界面，只需填入 zh_CN。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress 调试模式。
 *
 * 将这个值改为“true”，WordPress 将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用本功能。
 */
define('WP_DEBUG', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress 目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置 WordPress 变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
