<?php

$id=$_REQUEST["id"];
$pw=$_REQUEST["password"];
$name=$_REQUEST["name2"];
$birthday=$_REQUEST["birthday"];
$birthday=date("Y-m-d");
$gender=$_REQUEST["gender"];
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test_db');

$mysqli->query("set names utf8");

// 접속 여부 확인
if ($mysqli->connect_error)
{
   echo '접속 실패';
   exit();
}

$sql="insert into newmember(id, pwd, name, birthday, gender) values('$id', '$pw', '$name', '$birthday', 'gender')";

$sql2="select id from newmember";
$res=$mysqli->query($sql2);
$len=$res-> num_rows;
	

for ($i=0;$i<$len;$i++)
{
   
   $row=$res->fetch_array();
   
   if($row[0]==$id)
   {
      echo ("<script>alert('하지만! 이미 존재하는 닉네임입니다.');</script>");
      echo "<script>history.back();</script>";
      exit();
   }
}

$mysqli->query($sql);
echo hi;
//$mysqli->query($sql);

?>
