 <?php
    preg_match('/\((.*?)\)/', $_SERVER['HTTP_USER_AGENT'], $matches, PREG_OFFSET_CAPTURE);
    $device_name = $matches[0][0];
    $_SERVER['REMOTE_ADDR'];
    $unique_id=md5($device_name.$_SERVER['REMOTE_ADDR'].$_SERVER["HTTP_ACCEPT_LANGUAGE"]);

          mysql_connect('localhost','dapps','l1m4d1g1t');
          mysql_select_db('dapps_joker_masimanetwork_bahana');

          $query = mysql_query("SELECT * FROM unique_id where unique_string = '$unique_id' ");
          $num_rows = mysql_num_rows($query);
          if ($num_rows == 0 ) {
          		$query_insert = mysql_query("INSERT INTO unique_id VALUES (null,'$unique_id',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,null) ");
          		if ($query_insert) {
	          		// echo "berhasil insert";
          		}
          }


    echo $unique_id;

  ?>