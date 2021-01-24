<?
//id값 가져오기
$id=$_REQUEST['id'];
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test_db');
//변경 내용을 테이블에 저장
$sql="delete from testboard where id=$id";
$result=$mysqli->query($sql);
echo "<script>document.location.href='show.php';</script>";
$mysql->close();
?>