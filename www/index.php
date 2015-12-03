<?php
	define('IN_SYS', true);
	require_once __DIR__ . '/../lib/php/Handler.class.php';

	$Sys = new SysHandler();
	require_once __DIR__ . '/../sys-config.php';

	$Sys->register_template('head', __DIR__ . '/sys-templates/head.php');
	$Sys->register_template('header', __DIR__ . '/sys-templates/header.php');
	$Sys->register_template('footer', __DIR__ . '/sys-templates/footer.php');

	foreach(glob(__DIR__ . '/sys-plugins/sys-*.php') as $plugin){
		$Sys->load_plugin($plugin);
	}

	$Sys->register_hook('section_retrieved', function($section){
		if($section == 'index'){
			$Sys->Data['Page']['Title'] = 'Game Web-Panel';
			$Sys->Data['Page']['Author'] = 'whocodes';
			
			$Sys->register_template('index', __DIR__ . '/sys-templates/index.php');
			$Sys->load_template('index');
		}
	});

	$Sys->call_hook('section_retrieved', (isset($_GET['section']) ? $_GET['section'] : 'index'));
?>
