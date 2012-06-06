<?php
class UARouter{
	protected $qs = '';
	public $path = Array();
	public $context = null;
	function __construct(){
		$this->qs = $_SERVER['QUERY_STRING'];
	}
	public static function newInstance($engine = null){
		$rt = new UARouter();
		$rt->parse();
		$rt->context = $engine;
		return $rt;
	}
	public function parse(){
		//TODO: Write parser
		$arr = preg_split('~/|\|~',$this->qs);
		$r = array();
		for($i=0;$i<count($arr);$i++){
			if(preg_replace('~\*~','',$arr[$i])!='')
				$r[]=$arr[$i];
		}
		$this->path = $r;
	}
}