<?php
/** Shorthands for translation **/
function __($string){
	return $string;
}
function _e($string){
	echo $string;
}
/** Core Tools **/
function sql_safe($string,$extra=''){
	global $db;
	if($db == null || !$db->initialized)
		return preg_replace('~[^\\\\]*([\'"])~','\$1',$string);
	else{
		for($i=0;$i<strlen($extra);$i++)
			$string = str_replace($extra[$i],'',$string);
		$string = $db->safe_string($string);
		return $string;
	}
}
function get_option($option_name,$default = false){
	global $db;
	if($db == null || !$db->initialized)
		return $default;
	$resu = $db->get_results('SELECT `option_value` FROM ' . $db->prefix . 'options WHERE `option_name` = \'' . sql_safe($option_name,"'") . '\';');
	if(is_array($resu) && count($resu)>0 && isset($resu[0])){
		return $resu[0]['option_value'];
	}else
		return $default;
}

function ua_oops($oops_type,$oops_message,$is_fatal = false){
	global $theme;
	if($is_fatal){
		if($theme == null){
			die('<b>Fatal Error ' . $oops_type . '</b>: ' . $oops_message);
		}else{
			die($theme->error_wrapper($oops_type,$oops_message));
		}
	}else{
		//Just eat this up
	}
	return;
}