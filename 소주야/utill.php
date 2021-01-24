<?php
// XSS 대책을 위한 HTML 이스케이프
function es($data, $charset='UTF-8'){
// $data가 배열일 때
if (is_array($data)){
// 재귀 호출
return array_map(__METHOD__, $data); }
else {
// HTML 이스케이프를 한다
return htmlspecialchars($data, ENT_QUOTES, $charset);
}
}
// 
?>