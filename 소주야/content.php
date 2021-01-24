<?php
//세션
session_start();   //기말고사 출제 잼

//id 값 가져오기
$id = $_REQUEST['id'];
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test_db');
//데이터 추가
$sql="select * from testboard where id=$id";
$result=$mysqli->query($sql);
$row=$result->fetch_array();

//각 필드에 해당하는 데이터를 뽑아 내는 과정
$id=$row['id'];
$writer=$row['writer'];
$topic=$row['topic'];
$hit=$row['hit'];

//조회수를 하나 증가
$hit=$hit+1;
$sql="update testboard set hit=$hit where id=$id";
 $mysqli->query($sql);
$email=$row['email'];
$content=$row['content'];
$wdate=$row['wdate'];
echo ("
<table border=0 width=800>
<tr><td align='center'><h1>게시판</h1></td></tr>
<tr><td align='right'><a href='게시판.php'>[쓰기]</a></td></tr>
</table>
<table border=1 width=800>
<tr><td width=100>번호 :$id </td>
<td width=200>글쓴이 : $writer</a></td>
<td width=300>글쓴날짜 :$wdate </td>
<td width=100>조회: $hit</td></tr>
<tr>
<td colspan=4>제목: $topic</td>
</tr>
<tr>
<td colspan=4 height=300><pre> $content</pre></td>
</tr>
</table>
<table border=0 width=700>
<tr>
<td algin=center>
5) <a href=modify.php?id=$id&mode=0>[수정]</a>
<a href=delete.php?id=$id&mode=1>[삭제]</a>
<a href=show.php>[리스트]</a>
</td></tr>
</table>");

?>