<?php 
mysql_connect("localhost","root","");
mysql_select_db("student");
$q = mysql_query("select * from users");
while($row=mysql_fetch_array($q))
{
	$data[] = array('username'=>$row['name'],'email'=>$row['email']);
}
echo json_encode($data);
?>