<?php 
include("config/config.php");
$sql = $dbo->prepare("select * from user order by id asc");
$sql->execute();
while($row = $sql->fetch(PDO::FETCH_BOTH))
	{
		$data[]=array('id'=>$row['id'],'name'=>$row['name'],'email'=>$row['email'],'mobile'=>$row['mobile'],'address'=>$row['address']);
	}
	echo json_encode($data);
?>