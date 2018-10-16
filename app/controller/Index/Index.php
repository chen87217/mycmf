<?php

namespace Controller\Index;

use Core\Controller;

class Index extends Controller{

	public function index(){
		$arr = array('test'=>'123','hello'=>'hello world','lst'=>[
				['name'=>'c1','age'=>23],
				['name'=>'c2','age'=>21],
				['name'=>'c3','age'=>23]
			]);
		$this->display('index',$arr);
	}
}
	
?>