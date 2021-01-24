<?php
require_once("util.php");
if(isset($_COOKIE['message']))
{
$message=$_COOKIE['message'];
echo "쿠키값 :", es($message);
}else{

   echo "쿠키값이없습니다";
}
?>