<?php
$s_name="localhost";
$username="root";
$password="root";
$database="test_db";

//접속
$mysqli=new mysqli($s_name, $username, $password, $database);

//접속 여부 확인
if ($mysqli->connect_error){
	echo('접속 실패');
}
else
{
	$mysqli->select_db($database);
}
$mysqli->query("set names utf8");

$sql="select  * from member";
$res=$mysqli->query($sql);

while($row=$res->fetch_array())
{
echo $row['no'];
echo $row['name'];
echo $row['age'];
echo "<br>";
}
$mysqli->close();
?>



