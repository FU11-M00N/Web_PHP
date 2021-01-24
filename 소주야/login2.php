<?php
//세션시작
session_start();
// 폼으로부터 입력된 값을 읽어오기
if(isset($_POST['id'])
{
   $_SESSION['id']=$_POST['id'];
}
if(isset($_POST['pw'])
{
   $_SESSION['pw']=$_POST['pw'];
}

//비어있으면 오류
$error=[];
if (empty($_SESSION['id'])
{
   echo "아이디가 없습니다."
} else{
   $id=trim($_SESSION['id']);
}
if (empty($_SESSION['pw'])
{
   echo "비밀번호가 없습니다."
} else{
   $pw=trim($_SESSION['pw']);
}


// 접속
$m=new mysqli('localhost', 'root', 'root', 'testdb'); //localhost, 아이디, 비번, 디비명


// 접속 여부 확인
if ($m->connect_error)
{
   echo '접속 실패';
   exit();
}
echo "DB 접속 성공!!!!";

$sql="select * from mem";
$r=$m->query($sql);
$len=$r->num_rows;

while($row=$r->fetch_array())
{
   echo $row[1],$row[2];
}

echo $id;
if ($id!=$r['id'] || $pw!=$r['pw'])
{
   echo "<script> window.alert ('아이디나 비밀번호가 일치하지 않습니다.')</script>";
   echo "<script>history.back(); </script>";
   echo "<h2>".$row[1]."님 환영합니다.</h2>";
}
else
{
   echo "<h2>".$row[1]."님 환영합니다</h2>";
   echo "<a href='loginOut.php'>로그아웃</a>";
}
?>

<table border=1>
<tr><th>no</th><th>id</th><th>pw</th></tr>