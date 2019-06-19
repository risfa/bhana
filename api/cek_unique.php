<?php


include('../conn.php');


    preg_match('/\((.*?)\)/', $_SERVER['HTTP_USER_AGENT'], $matches, PREG_OFFSET_CAPTURE);
    $device_name = $matches[0][0];
    $_SERVER['REMOTE_ADDR'];
    $unique_id=md5($device_name.$_SERVER['REMOTE_ADDR'].$_SERVER["HTTP_ACCEPT_LANGUAGE"]);


$query = mysql_query("SELECT * FROM `unique_id` where unique_string = '$unique_id' ");
if ($query) {
	$data = mysql_fetch_array($query);
	if ($data['vote'] == 0) {
		echo 'belum';
	}else{
		echo 'sudah';
	}
}

?>