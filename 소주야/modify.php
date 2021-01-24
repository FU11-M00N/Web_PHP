<?
//id값 가져오기
$id=$_REQUEST['id'];
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test_db');
//번호가 일치하는 레코드를 읽어오기
$sql="select * from testboard where id=$id";
$result=$mysqli->query($sql);
$row=$result->fetch_array();
//수정하고자 하는 원본 게시물에서 수정 가능한 항목을 추출함
$wdate=$row['wdate'];
$topic=$row['topic'];
$content=$row['content'];
$email=$row['email'];
$writer=$row['writer'];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<center><h1>게시판 </h1></center>
<form method=post action=mprocess.php?id='<?=$id?>'>
<table border=0 width=700>
<tr>
<td width=100 align=right>이름</td>
<td width=600>
<input type=text name=writer size=20 value='<?=$writer?>'></td>
</tr>
<tr>
<td align=right>이메일</td>
<td width=600>
<input type=text name=email size=40 value='<?=$email?>'></td>
</tr>
<tr>
<td align=right>제목</td>
<td width=600>
<input type=text name=topic size=40 value='<?=$topic?>'></td>
</tr>
<tr>
<td align=right>내용</td>
<td width=600>
<textarea name=content rows=12 cols=60><?=$content?></textarea></td>
</tr>
<tr>
<td align=center colspan=2>
<input type=submit value="수정완료">
<input type=reset value="지우기"></td>
</tr>
</table>
</form>
</body>
</html>
<?
$mysqli->close();
?>