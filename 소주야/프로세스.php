<?php
$writer=$_POST['writer'];
$email=$_POST['email'];
$passwd=$_POST['passwd'];
$topic=$_POST['topic'];
$content=$_POST['content'];
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test_db');
$mysqli->query("set names utf8");
33
//글쓴 날짜 저장
$wdate=date("Y-m-d");
//데이터 추가
$sql="insert into testboard(writer, email, passwd, topic, content, hit, wdate, space) values('$writer', '$email', '$passwd', '$topic', '$content', 0, '$wdate', 0)";
$result=$mysqli->query($sql);
echo ("<h3>자료가 입력되었습니다</h3>");
echo "<a href='show.php'>[보기]</a>";
$mysqli->close();//데이터베이스 연결 해제
?>