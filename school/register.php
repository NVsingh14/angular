<?php 
include('config/config.php');
$data = json_decode(file_get_contents("php://input"));
$name = $data->name;
$email = $data->email;
$mobile = $data->mobile;
$password = md5($data->password);
// $res = $objmain->add_user($name,$email,$mobile,$password);
// if($res)
// {
// 	echo"data inserted";
// }
// else {
// 	echo "try agian";
// }
$sql = $dbo->prepare("insert into school set name='".$name."',email='".$email."',mobile='".$mobile."',password='".$password."' ");
$sql->execute();
?>