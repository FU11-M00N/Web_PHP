<!DOCTYPE html>
<html>
<head> 
<style>
body{
	color:white;
}
</style></head>
<body bgcolor="#333333" 

<a href="도와줌.html"><img src ="이미지/쏘주야.png" height="50" width="150"></a>


	
</body>
</html>

<?
echo ("<center><h1>게시판</h1></center>
<form method=post action=process.php>
<table width=700 border=0>
<tr>
<td width=100 align=right>이름</td>
<td width=600><input type=text name=writer size=20></td>
</tr>
<tr>
<td align=right>Email</td>
<td><input type=text name=email size=40></td>
</tr>
<tr>
<td align=right>제목</td>
<td><input type=text name=topic size=60></td>
</tr>
<tr>
<td align=right>내용</td>
<td><textarea name=content rows=12 cols=60></textarea></td>
</tr>
<tr>
<td align=right>암호</td>
<td><input type=password name=passwd size=15></td>
</tr>
<tr>
<td align=center colspan=2>
<input type=submit value=등록하기>
<input type=reset value=지우기></td>
</tr>
</table>
</form>
");
?>