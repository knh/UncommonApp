<?php
class UAEngine{
	protected $db;
	function __construct(stdDb $db){
		$this->db = $db;
		if(!$this->db->initialized)
			ua_oops("ERR_DB_ERROR","Database was not initialized upon engine load! ",true);
	}
	public static function load($module_name,$is_required = false){
		if($is_required){
			if(file_exists(ABSPATH . '/includes/ua_' . $module_name . '.php'))
				require_once(ABSPATH . '/includes/ua_' . $module_name . '.php');
			else
				ua_oops("ERR_MOD_NOT_EXIST","Required module " . preg_replace('~[^a-zA-Z0-9]~','_',$module_name) . " didn't exist!",true);
		}else{
			include_once(ABSPATH . '/includes/ua_' . $module_name . '.php');
		}
	}
}