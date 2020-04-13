
<?php
///cadena de conexion a la base de datos MYSQL

try{
	$base=new PDO('mysql:host=localhost;dbname=db_doh','root','');

///	echo "Laura Chavarro-Kebin Calderon";
}
catch(Exception $e){
	die('Hay un error:'.$e ->getMessage());
}
?>