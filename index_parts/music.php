<?php

preg_match('/\((.*?)\)/', $_SERVER['HTTP_USER_AGENT'], $matches, PREG_OFFSET_CAPTURE);
$device_name = $matches[0][0];
$_SERVER['REMOTE_ADDR'];
$unique_id=md5($device_name.$_SERVER['REMOTE_ADDR'].$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
include('conn.php');
?>
<script>
$(document).ready(function(){
	document.getElementById("flip2").style.display = "none";
	document.getElementById("panell").style.display = "none";
	$("#flip").click(function(){
		$("#panel").slideToggle("slow");
		$("#panell").slideToggle("slow");
		document.getElementById("flip2").style.display = "block";
		document.getElementById("flip").style.display = "none";
	});
	$("#flip2").click(function(){
		$("#panel").slideToggle("slow");
		$("#panell").slideToggle("slow");

		document.getElementById("flip2").style.display = "none";
		document.getElementById("flip").style.display = "block";
	});
});

</script>
<!-- <script>
$(document).ready(function(){
$("#flipp").click(function(){
$("#panell").slideToggle("slow");
});
});
</script> -->

<style type="text/css">
.lagi_aktif{
	font-size: 20px;
	color: red;
}
.lagi_aktif:hover{
	font-size: 20px;
	color: grey;
}
</style>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!-- <div class="row head text-center" style="height: auto; width: 100.65%;"><div class="container text-center"><center><h1 style="font-weight: bolder; color: black; text-align: center;padding-top: 25px;">Indonesia TOP 20</h1><br><h2></h2></center></div></div> -->
<div class="container-fluid text-center niws head " style="padding: 50px; "   id="djs">
	<h1 data-aos="fade-up" data-aos-delay="100">
		<b>Indonesia TOP 20</b>
	</h1>
	<h3 data-aos="fade-down" data-aos-delay="150">Jadilah yang paling eksis dengan mendengarkan 20 musik terbaik kami.</h3>
</div>
<div id="music" style="background-color: #232020ab">
	<div class="container">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div  style="margin-top: -35px">
			<div class="music-web">
				<table id="music-chart" style="width: 100%; " class=" hidden-xs" >
					<tr style="color: #8c8989; font-size: 20px; text-align: center;">
						<td style="width: 200px"></td>
						<td style="font-size: 20px; font-weight: bolder;width: 15%;">SONG TITLE</td>
						<td style="font-size: 20px; font-weight: bolder;width: 15%;">ARTIST</td>
						<td style="font-size: 20px; font-weight: bolder;width: 15%;">ALBUM</td>
						<td style="font-size: 20px; font-weight: bolder;width: 15%;">GENRE</td>
						<td style="font-size: 20px; font-weight: bolder;width: 15%;">VOTE!</td>
					</tr>
					<tr>
						<td colspan="6">
							<hr>
						</td>
					</tr>
					<?php
					$sql = mysql_query("SELECT * FROM music_chart LIMIT 0,10");
					$no=1;
					$counting = 1;

					while($data = mysql_fetch_array($sql)){
						if($no == 10){ $no = $no;}else{$no = '0'.$no;}
						?>
						<tr data-aos="fade-left" data-aos-delay="100" style="text-align: center; color: black; margin-bottom: 1vh; color: white;">
							<td style="width:100px;">
								<font style="font-size: 40px;margin-right: 30px;">
									<?php echo $no; ?>
								</font>
								<img style="width: 60px; height: 60px;" src="bahana_images_assets/chart_assets/<?php echo $data[0]?>.jpg">
							</td>
							<td style="font-size: 15px; width: 15%;">
								<?php echo $data['song_tittle'] ?>
							</td>
							<td style="font-size: 15px; width: 15%;">
								<?php echo $data['artist'] ?>
							</td>
							<td style="font-size: 15px; ">
								<?php echo $data['album'] ?>
							</td>
							<td style="font-size: 15px; ">
								<?php echo $data['genre'] ?>
							</td>
							<td style="font-size: 15px; ">
								<?php
								$sql_cek_unique_id = mysql_query("SELECT * from unique_id where unique_string = '".$unique_id."' ");
								while ($data_cek_unique_id = mysql_fetch_array($sql_cek_unique_id)) {

									if ($data_cek_unique_id['vote'.$counting] == 0) {

										?>
										<div  id="vote_click<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>"  class="heart" style="text-decoration:none; color: grey">
											<i style="font-size: 20px;" id="heart-hidden
											<?php echo($data[0]); ?>" class="fas fa-heart">
										</i>
									</div>
									<?php
								}else{
									?>

									<div  id="vote_unclick<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>" >
										<i class=" fas fa-heart lagi_aktif"  id="heart-unclick<?php echo($data[0]); ?>" >
										</i>
									</div>
									<?php
								}

							}
							?>
						</td>
						<tr>
							<td colspan="6">
								<hr>
							</td>
						</tr>
					</tr>
					<?php
					$counting++;
					$no++;  }
					?>
				</table>
			</div>
			<br>
			<br>
			<br>
			<div class="music-mobile" >
				<?php
				$sql = mysql_query("SELECT * FROM music_chart LIMIT 0,10");
				$counting_mobile = 1;
				$no=1;
				while($data = mysql_fetch_array($sql)){
					if($no == 10){ $no = $no;}else{$no = '0'.$no;}
					?>
					<div style="">
						<div class="col-xs-4" style=" background-image:url(bahana_images_assets/chart_assets/<?php echo $data[0]?>.jpg); background-size: 100%; background-repeat: no-repeat; height: 135px;">
							<div style="position: absolute; background-color: orange;  right: 0; border-radius: 25px;padding-right: 12px;padding-left: 12px;padding-top:3px;padding-bottom: 1px; border-radius: 25px;"> <h3><?php echo $no; ?></h3></div>

						</div>
						<div class="col-xs-6" style="font-size: 15px; color: white;" >
							<?php echo $data['song_tittle'] ?>
							<hr>
							<?php echo $data['artist'] ?>
							<hr>
							<?php echo $data['genre'] ?>
							<hr>
							<br>
						</div>
						<div class="col-xs-2" style="margin-top:15%; ">
							<?php
							$sql_cek_unique_id = mysql_query("SELECT * from unique_id where unique_string = '".$unique_id."' ");
							while ($data_cek_unique_id = mysql_fetch_array($sql_cek_unique_id)) {

								if ($data_cek_unique_id['vote'.$counting_mobile] == 0) {

									?>
									<div  id="vote_click_mobile<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>"  class="heart" style="text-decoration:none; color: grey">
										<i style="font-size: 20px;" id="heart-hidden
										<?php echo($data[0]); ?>" class="fas fa-heart">
									</i>
								</div>
								<?php
							}else{
								?>

								<div  id="vote_unclick_mobile<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>" >
									<i class=" fas fa-heart lagi_aktif"  id="heart-unclick<?php echo($data[0]); ?>" >
									</i>
								</div>
								<?php
							}

						}
						?>
					</div>

				</div>
				<?php
				$counting_mobile++;
				$no++;
			}
			?>
		</div>
		<!-- collapse -->
		<div style="margin-top: -65px;" class=" collapse music-web hidden-xs hidden-sm" id="panel" data-animation="fadeInDown" data-animation-delay="300">
			<table id="music-chart" style="width: 100%; "  >
				<tr>
					<td colspan="6">
						<hr>
					</td>
				</tr>
				<?php
				$sql = mysql_query("SELECT * FROM music_chart LIMIT 10,20");
				$no=11;
				$counting2 = 11;
				while($data = mysql_fetch_array($sql)){
					?>
					<tr data-aos="fade-right" data-aos-delay="100" style="text-align: center; color: black; margin-bottom: 1vh; color: white;">
						<td style="width:100px;">
							<font style="font-size: 40px;margin-right: 30px;">
								<?php echo $no; ?>
							</font>
							<img style="width: 60px; height: 60px;" src="bahana_images_assets/chart_assets/<?php echo $data[0]?>.jpg">
						</td>
						<td style="font-size: 15px; width: 15%;">
							<?php echo $data['song_tittle'] ?>
						</td>
						<td style="font-size: 15px; width: 15%;">
							<?php echo $data['artist'] ?>
						</td>
						<td style="font-size: 15px; width: 15%;">
							<?php echo $data['album'] ?>
						</td>
						<td style="font-size: 15px; width: 15%;">
							<?php echo $data['genre'] ?>
						</td>
						<td style="font-size: 15px; width: 15%; ">
							<?php
							$sql_cek_unique_id = mysql_query("SELECT * from unique_id where unique_string = '".$unique_id."' ");
							while ($data_cek_unique_id = mysql_fetch_array($sql_cek_unique_id)) {

								if ($data_cek_unique_id['vote'.$counting2] == 0) {

									?>
									<div  id="vote_click<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>"  class="heart" style="text-decoration:none; color: grey">
										<i style="font-size: 20px;" id="heart-hidden
										<?php echo($data[0]); ?>" class="fas fa-heart">
									</i>
								</div>
								<?php
							}else{
								?>

								<div  id="vote_unclick<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>" >
									<i class=" fas fa-heart lagi_aktif"  id="heart-unclick<?php echo($data[0]); ?>" >
									</i>
								</div>
								<?php
							}

						}
						?>
					</td>

					<tr>
						<td colspan="6">
							<hr>
						</td>
					</tr>
				</tr>
				<?php
				$counting2++;
				$no++;  }
				?>
			</table>
		</div>
		<div class="hidden-xl hidden-lg hidden-md" id="panell" >
			<?php
			$sql = mysql_query("SELECT * FROM music_chart LIMIT 10,20");
			$counting_mobile2 = 11;
			$no2 =11;
			while($data = mysql_fetch_array($sql)){
				?>
				<div>
					<div class="col-xs-4" style=" background-image:url(bahana_images_assets/chart_assets/<?php echo $data[0]?>.jpg); background-size: 100%; background-repeat: no-repeat; height: 135px;">
						<div style="position: absolute; background-color: orange;  right: 0; border-radius: 25px;padding-right: 12px;padding-left: 12px;padding-top:3px;padding-bottom: 1px; border-radius: 25px;"> <h3><?php echo $no2; ?></h3></div>
						<!-- <img style="width: 100%" src="bahana_images_assets/chart_assets/<?php echo $data[0]?>.jpg"> -->
					</div>
					<div class="col-xs-5" style="font-size: 15px; color: white;" >
						<?php echo $data['song_tittle'] ?>
						<hr>
						<?php echo $data['artist'] ?>
						<hr>
						<?php echo $data['genre'] ?>
						<hr>
						<br>
					</div>
					<div class="col-xs-2" style="margin-top:15%; ">
						<?php
						$sql_cek_unique_id = mysql_query("SELECT * from unique_id where unique_string = '".$unique_id."' ");
						while ($data_cek_unique_id = mysql_fetch_array($sql_cek_unique_id)) {

							if ($data_cek_unique_id['vote'.$counting_mobile2] == 0) {

								?>
								<div  id="vote_click_mobile<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>"  class="heart" style="text-decoration:none; color: grey">
									<i style="font-size: 20px;" id="heart-hidden
									<?php echo($data[0]); ?>" class="fas fa-heart">
								</i>
							</div>
							<?php
						}else{
							?>

							<div  id="vote_unclick_mobile<?php echo($data[0]); ?>" data-id="<?php echo($data[0]); ?>" >
								<i class=" fas fa-heart lagi_aktif"  id="heart-unclick<?php echo($data[0]); ?>" >
								</i>
							</div>
							<?php
						}

					}
					?>
				</div>
			</div>
			<?php
			$counting_mobile2++;
			$no2++;
		}
		?>
	</div>
	<center >
		<div class="exp hidden-xs" id="flip">
			<i style="background: orange;width: 40px;height: 40px;padding: 10px;font-size: 20px;border-radius: 20px;" class="fas fa-plus plus"></i>
		</div>
	</center>
	<center >
		<div class="exp hidden-xs" id="flip2">
			<i style="background: orange;width: 40px;height: 40px;padding: 10px;font-size: 20px;border-radius: 20px; " class="fa fa-minus"></i>
		</div>
	</center>
	<!-- mobile -->

	<!-- collapse end -->
</div>
</div>
<br>
<br>
<center >
	<button style="margin-bottom: 25px; background: none; border:0px;"><div class="exp music-mobile" id="flipp" data-toggle="collapse"  data-target="#panell">
		<i style="background: orange;width: 40px;height: 40px;padding: 10px;font-size: 20px;border-radius: 20px;" class="fas fa-plus plus"></i>
	</div></button>
</center>

<style type="text/css">
.plus:hover
{
	color: white;
}
#music
{
	background-image: url(assets/Web_banner1.png);
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}

.music-web
{
	display: block

}
.music-mobile
{
	display: none;
}

@media (min-width: 320px) and (max-width: 480px)

{
	.music-web
	{
		display: none !important;
	}
	.music-mobile
	{
		display: block !important;
	}
}

.heart:hover
{
	color: red !important;
}

.heart:active
{
	color: red !important;
}


@media (min-width: 768px)
{
	.music-web
	{
		display: block;
	}
}
</style>
<script type="text/javascript">
$(document).ready(function(){



	for (var i =0; i <= 25; i++) {
		$('#vote_click'+i).click(function(){

			var id = $(this).data("id");
			$.post("api/add_vote.php",{id : id}, function(data, status){
				location.reload();

			});
		});
		$('#vote_click_mobile'+i).click(function(){

			var id = $(this).data("id");
			$.post("api/add_vote.php",{id : id}, function(data, status){
				location.reload();

			});
		});

		// $('#heart-unclick'+i).hover(function(){
		// 		$(this).css('color','grey')
		// });

		$('#vote_unclick'+i).click(function(){

			var id = $(this).data("id");
			$.post("api/minus_vote.php",{id : id}, function(data, status){
				location.reload();

			});
		});
		$('#vote_unclick_mobile'+i).click(function(){

			var id = $(this).data("id");
			$.post("api/minus_vote.php",{id : id}, function(data, status){
				location.reload();

			});
		});

	}
})

</script>
