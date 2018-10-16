<?php

//程序入口
define('APP_PATH', __DIR__."/../app/");

require_once __DIR__."/../vendor/autoload.php";

(new Core\Bootstrap)->run();

?>