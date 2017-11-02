<?php 
include('config/config.php');
$data=json_decode(file_get_contents("php://input"));
$email = $data->email;
$password = md5($data->password);
$sql = $dbo->prepare("select * from school where email='".$email."',password='".$password."' ");
 $sql->execute();
 $no = $sql->rowCount();
if($no > 0)
{
$rec = $sql->fetch(PDO::FETCH_ASSOC);
	session_start();
	$_SESSION['user_id'] =$rec['id'];
	$_SESSION['username'] = $rec['name'];
}
?>