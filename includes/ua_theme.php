<?php
class UATheme{
	protected $db;
	protected $engine;
	protected $view = '';
	function __construct(stdDb $db,UAEngine $engine){
		$this->db = $db;
		$this->engine = $engine;
		if(!$this->db->initialized)
			ua_oops("ERR_DB_ERROR","Database not properly initialized! Could not load theme.",true);
		return;
	}
	function load_view($view_name = 'index'){
		//Load Global Variables into Namespace;
		foreach($GLOBALS as $keyGlobal=>$varGlobal){
			$$keyGlobal = $varGlobal;
		}
		//Check if view exists
		
		$view_name = preg_replace('~[^a-zA-Z0-9\-_=]~','',$view_name);
		if(file_exists(ABSPATH . '/interface/' . $view_name . '.php')){
			$this->view = $view_name;
			@include(ABSPATH . '/interface/' . $view_name . '.php');
		}else{
			$this->view = '404';
			@include(ABSPATH . '/interface/404.php');
		}
		return;
	}
	function jump_to_view($view_name = "dashboard"){
		header('Location: ' . $this->get_site('url') . '/' .$view_name);
		exit();
	}
	function controller($controller){
		//Load Global Variables into Namespace;
		foreach($GLOBALS as $keyGlobal=>$varGlobal){
			$$keyGlobal = $varGlobal;
		}
		
		//Check if view exists
		$view_name = preg_replace('~[^a-zA-Z0-9\-_=]~','',$controller);
		if(file_exists(ABSPATH . '/interface/controllers/' . $view_name . '.php')){
			@include(ABSPATH . '/interface/controllers/' . $view_name . '.php');
		}
		return;
	}
	function get_view_name($router){
		if(count($router->path) == 0 || $router->path[0] == '')
			return 'dashboard';
		elseif(count($router->path)>0){
			return $router->path[0];
		}
		return '404';
	}
	function get_controller_name($router){
		if(count($router->path) == 0 || $router->path[0] == '')
			return 'dashboard';
		elseif(count($router->path)==1){
			return $router->path[0];
		}elseif(count($router->path) > 1){
			return $router->path[0] . '-' . $router->path[1];
		}
		return '';
	}
	function site($aspect){
		foreach($GLOBALS as $keyGlobal=>$varGlobal){
			$$keyGlobal = $varGlobal;
		}
		echo get_option('site_' . $aspect,'');
	}
	function get_site($aspect){
		foreach($GLOBALS as $keyGlobal=>$varGlobal){
			$$keyGlobal = $varGlobal;
		}
		return get_option('site_' . $aspect,'');
	}
	function title(){
		echo 'Section' . ' - ' . $this->get_site('name');
	}
	function theme_dir($append = ''){
		echo $this->get_site('url') . '/public';
	}
	function description(){
		echo '';
	}
	function generator(){
		echo 'Uncommon App - KnH Group - 2012';
	}
	function active_view(){
		return $this->view;
	}
	function active_subview(){
		global $router;
		if(count($router->path) > 1)
			return $router->path[1];
		elseif(count($router->path)>0)
			return $router->path[0];
		else
			return $this->active_view();
	}
}