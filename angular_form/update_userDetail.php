<?php 
include("config/config.php");
$data = json_decode(file_get_contents("php://input"));
 $name = $data->name;
$email = $data->email;
$mobile = $data->mobile;
$address = $data->address;
$id = $data->id;
$sql = $dbo->prepare("update user set name='".$name."',email='".$email."',mobile='".$mobile."',address='".$address."' where id='".$id."' ");
$sql->execute();

?>