<?php
if(!defined('IN_SYS')) die('Wrong number.');

class SysLoader {
	/*
	 * Plugins array
	 *
	 * Key: index
	 * Value: plugin_name
	 */
	private $Plugins = [];

	function __construct(SysHandler $Handler){
		foreach(glob(__DIR__ . '/../sys-plugins/sys-*.php') as $plugin){
			if($this->exists($plugin)){
				$Handler->call_hook('plugin_load_failed', $plugin);
				return false;
			}

			$this->Plugins[] = $plugin;
			require_once $plugin;

			if($this->exists($plugin))
				$Handler->call_hook('plugin_load_post', $plugin);
		}
	}

	/*
	 * Checks if a plugin has been loaded.
	 *
	 * @param file 			File name.
	 * @return 				bool
	 */
	public function exists($file){
		return in_array($file, $this->Plugins);
	}
}
