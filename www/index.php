<?php
	$__starttime = microtime(true);

	define('IN_SYS', true);

	/*
	 * This was originally made with the idea of it being in the root
	 * directory in mind.
	 * If you wish to move index.php deeper into the file directory,
	 * add another /.. after the first /.. for every directory.
	 */
	define('SYS_ROOT', __DIR__ .'/..');

	require_once SYS_ROOT . '/sys-config.php';
	require_once SYS_ROOT . '/sys-lib/Core.class.php';
	$Sys = new Sys();

	$Sys->Main->register_template('head', SYS_ROOT . '/sys-templates/head.php');
	$Sys->Main->register_template('header', SYS_ROOT . '/sys-templates/header.php');
	$Sys->Main->register_template('footer', SYS_ROOT . '/sys-templates/footer.php');

	/*
	 * Express default data here, other plugins can overwrite if their section
	 * is retrieved.
	 */

	$Sys->Main->Data['Home'] = "https://www.pgn.site/";
	$Sys->Main->Data['Root'] = "https://game.pgn.site";
	$Sys->Main->Data['Name'] = "Phoenix Gaming Network";

	$Sys->Main->Data['Author'] = 'whocodes';
	$Sys->Main->Data['Repository'] = 'https://github.com/whocodes/serversys';
	$Sys->Main->Data['Repository_Web'] = 'https://github.com/whocodes/serversys-web';

	$Sys->Main->Data['Page']['Title'] = 'Game Web-Panel';
	$Sys->Main->Data['Page']['Author'] = 'whocodes';

	$Sys->Main->call_hook('section_retrieved', (isset($_GET['section']) ? $_GET['section'] : 'index'));
?>

<!-- whocodes.pw - admin@whocodes.pw - github.com/whocodes -->
<!-- PHP finished in <?= (microtime(true) - $__starttime) ?> seconds. -->
