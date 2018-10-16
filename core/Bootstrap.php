<?php
 
 namespace Core;

 class Bootstrap{

 	public function run(){
 		$this->parseUrl();
 	}

 	private function parseUrl(){

 		$n = isset($_GET['n'])?ucfirst($_GET['n']):'Index';

 		$c = isset($_GET['c'])?ucfirst($_GET['c']):'Index';

 		$m = isset($_GET['m'])?$_GET['m']:'index';

 		$c = "Controller\\".$n."\\".$c;

 		return (new $c)->$m();
 	}
 } 

?>