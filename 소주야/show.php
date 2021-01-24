<!DOCTYPE html>
<html>
<head> 
<style>
body{
	color:white;
}
</style></head>
<body bgcolor="#333333" >
<a href="도와줌.html"><img src ="이미지/쏘주야.png" height="50" width="150"></a>
</body>
</html>



<?php
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test_db');
//데이터 추가
$sql="select * from testboard order by id desc";
$result=$mysqli->query($sql);
$len=$result-> num_rows;
?>
<table border=0 width=800>
<tr><td align="center"><h1>게시판</h1></td></tr>
<tr><td align="right"><a href="게시판.php">[쓰기]</a></td></tr>
</table>
<table border=1 width=800>
<tr><th>No</th><th>작성자</th><th>email</th><th>비밀번호</th><th>제목</th><th>내용</th><th>조회
수</th><th>작성일</th></tr>
<?
for ($i=0;$i<$len;$i++)
{
$row=$result->fetch_array();
print "<tr>";
print "<td align='center'>".$row[0]."</td>";
print "<td align='center'>".$row[1]."</td>";
print "<td align='center'>".$row[2]."</td>";
print "<td align='center'>".$row[3]."</td>";
print "<td align='center'><a href='content.php?id=$row[0]'>".$row[4]."</a></td>";
print "<td align='center'>".$row[5]."</td>";
print "<td align='center'>".$row[6]."</td>";
print "<td align='center'>".$row[7]."</td>";
echo "</tr>";
}
echo "</table>";