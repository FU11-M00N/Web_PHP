<?php
$message="헬로";
$result=setcookie("message",$message);

if($result)
{
   echo "쿠키를 저장했습니다.";
}
?>