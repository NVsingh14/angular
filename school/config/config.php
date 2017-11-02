<?php 
$host="localhost";
$user="root";
$pass="";
$dbname="student";
try
{
	$dbo=new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pass);
	
}
catch(PDOException $e)
{
	print "Error !".$e->getMessage();
}
?>