<?php
	
/** 
获取网卡的MAC地址原码；目前支持WIN/LINUX系统 
获取机器网卡的物理（MAC）地址 
**/ 
   
class GetMacAddr{ 
   
        var $return_array = array(); // 返回带有MAC地址的字串数组 
        var $mac_addr; 
	
        function GetMacAddr($os_type){
		echo $os_type;
             switch ( strtolower($os_type) ){ 
                      case "linux": 
                                $this->forLinux(); 
                                break; 
                      case "solaris": 
                                break; 
                      case "unix": 
                                 break; 
                       case "aix": 
                                 break; 
			default: 
                                 $this->forWindows(); 
                                 break; 
    
              } 
    
               
              $temp_array = array(); 
              foreach ( $this->return_array as $value ){ 
    
                        if ( 
preg_match("/[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f]/i",$value, 
$temp_array ) ){ 
                                 $this->mac_addr = $temp_array[0]; 
                                 break; 
                       } 
    
              } 
              unset($temp_array); 
              return $this->mac_addr; 
         } 
    
    
         function forWindows(){ 
              @exec("ipconfig /all", $this->return_array); 
              if ( $this->return_array ) 
                       return $this->return_array; 
              else{ 
                       $ipconfig = $_SERVER["WINDIR"]."\system32\ipconfig.exe"; 
                       if ( is_file($ipconfig) ) 
                          @exec($ipconfig." /all", $this->return_array); 
                       else 
                          @exec($_SERVER["WINDIR"]."\system\ipconfig.exe /all", $this->return_array); 
                       return $this->return_array; 
              } 
         } 
    
    
    
         function forLinux(){ 
              @exec("ifconfig -a", $this->return_array); 
              return $this->return_array; 
         } 
    
} 

/**
 * 取得访问者的IP
 * 
 * @return type 
 */
function get_ip_address() {
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip); // just to be safe
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    return $ip;
                }
            }
        }
    }
}

/**
 * 取得随机广告URL
 * @param type $link 数据库链
 * @param type $type 广告分类（A/B)
 * @return type  广告URL
 */
function getUrl($link, $type) {
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if ($stmt = mysqli_prepare($link, "select url from url_pool where valid='1' and type = ? order by rand() limit 1;")) {
        mysqli_stmt_bind_param($stmt, 's', $type);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $url);
        $rows = 0;
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    } else {
        exit();
    }

    return $url;
}

/**
 * 在访问日志中查询当前访问者的IP和访问时间间
 * @param type $link 数据库链
 * @param type $ip
 * @return type 数组（记录个数，访问时间间隔
 */
function getLog($link, $ip,$mac) {
    $rows = 0;
    $diff = 0;
    if ($stmt = mysqli_prepare($link, "select mac, ip, first_date, last_date, unix_timestamp(now())  -  unix_timestamp(last_date) diff from ip_log where mac = ?  and ip = ?  ;")) {
        mysqli_stmt_bind_param($stmt, 'ss',$mac, $ip);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt,$log_mac, $log_ip, $first_date, $last_date, $diff);
        while (mysqli_stmt_fetch($stmt)) {
            ++$rows;
        }
        mysqli_stmt_close($stmt);
    } else {
        exit();
    }

    return array($rows, $diff);
}

/**
 * 新增日志
 * @param type $link
 * @param type $ip
 * @param type $url 
 */
function createLog($link, $mac, $ip, $url) {

    $stmt = mysqli_prepare($link, "insert into ip_log(mac,ip, first_date, last_date,times, google_ads_times, other_ads_times, last_ads) values (?, ?, now(), now(),1,1,0,?);");
    mysqli_stmt_bind_param($stmt, 'sss',$mac, $ip, $url);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
 
}

/**
 * 更新日志
 * @param type $link
 * @param type $ip
 * @param type $url
 * @param type $type  
 */
function updateLog($link, $mac, $ip, $url,$type) {
    if($type=="A"){
        $stmt = mysqli_prepare($link, "update ip_log set last_date=now(), times = times+1, google_ads_times = google_ads_times+1, last_ads=?  where (mac = ?  or ip = ?) ;");
    }else{
        $stmt = mysqli_prepare($link, "update ip_log set last_date=now(), times = times+1, other_ads_times = other_ads_times+1, last_ads=?  where (mac = ?  or ip = ?);");
    }
    
    mysqli_stmt_bind_param($stmt, 'sss', $url, $mac, $ip);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

?>
