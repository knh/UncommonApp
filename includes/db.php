<?php
/** STANDARDIZED DATABASE ACTIONS **/
if(!defined('ARRAY_A'))
	define('ARRAY_A','ARRAY_A');
class stdDb {
	protected $db_host='';
	protected $db_user='';
	protected $db_password='';
	protected $db_name='';
	protected $connection;
	var $initialized=false;
	var $storage = Array();
	var $prefix = '';
	function __construct($dbhost,$dbuser,$password,$dbname){
		$this->db_host = $dbhost;
		$this->db_user = $dbuser;
		$this->db_password = $password;
		$this->db_name = $dbname;
		$this->connection = mysql_connect($dbhost,$dbuser,$password);
		$this->initialized = @mysql_select_db($dbname);
		@mysql_set_charset('utf8',$this->connection);
	}
	
	function safe_string($string){
		return mysql_real_escape_string($string,$this->connection);
	}
	
	protected function __query($query){
		return @mysql_query($query,$this->connection);
	}
	
	function query($query){
		$res = $this->__query($query);
		return @mysql_affected_rows($this->connection);
	}
	
	function get_results($query_string,$mode = 'ARRAY_A'){
		if($mode!='ARRAY_A')
			return $this->__query($query_string);
		
		$results = $this->__query($query_string);
		if(!$results)
			return Array();
		$return = Array();
		while($row = @mysql_fetch_array($results)){
			$return[] = $row;
		}
		return $return;
	}
	
	function get_error(){
		return mysql_error($this->connection);
	}
}
?>