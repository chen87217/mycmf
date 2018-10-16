<?php

 namespace Core;

class View{

	public $smarty;

	public function __construct(){
		require_once __DIR__."/lib/Smarty/Smarty.class.php";
		$this->smarty = new \Smarty; 
	}

	/*
		@params $view: 前端路径
		@params $args: 前端显示变量
	*/
	public function display($view, $args = array()){
		foreach ($args as $key => $value) {
			$this->smarty->assign($key, $value);
		}
		return $this->smarty->display($view);
	}

	public function with($k, $v){
		$this->smarty->assign($K, $v);
		return $this->smarty;
	}
}

?>