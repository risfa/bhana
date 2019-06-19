<?php 
	include('conn.php');
 ?>
<section class="har_section har_image_bck hidden-sm hidden-xs head" id="instagram" style="" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<div class="container-fluid text-center">

		<!-- <h1 style="margin-top: 20px;"></h1> -->
		<div class="container-fluid text-center niws head" style="padding: 70px;" >
			 <h1 data-aos="fade-up" data-aos-delay="150" class="aos-init aos-animate"><b>FOLLOW US ON INSTAGRAM</b></h1>
	 </div>

		<div id="carouselInstagram" class="carousel slide pause" data-ride="carousel" data-interval="false" data-pause="false">

			<div class="carousel-inner" style="width: 100%;">
				<div class="carousel-item active">
					<div class="">
				<?php 
				$datapertama = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 6");
				while($sql = mysql_fetch_array($datapertama)){
				 ?>
						<style>
							.instafeed<?php echo $sql[0] ?>
							{
								background-image:url("<?php echo $sql[3] ?>");
							}
						</style>
						<div class="col-md-2" style="padding:5px;"><a href="<?php echo $sql[2] ?>"><div class="instafeed<?php echo $sql[0] ?>" style="padding: 0px; height:230px;width:auto;background-size: 100%;background-position: center; background-repeat: no-repeat;" ></div></a></div>
						<?php } ?>
					</div>
				</div> 
				<div class="carousel-item">
				<?php 
				$sql = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 6,6");
				while($insta = mysql_fetch_array($sql)){
				 ?>
				 	<style>
							.instafeeds<?php echo $insta[0] ?>
							{
								background-image:url("<?php echo $insta[3] ?>");
							}
						</style>
					<div class="col-md-2 "  style="padding: 0px;"><a style=" height: 245px; width: 245px;" href="<?php echo $insta[2] ?>"  ><div class="instafeeds<?php echo $insta[0]?>" style="padding: 0px; height: 255px;width: auto;background-size: 100%;background-position: center; background-repeat: no-repeat;"></div></a></div>
				<?php } ?>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselInstagram" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true" style="z-index: 999999999999999999999999999999;"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselInstagram" role="button" data-slide="next" style="z-index: 99999;">
				<span class="carousel-control-next-icon" aria-hidden="false" style="z-index: 999999999999999999999999999999999;"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<!-- Kedua -->
	<section class="har_section har_image_bck hidden-lg hidden-xl hidden-md" id="instagram" >
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<div class="container-fluid text-center">

			<h1 style=" padding:50px;">Follow us on Instagram</h1>

			<div id="carouselInstagram2" class="carousel slide pause" data-ride="carousel" data-interval="false" data-pause="false">

				<div class="carousel-inner" style="width: 100%;">

					<div class="carousel-item active">
						<div class="">
						<?php 
							$insta = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 0,1");
							while($gram = mysql_fetch_array($insta)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $gram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $gram[3] ?>"  alt="First slide"></a></div>
							<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 1,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 2,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 3,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 4,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 5,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 6,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 7,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>

					<div class="carousel-item ">
						<div class="">
							<?php 
							$instag = mysql_query("SELECT * FROM instagram ORDER BY id ASC LIMIT 8,1");
							while($ram = mysql_fetch_array($instag)){
						 ?>
							<div class="col-md-12" style="padding: 0px"><a href="<?php echo $ram[2] ?>"><img class="img-fluid" style="width: 100%" src="<?php echo $ram[3]?>" alt="First slide"></a></div>
						<?php } ?>
						</div>
					</div>


				</div>
				<a class="carousel-control-prev" href="#carouselInstagram2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true" style="z-index: 999999999999999999999999999999;"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselInstagram2" role="button" data-slide="next" style="z-index: 99999;">
					<span class="carousel-control-next-icon" aria-hidden="false" style="z-index: 999999999999999999999999999999999;"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
	<!-- Kedua -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>
</html>

<br><br><br>

<style>
.carousel-control-prev {
	left: 0;
	z-index: 9999;
}
.carousel-control-next
{
	z-index: 99999;
}

@media(min-width:320px) and (max-width: 1000px)
{
	.carousel-control-prev {
		left: 0;
		z-index: 0;
	}
	.carousel-control-next
	{
		z-index: 0;
	}

}
</style>




<script>
// $('#carouselInstagram').carousel({
//   interval :
// });
</script>
