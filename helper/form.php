<?php 

/**
* 
*/
class Form
{
	
	public static function create(){
		return "<form>";

	}

	public static function input($mix=[]){
		$ret= "<input type='text'" ;
		foreach ($mix as $k => $v) {
			$ret.= $k . "='". $v . "'" ;
		}
		$ret.= ">";

		return $ret;
	}


	public static function textarea($attributes=[], $value){
		//<textarea name="">$value</textarea>
		$ret= "<textarea " ;
		foreach ($attributes as $k => $v) {
			$ret.= $k . "='". $v . "'" ;
		}
		$ret.= ">".$value;
		$ret.="</textarea>";
		
		return $ret;
	}

}