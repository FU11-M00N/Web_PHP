<?
//id값 가져오기
$mode=$_REQUEST['mode'];
$id=$_REQUEST['id'];
//수정하고자 하는 원본 게시물에서 수정 가능한 항목을 추출함
$topic=$_REQUEST['topic'];
$content=$_REQUEST['content'];
$email=$_REQUEST['email'];
$writer=$_REQUEST['writer'];
//데이터베이스 연결 생성
$mysqli=new mysqli('localhost', 'root', 'root', 'test_db');
If ($mode==0)
{
//변경 내용을 테이블에 저장
$sql="update testboard set writer='$writer',email='$email',topic='$topic',content='$content' where id=$id";
$result=$mysqli->query($sql);
echo "<script>document.location.href='show.php';</script>";
}
$mysal->close();
?>