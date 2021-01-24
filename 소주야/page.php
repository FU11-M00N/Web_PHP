<?php
require_once("util.php"); //es()
//세션시작
session_start();


?>

<!DOCTTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>

이 페이지에서 구입하면 쿠폰 할인이 적용됩니다<br>

<a href="page.php"> 다음페이지</a>
</div>
<?php
if (isset($_SESSION["coupon"]){

	$coupon=$_SESSION["coupon"];
	$List=["ABC" , "XYZ"];
	
	if( in_array($coupon, $List)){
		echo es($coupon),"사용할 수 있는 쿠폰";
		
	}
	else{
		echo es($coupon),"사용할 수 없는 쿠폰";
	}
	
	
}
		else{
			echo"세션 오류";
		}
?>
<div>
</body>
</html>