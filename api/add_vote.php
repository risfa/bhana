<?php
include('../conn.php');
    preg_match('/\((.*?)\)/', $_SERVER['HTTP_USER_AGENT'], $matches, PREG_OFFSET_CAPTURE);
    $device_name = $matches[0][0];
    $_SERVER['REMOTE_ADDR'];
    $unique_id=md5($device_name.$_SERVER['REMOTE_ADDR'].$_SERVER["HTTP_ACCEPT_LANGUAGE"]);


// echo($_POST['id']);

    $id = $_POST['id'];
    $vote = 'vote'.$id;
    echo($vote);
$query = mysql_query("UPDATE unique_id set ".$vote." = 1 where unique_string = '$unique_id' ");
$query_update_vote = mysql_query("UPDATE music_chart set vote = vote + 1 where id = '$id' ");
if ($query) {
		echo('sukses');
}

?>