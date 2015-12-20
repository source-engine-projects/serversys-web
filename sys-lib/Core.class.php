<?php
if(!defined('IN_SYS')) die('Wrong number.');

require_once __DIR__ . '/Handler.class.php';
require_once __DIR__ . '/Plugins.class.php';

/* Keep everything pretty */
class Sys {
	public $Main;
	public $Loader;
	public $Database;

	function __construct(){
		$this->Main = new SysHandler();
		$this->Loader = new SysLoader($this->Main);

		try {
			$this->Database = new PDO('mysql:dbname=' . SYS_DB_DB . ';host=' . SYS_DB_HOST .';port=' . SYS_DB_PORT, SYS_DB_USER, SYS_DB_PASS);
		} catch(PDOException $e){
			die('Database connectivity error');
		}
	}
}
