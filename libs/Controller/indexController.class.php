<?php
	class indexController{
		function index(){
			global $view;
			$Model = M('test');
			$data = $Model->show();
			echo $data;
			$view ->assign('str', 'hhhhhh');
			$view ->display('index.tpl');
		}
	}
?>