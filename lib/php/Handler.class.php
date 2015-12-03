<?php
if(!defined('IN_SYS')) die('Wrong number.');
if(is_dir(__DIR__ . '/../../install')) die('The webmaster has not finished setting up this portion of the site yet.');

class SysHandler {
	public $Data = [];

	/* each value will be a value representing plugin file name */
	private $Plugins = [];
	/* each value will be an array itself: array($hook, $callback_func); */
	private $Hooks = [];
	/* name = file */
	private $Templates = [];

	function __construct(){
		$this->Data['Page'] = [];
	}

	public function load_plugin($file){
		if(in_array($file, $this->Plugins))
			return false;

		$this->Plugins[] = $file;
		return require_once $file;
	}

	/*
		Registers a template into our array for later loading.
	*/
	public function register_template($template_name, $template_file){
		if(isset($this->Templates[$template_name]))
			return false;

		$this->Templates[$template_name] = $template_file;
		return true;
	}

	/*
		This returns a Twig_TemplateInterface
	*/
	public function load_template($template_name){
		if(!isset($this->Templates[$template_name]))
			return false;

		return require_once $this->Templates[$template_name]);
	}


	public function register_hook($hook, callable $callback){
		$this->Hooks[] = [$hook, $callback];
	}

	public function call_hook($hook, $params = null){
		foreach($this->Hooks as $name => $func){
			if($hook == $name){
				call_user_func($func, $params);
			}
		}
	}
}
