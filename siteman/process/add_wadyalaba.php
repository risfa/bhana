<?php 
session_start();
	require '../dbconnect.php';



	if(isset($_POST['simpan'])){

		$ID = $_POST['ID'];
		$nama = addslashes($_POST['nama']);
		// $jabatan = $_POST['jabatan'];
		// $lokasi = $_POST['lokasi'];
		$link = addslashes($_POST['link']);
	    $keterangan = addslashes($_POST['keterangan']);


		$simpan = mysql_query("INSERT INTO wadyabala(ID,nama,link,keterangan) VALUES (NULL,'$nama','$link','$keterangan')");

		$ID = mysql_insert_id();
		if($simpan){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../bahana_images_assets/wadyabala_assets/".$ID.".jpg");
		
			echo "<script>alert('Data has been Succesfully saved!')</script>";
			echo "<script>document.location.href='../index.php?menu=wadyabala'</script>";
		}else{
			echo "<script>alert('error proses data')</script>";
			echo "<script>document.location.href='../index.php?menu=wadyabala'</script>";
		}
	}

	//UPDATE SIMPAN DATA

	if(isset($_POST['update'])){

		$ID1 = $_POST['ID'];
		$nama1 = addslashes($_POST['nama']);
		$link = addslashes($_POST['link']);
		$keterangan = addslashes($_POST['keterangan']);
		



		$sqlupdate = mysql_query("UPDATE wadyabala SET nama='$nama1', link='$link', keterangan='$keterangan' WHERE ID = '$ID1'");
	
		if($sqlupdate){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../bahana_images_assets/wadyabala_assets/".$ID1.".jpg");

			echo "<script>alert('Data has been Succesfully updated! ')</script>";
			echo "<script>document.location.href='../index.php?menu=wadyabala'</script>";
		}else{
			echo "<script>alert('Error Update ')</script>";
			echo "<script>document.location.href='../index.php?menu=wadyabala'</script>";
}
	}

 ?>