
<?php
$daima = array(
      array('name'=>'https://111.biznestop.com/dat04/s1.php','weights'=>5),
      array('name'=>'https://111.biznestop.com/dat04/s2.php','weights'=>5),
      array('name'=>'https://111.biznestop.com/dat04/s3.php','weights'=>5),
	  array('name'=>'https://111.biznestop.com/dat04/s4.php','weights'=>5),
	  array('name'=>'https://111.biznestop.com/dat04/s5.php','weights'=>5),
	  array('name'=>'https://111.biznestop.com/dat04/s6.php','weights'=>5),
	  array('name'=>'https://111.biznestop.com/dat04/s7.php','weights'=>5),
	  array('name'=>'https://111.biznestop.com/dat04/s8.php','weights'=>5),
	  array('name'=>'https://111.biznestop.com/dat04/s9.php','weights'=>5)
);

$randn = getConsultant($daima);
setcookie('username',$randn['name'], 0);
header("Location: {$randn['name']}");

function getConsultant($data){
	$weight = 0;
	$users = array();
	foreach ($data as $one) {
		$oneWeight = (int)$one['weights'] ? $one['weights'] : 1;
		$weight += $oneWeight;
		for ($i = 0; $i < $oneWeight; $i ++) {
			$users[] = $one;
		}
	}
	return $users[mt_rand(0, $weight-1)];
}

?>