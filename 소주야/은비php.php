<?php

$nic=$_REQUEST["nic"];
$pw=$_REQUEST["pw"];
$date=$_REQUEST["date"];
$date=date("Y-m-d");
$gender=$_REQUEST["gender"];
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test');
$mysqli->query("set names utf8");
// 접속 여부 확인
if ($mysqli->connect_error)
{
   echo '접속 실패';
   exit();
}
$sql="insert into member(nick,pwd,date,gender) values('$nic','$pw','$date','$gender')";
$sql2="select nick from member";
$res=$mysqli->query($sql2);
$len=$res-> num_rows;
$row=$res->fetch_array();
$mysqli->query($sql);

/*for ($i=0;$i<$len;$i++)
{
   if($row[i]==$nic)
   {
      echo ("<script>alert('이미 존재하는 닉네임입니다.');</script>");
      exit();
   }
   else
   {
      $mysqli->query($sql);
   }

}*/
?>