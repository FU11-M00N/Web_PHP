<?php

//폼으로부터 입력된 값을 읽어오기

$id = $_REQUEST["id"]; // html파일에서 포스트인데 원래는 포스트인데 리퀘스트가 만능이야
$pw=$_REQUEST["pw"]; //a무조건나옴 

//접속


$m=new mysqli('localhost','root','root','test_db');





$sql="select * from newmember "; // 이 조건이 무조건 맞아야 실행되서 sql에 들어감
$res=$m->query($sql);
$r=$res->fetch_array();

if ($id==$r['id']&& $pw=$r['pwd'] ){
	echo "<a href='도와줌.html'>";
	
	//로그인이 성공하면 메인으로 이동
	echo("로그인이 성공되었습니다!! 클릭하시면 메인으로 이동");
	
	echo "</a>";
}
else{
	echo("존재하지않는 아이디입니다");
	exit();
}


$m->close();
?>


