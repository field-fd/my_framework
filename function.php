<?php
	function C($name, $method){
		require_once('/libs/controller/'.$name.'Controller.class.php');
		$controller = $name.'Controller';
		$obj = new $controller();
		$obj->$method();
		return $obj;
	}

	function M($name){
		require_once('/libs/Model/'.$name.'Model.class.php');
		$model = $name.'model';
		$obj = new $model();
		return $obj;
	}
	
	function ORG($path, $name, $params=array()){// path 是路径  name是第三方类名 params 是该类初始化的时候需要指定、赋值的属性
		require_once('libs/ORG/'.$path.$name.'.class.php');
		$obj = new $name();
		if(!empty($params)){
		foreach($params as $key=>$value){
				$obj->$key = $value;
			}
		}
		return $obj;
	}

	
	function filter($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}

?>