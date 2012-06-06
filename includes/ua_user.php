<?php 
class UAUser{
	protected $db;
	protected $user = Array();
	protected $user_id = 0;
	protected $authenticated = false;
	function __construct($db){
		$this->db = $db;
		if(!$this->db->initialized)
			ua_oops('ERR_DB_ERROR',"Database initialization failed, Could not load user object.",true);
		$this->auth();
	}
	function auth(){
		//Authenticates user
		//For the time being, we'll do this now
		$this->authenticated = true;
		$this->user_id = 1;
	}
	function is_logged_in(){
		if($this->authenticated == true && $this->user_id > 0)
			return true;
		return false;
	}
	function fetch_details(){
		$results = $this->db->fetch_results('SELECT * FROM ' . $this->db->prefix . 'users WHERE uid = ' . (int)$this->user_id . ';');
		if(count($results) == 0){
			//User probably deleted
			$this->user['name'] = 'guest';
			$this->user['display_name'] = 'Guest';
			$this->user['type'] = 0;
			$this->user['email'] = '';
			$this->user['permissions'] = Array();
			$this->user['pwhash'] = '';
		}else{
			$this->user['name'] = $results[0]['username'];
			$this->user['display_name'] = $results[0]['display_name'];
			$this->user['type'] = (int)$results[0]['type'];
			$this->user['email'] = $results[0]['display_name'];
			$this->user['permissions'] = explode('|',$results[0]['perm']);
			$this->user['pwhash'] = $results[0]['password'];
		}
	}
}