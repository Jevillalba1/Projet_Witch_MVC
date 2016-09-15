<?php  
	require_once'Php/Model/conexion.php';
	$controller='index';

	if (!isset($_REQUEST['controller'])) 
	{
		$controller= ucwords($controller).'Controller';
		require_once'Php/Controller/'.$controller.'.php';
		$controller= new $controller;
		$controller->Index();
	}
	else
	{
		$controller= ucwords($_REQUEST['controller']).'Controller';
		$accion= isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'Index';
		require_once'Php/Controller/'.$controller.'.php';
		$controller= new $controller;
		call_user_func(array($controller,$accion));
	}
?>