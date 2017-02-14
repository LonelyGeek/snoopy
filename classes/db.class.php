<?php
class DB{

  private static $conn;
  
  public function __construct(){ }

  public static function conn(){
  	if(is_null(self::$conn)){
  		self::$conn = new PDO('mysql:host=localhost;dbname=snoopydb;','root','');
  	}
  	return self::$conn;
  }


}
?>