<?php 
include("../config/config.php");
$sql = $dbo->prepare("select * from user order by id");
$sql->execute();
$no = $sql->rowCount();
if($no>0)
{
	while($row = $sql->fetch(PDO::FETCH_BOTH))
		{
			$data[] = $row;
		}
}
echo json_encode($data);
?>