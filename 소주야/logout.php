<?php
session_start();
$error=[];
if (!empty($_SESSION['id'] && !empty($_SESSION)
{
   $id=$_SESSION['id'];
   $pw=$_SESSION['pw'];
}else{
   echo "세션 오류";
}

killSession();
?>
<?php
function killSession()
{
$_SESSION=[];
if(isset($_COOKIE[session_name()])){
   
   $params=session_get_cookie_parmas();
   setcookie(session_name(),'',time()-36000,$params)

}
session_destroy();
}
?>