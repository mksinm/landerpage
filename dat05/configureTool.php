<?php
//完善改进版
/**
* 配置文件操作(查询了与修改)
* 默认没有第三个参数时，按照字符串读取提取''中或""中的内容
* 如果有第三个参数时为int时按照数字int处理。
*调用demo
$name="admin";//kkkk
$bb='234';

$bb=getconfig("./2.php", "bb", "string");
updateconfig("./2.php", "name", "admin");
*/
function get_config($file, $ini, $type="string"){
if(!file_exists($file)) return false;
$str = file_get_contents($file);
if ($type=="int"){
$config = preg_match("/".preg_quote($ini)."=(.*);/", $str, $res);
return $res[1];
}
else{
$config = preg_match("/".preg_quote($ini)."=\"(.*)\";/", $str, $res);
if($config == 0){
$config = preg_match("/".preg_quote($ini)."='(.*)';/", $str, $res);
}
return $res[1];
}
}

function update_config($file, $ini, $value,$type="string"){
if(!file_exists($file)) return false;
$str = file_get_contents($file);
$str2="";
if($type=="int"){
$str2 = preg_replace("/".preg_quote($ini)."=(.*);/", $ini."=".$value.";",$str);
}
else{
$str2 = preg_replace("/".preg_quote($ini)."=(.*);/",$ini."=\"".$value."\";",$str);
}
file_put_contents($file, $str2);
}
?>
