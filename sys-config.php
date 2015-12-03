<?php
if(!defined('IN_SYS')) die('Wrong number.');
if(is_dir(__DIR__ . '/../../install')) die('The webmaster has not finished setting up this portion of the site yet.');

if(!isset($Sys)) die('Error 1');

$Sys->Data['URL'] = "https://www.pgn.site/";
$Sys->Data['SYS_URL'] = "https://game.pgn.site/";
$Sys->Data['Name'] = "Phoenix Gaming Network";


define('SYS_DB_HOST', '{{DB_HOST}}');
define('SYS_DB_PORT', '{{DB_PORT}}');
define('SYS_DB_USER', '{{DB_USER}}');
define('SYS_DB_PASS', '{{DB_PASS}}');

define('SYS_ADMIN_IMMUNITY', 420);

try {
	$PDO = new PDO(SYS_DB_HOST, SYS_DB_PORT, SYS_DB_USER, SYS_DB_PASS);
} catch(PDOException $e){
	die('404');
}
