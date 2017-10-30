<?php 
include("config/config.php");
$data = json_decode(file_get_contents("php://input"));
$id = $data->id;
$sql = $dbo->prepare("delete from user where id='".$id."'");
$sql->execute();
?>