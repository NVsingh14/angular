<?php 
$data = json_decode(file_get_contents("php://input"));
//echo $data;
$bname = $data->bname;
$bphone = $data->bphone;

mysql_connect("localhost","root","");
mysql_select_db("student");
mysql_query("insert into test set name='".$bname."',phone='".$bphone."'");
echo $bname." ".$bphone;
?>
