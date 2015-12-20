<?php
if(!defined('IN_SYS')) die('Wrong number.');
if(is_dir(__DIR__ . '/public/install')) die('The webmaster has not finished setting up this portion of the site yet.');


define('SYS_DB_HOST', '{{DB_HOST}}');
define('SYS_DB_PORT', '{{DB_PORT}}');
define('SYS_DB_USER', '{{DB_USER}}');
define('SYS_DB_PASS', '{{DB_PASS}}');

define('SYS_ADMIN_IMMUNITY', 420);
