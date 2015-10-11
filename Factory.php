<?php

namespace Main\Factory;

use Main\XMLWriter\XMLWriter;
use Main\JSONwriter\JSONwriter;
use Exception;

class Factory{

	public static function getWriter(){
		$format= $_REQUEST['format'];
		
		$class= $format.'Writer';
		
		if(class_exists($class)){
			return new $class();
		
		}else{
			
			throw new \Exception('Error Processing Request',1);
		}
	
	}

}