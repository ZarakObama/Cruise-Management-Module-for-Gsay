<?php
class config{
	function getConnexion(){
		$servername="localhost";
		$dbname="ajax";
		$username="root";
		$password="";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		return $conn;
	}
}

?>
