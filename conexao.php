<?php 
	 class conexao{

		private static $conn;
		
		static function getConn(){
			if(is_null(self::$conn)){
				self::$conn = new PDO('mysql:host=banco-pi.mysql.uhserver.com;bdname=banco_pi','bancopi','Icoders@1999');
				self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            
			return self::$conn;
		}
	}
?>