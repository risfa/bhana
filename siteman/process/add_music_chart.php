<?php 
session_start();
	require '../dbconnect.php';




	if(isset($_POST['simpan'])){

		$id = $_POST['id'];
		$song_tittle = addslashes($_POST['song_tittle']);
		$artist = addslashes($_POST['artist']);
		$album = addslashes($_POST['album']);
		$genre = addslashes($_POST['genre']);
		$category = $_POST['category'];
		// $music_file = $_POST['music_file'];
		$status = addslashes($_POST['status']);
		$urutan = addslashes($_POST['urutan']);



		$simpan = mysql_query("INSERT INTO music_chart(id,song_tittle,artist,album,genre,category,status,urutan) VALUES (NULL,'$song_tittle','$artist','$album','$genre','$category','$status','$urutan')");

		$id_music_chart = mysql_insert_id();
		if($simpan){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../bahana_images_assets/chart_assets/".$id_music_chart.".jpg");
		
			echo "<script>alert('Data has been Succesfully saved!')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
		}else{
			echo "<script>alert('error process data')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
		}
	}

	//UPDATE SIMPAN DATA

	if(isset($_POST['update'])){

		$id = $_POST['ID'];
		$song_tittle1 = addslashes($_POST['song_tittle']);
		$artist1 = addslashes($_POST['artist']);
		$album1 = addslashes($_POST['album']);
		$genre1 = addslashes($_POST['genre']);
		$category1 = $_POST['category'];
		// $music_file1 = $_POST['music_file'];
		$status1 = addslashes($_POST['status']);
		$urutan1 = addslashes($_POST['urutan']);


		$sqlupdate = mysql_query("UPDATE music_chart SET song_tittle='$song_tittle1', artist='$artist1', album='$album1', genre='$genre1', category='$category1', status='$status1', urutan='$urutan1' WHERE id = '$id'");
	
		if($sqlupdate){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../bahana_images_assets/chart_assets/".$id.".jpg");

			echo "<script>alert('Data has been Succesfully updated!')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
		}else{
			echo "<script>alert('failed update data')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
}
	}

 ?>