<?php 
	if(isset($_GET['edit'])){
		$data_edit = mysql_fetch_array(mysql_query("SELECT * FROM bannerSlider WHERE idBanner = '$_GET[edit]'"));
	}
	if(isset($_POST['update'])){
		$sql_udpate = mysql_query("UPDATE bannerSlider SET BannerLink ='$_POST[BannerLink]'  WHERE idBanner = '$_GET[edit]'");
		$idBannerget = $_GET['edit'];
		if($sql_udpate){

			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../bahana_images_assets/slider_assets/".$idBannerget.".jpg");
			echo "<script>alert('Data has been Succesfully updated!')</script>";
			echo "<script>document.location.href='index.php?menu=banner_slider'</script>";
		}
	}
	if(isset($_POST['simpan'])){
		$sql_simpan = mysql_query("INSERT INTO `bannerSlider` (`idBanner`, `BannerLink`) VALUES (null, '$_POST[BannerLink]');");
		$data_gambar = mysql_insert_id();
		// $file = $_FILES['foto_epa']['tmp_name'];
		// $file_upload = move_uploaded_file($file, "../bahana_images_assets/epa/12.jpg");

		if($sql_simpan){

			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../bahana_images_assets/slider_assets/".$data_gambar.".jpg");

				
			echo "<script>alert('Data has been Succesfully saved!')</script>";
			echo "<script>document.location.href='index.php?menu=banner_slider'</script>";
		}
	}

	if(isset($_GET['delete'])){
		$sql_delete= mysql_query("DELETE FROM bannerSlider WHERE idBanner = '$_GET[delete]'");
		if($sql_delete){
			        $filePath = "../../bahana_images_assets/slider_assets/".$_GET['delete'].".jpg";


       // $filePath = $id_foto.".jpg";
         if (file_exists($filePath)) 
               {
                    unlink($filePath);
                   "<script>alert('Picture has been Succesfully deleted!')</script>";
              }
              else
              {
                     "<script>alert('Foto tidak ada')</script>";
              }

			echo "<script>alert('Data has been Succesfully Deleted!')</script>";
			echo "<script>document.location.href='index.php?menu=banner_slider'</script>";
		}
	}
 ?>
<!-- HTML -->
<div class="row">
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-4">
    		<h1 style="margin-top: 0px; font-weight: bold; margin-left: 2%;">BANNER SLIDER</h1>
    	</div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-8"></div>
</div>
<br><br>
<div class="data">
	<div class="col-md-4">
		<form method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label>Link Banner</label>
				<input type="text" value="<?php echo $data_edit['BannerLink'] ?>" class="form-control" name="BannerLink">
			</div>
			
			<div class="form-group">
				<label>Banner Image</label>
				<input type="file" name="fileToUpload" id="fileToUpload">
			</div>
			<div class="form-group">
				<?php if(!$_GET['edit']){ ?>
				<input type="submit" name="simpan" value="SAVE" class="btn btn-success">
				<a href="index.php?menu=banner_slider"><button class="btn btn-danger">CANCEL</button></a>
				<?php }else{ ?>
				<input type="submit" name="update" value="UPDATE" class="btn btn-success">
				<a href="index.php?menu=banner_slider"><button class="btn btn-danger">CANCEL</button></a>

				<?php } ?>
			</div>
		</form>
	</div>
	<div class="col-md-8">
		<table class="table" id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td>ID Banner</td>
					<td>Link Banner</td>
					<td>Date</td>
					<td>Images</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
					$sql = mysql_query("SELECT * FROM bannerSlider ");
					while($data= mysql_fetch_array($sql)){
				 ?>
				<tr>
					<td><?php echo $data['idBanner']; ?></td>
					<td><?php echo $data['BannerLink']; ?></td>
					<td><?php echo $data['tanggal']; ?></td>
					<!-- <td><a target="blank" href="../bahana_images_assets/epa/<?php echo $data['id'];?>.jpg"><img style="height: 50px; width:50px;" src="../bahana_images_assets/epa/<?php echo $data['id'];?>.jpg"></a></td>
					<td>
						<a href="index.php?menu=epa&edit=<?php echo $data[0] ?>"><i class="fa fa-pencil"></i>&nbsp;</a>|
						<a onclick="return confirm('Are you sure detele this category')" href="index.php?menu=epa&delete=<?php echo $data[0] ?>"><i class="fa fa-trash"></i>&nbsp;</a>
					</td> -->


						<?php
                    $filename = "../bahana_images_assets/slider_assets/".$data['idBanner'].".jpg";
                            if (!file_exists($filename)) {
                                

                ?>

                <td><a target="blank" href="../bahana_images_assets/slider_assets/if_foto_kosong.jpg"><img style="height: 50px; width:50px;" src="../bahana_images_assets/epa/if_foto_kosong.jpg"></a></td>
                <td>

                    <?php

                            }else{
                                ?>
                <td><a target="blank" href="../bahana_images_assets/slider_assets/<?php echo $data['idBanner'];?>.jpg"><img style="height: 50px; width:50px;" src="../bahana_images_assets/slider_assets/<?php echo $data['idBanner'];?>.jpg"></a></td>

                <td>
                            <?php
                            }
                    ?>
                    	
						<a href="index.php?menu=banner_slider&edit=<?php echo $data[0] ?>"><i class="fa fa-pencil"></i>&nbsp;</a>|
						<a onclick="return confirm('Are you sure detele this category')" href="index.php?menu=banner_slider&delete=<?php echo $data[0] ?>"><i class="fa fa-trash"></i>&nbsp;</a>
					</td> 


				</tr>
				<?php $no++; } ?>

			</tbody>
		</table>
	</div>
</div>



	<script>
    $(document).ready(function() {
	   $('#example').DataTable();
	} );

	</script>