<?php

include('../conn.php');


$query_show = mysql_query("SELECT * from music_chart order by id");
		if ($query_show) {
			$array = array();
			while ($data = mysql_fetch_array($query_show)) {
				array_push($array, $data['vote']);
			}
			echo json_encode($array);
		}





 ?>