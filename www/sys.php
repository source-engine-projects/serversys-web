<?php
	$__starttime = microtime(true);
	define('IN_SYS', true);

	require_once __DIR__ . '/../sys-config.php';
	require_once __DIR__ . '/../sys-lib/Core.class.php';
	$Sys = new Sys();

	$Sys->Main->register_template('head', __DIR__ . '/../sys-templates/head.php');
	$Sys->Main->register_template('header', __DIR__ . '/../sys-templates/header.php');
	$Sys->Main->register_template('footer', __DIR__ . '/../sys-templates/footer.php');

	/*
	 * Express default data here, other plugins can overwrite if their section
	 * is retrieved.
	 */

	$Sys->Main->Data['Home'] = "https://www.pgn.site/";
	$Sys->Main->Data['Root'] = "https://game.pgn.site/";
	$Sys->Main->Data['Name'] = "Phoenix Gaming Network";

	$Sys->Main->Data['Author'] = 'whocodes';
	$Sys->Main->Data['Repository'] = 'https://github.com/whocodes/serversys';
	$Sys->Main->Data['Repository_Web'] = 'https://github.com/whocodes/serversys-web';

	$Sys->Main->Data['Page']['Title'] = 'Game Web-Panel';
	$Sys->Main->Data['Page']['Author'] = 'whocodes';

	$Sys->Main->call_hook('section_retrieved', (isset($_GET['section']) ? $_GET['section'] : 'index'));
?>


<!-- PHP finished in <?= (microtime(true) - $__starttime) ?> -->
