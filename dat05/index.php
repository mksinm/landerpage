<?php
require "./predis/autoload.php";
require "./configureTool.php";
Predis\Autoloader::register();
require_once 'common_function.php';

date_default_timezone_set('Asia/Shanghai');
$date =  date('y-m-d h:i:s',time());



function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}



function PC_tiao()
{
    $arr=array('cd'); 
    $key=array_rand($arr);
    $jieshaos=file("$arr[$key].txt");
    $jieshaoc=count($jieshaos);
    $jieshaor=rand(0,$jieshaoc-1);
    $jieshao=@$jieshaos[$jieshaor]; 
    $tiao = str_replace(array("\r\n", "\r", "\n"), "", $jieshao);
    Header("Location:$tiao");
	
}

	  $ip = get_ip_address();
    $log = $date."\t".$ip."\n";
    error_log($log, 3, "./my-errors.log");
	echo PC_tiao();
?>
