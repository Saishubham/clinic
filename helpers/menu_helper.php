<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('set_active')){
	function set_active($controller){
		$CI=get_instance();
		$class=$CI->router->fetch_class();
		$method=$CI->router->fetch_method();
		$ctrl=$class;
		if($method!='index'){
			$ctrl.="/".$method;
		}
		if($controller==$ctrl){
			return "active";
		}
	}
}

?>