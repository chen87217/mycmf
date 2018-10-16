<?php

namespace Core;

class Controller{

	protected $view;

	//模板路径
	protected $template;

	//命名空间
	protected $namespace;

	//控制器
	protected $action;

	//方法
	protected $method;

	public function __construct(){
		$this->view = new \Core\View;
		$this->namespace = isset($_GET['n'])?ucfirst($_GET['n']):'Index';
		$this->action = isset($_GET['c'])?ucfirst($_GET['c']):'Index';
		
		$tpl = $this->namespace."\\".$this->action;
		$this->template = __DIR__.'\\..\\app\\view\\'.$tpl;
	}

	public function display($filename='index', $arr=array()){
		$tpl = $this->template."\\".$filename.'.html';
		return $this->view->display($tpl, $arr);
	}

}

?>