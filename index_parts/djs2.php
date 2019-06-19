<section class="har_section har_image_bck  head" id="instagram" style="" >
	<div class="container-fluid text-center">

		<!-- <h1 style="margin-top: 20px;"></h1> -->
		<div class="container-fluid text-center niws head" style="padding: 70px;" >
			 <h1 data-aos="fade-up" data-aos-delay="150" class="aos-init aos-animate"><b>FOLLOW US ON INSTAGRAM</b></h1>
	 </div>

		<div id="carouselDjs" class="carousel slide pause" data-ride="carousel" data-interval="false" data-pause="false">

			<div class="carousel-inner" style="width: 100%;">
				<div class="carousel-item active">
					<div class="">
						<div class="col-md-3" style="padding: 0px"><img class="img-fluid" style="width: 100%"  src="assets/ig1.jpg"  alt="First slide"></div>
						<div class="col-md-1" style="padding: 0px"><img class="img-fluid" style="width: 100%"  src=""  alt="First slide"></div>
						<div class="col-md-3" style="padding: 0px"><img class="img-fluid" style="width: 100%"  src="assets/ig3.jpg"  alt="First slide"></div>
						<div class="col-md-1" style="padding: 0px"><img class="img-fluid" style="width: 100%"  src=""  alt="First slide"></div>
						<div class="col-md-3" style="padding: 0px"><img class="img-fluid" style="width: 100%"  src="assets/ig5.jpg"  alt="First slide"></div>
						<div class="col-md-1" style="padding: 0px"><img class="img-fluid" style="width: 100%"  src=""  alt="First slide"></div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>

				</div>
				<div class="carousel-item">
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
					<div class="col-md-2 col-xs-2" style="padding: 0px"><img class="img-fluid" style="width: 100%" src="assets/300x300.png"  alt="First slide"></div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselDjs" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true" style="z-index: 999999999999999999999999999999;"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselDjs" role="button" data-slide="next" style="z-index: 99999;">
				<span class="carousel-control-next-icon" aria-hidden="false" style="z-index: 999999999999999999999999999999999;"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>


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
$(document).ready(function() {
   $("#carouselDjs").swiperight(function() {
      $(this).carousel('prev');
    });
   $("#carouselDjs").swipeleft(function() {
      $(this).carousel('next');
   });
});
</script>
