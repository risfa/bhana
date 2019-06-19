<?php
include('../conn.php');
/*if(empty($_GET['details'])){
echo "<script> window.location.href='../news.php'</script>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<script>
	function myFunction1() {
		var x = document.getElementById("baba");
		if (x.style.display === "none") {
			x.style.display = "block";
		}
	}
</script>
<!-- Mirrored from verothemes.com/harmony/html/02_2_blog_sidebar_ls_1col.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 03:50:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bahana 101.8 FM</title>


	<!-- Library CSS -->
	<link href="../css/harmony_library_min.css" rel="stylesheet">
	<link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

	<!-- Icons CSS -->
	<link href="fonts/themify-icons.css" rel="stylesheet">

	<!-- Theme CSS -->
	<link href="../css/harmony_style.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--  <script type="text/javascript">
  // $(window).ready(function(){
  function clickCategory(ID){

  $.ajax({
  url: 'pagination_ajax/getresult.php',
  type: "GET",
  data:  {ID : ID},
  success: function(data){
  // console.log(data);
  $("#pagination-result").html(data);
},
error: function()
{}
});
}
// });

</script> -->


</head>

<script type="text/javascript">
// $(window).ready(function(){
	function clickCategory(ID){

		$.ajax({
			url: 'pagination_ajax/getresult.php',
			type: "GET",
			data:  {ID : ID},
			success: function(data){
      // console.log(data);
      $("#pagination-result").html(data);
  },
  error: function()
  {}
});
	}
// });

</script>

<?php include("navbar_page.php"); ?>


<body class="har_middle_titles">

	<!-- Page -->
	<div class="har_page" id="har_page">

		<!-- To Top -->
		<a href="#har_page" class="har_top ti ti-arrow-up har_go "> <i style="font-size: 20px;" class="fas fa-arrow-up"></i></a>


		<!-- PAGE TITLE SMALL -->
		<div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" style="background-color: white;">


			<!-- Over -->
			<div class="har_over" style="background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%); height: 80%; !important;}"></div>

			<div class="container text-left">
				<div class="row">

						<div class="col-md-3"></div>
					<div class="col-md-6" style="color:black; text-align: center;">
						<h1 class="har_h1_title" >News</h1>
						<h3></h3>
					</div>

					<div class="col-md-3">
					</div>

				</div>
			</div>
		</div>

		<!-- Content -->
		<section id="har_content" class="har_content">

			<!-- section -->
			<section class="har_section">
				<div class="container">

					<div class="row" style="margin-top: 4vh;">
						<div class="col-md-2 hidden-md hidden-lg hidden-xl" style="padding-bottom: 50px;"> <div style="color: #ffc925; text-align: center; font-size: 20px;margin-top: -80px;" >
							Category
						</div>
						<div> <?php
						$sql = mysql_query("SELECT news.category, category.ID as category_id, category.Category FROM category inner JOIN news ON news.category = category.ID group by news.category");
						while($data = mysql_fetch_array($sql)){
							?>

							<div style="background-color:#ffc925; margin-top: 3px; border-radius: 3px;  float right; display: inline-block; padding-left: 11px;padding-right: 11px; margin-right: 2px;"><button style="background: none; border: none;" onclick="clickCategory(<?php echo $data['category_id'];?>)"><?php echo $data['Category'];?></button></div><br>

							<?php } ?>
								<hr>	
						</div> </div>
						<?php 
            $ads = mysql_query("SELECT * FROM ads WHERE category = 'INPAGE_ADS' ORDER BY id DESC");
            while($data = mysql_fetch_array($ads)){
           ?>
					<div class="col-md-2  hidden-xs hidden-sm" style="background-color: #ffa50357; margin-top:-20px;">
							 <img src="../bahana_images_assets/ads_slot_assets/<?php echo $data[0] ?>.gif">
						</div>
						<?php } ?>
						<div class="col-md-7 col-xs-12">

							<!-- Post Item -->

							<div class="har_post_item" style="padding-top:50px;">
								<?php
								include('pagination_ajax/index.php');
								?>
								<br><br>
							</div>
<!-- item end -->
<!-- navigation -->
<nav class="har_blog_pag">

  <!-- <ul class="pagination">
  <li><a href="#"><i class="ti ti-angle-left"></i></a></li>
  <li class="active" ><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><i class="ti ti-angle-right"></i></a></li>
</ul> -->
</nav>
<!-- navigation end -->

</div>
<div class="col-md-2 hidden-sm hidden-xs"> <div style="color: #ffc925; text-align: right; font-size: 30px;" >
	Category
</div>
<div> <?php
$sql = mysql_query("SELECT news.category, category.ID as category_id, category.Category FROM category inner JOIN news ON news.category = category.ID group by news.category");
while($data = mysql_fetch_array($sql)){
	?>

	<div style="background-color:#ffc925; margin-top: 3px; border-radius: 3px;  float right; display: inline-block; padding-left: 11px;padding-right: 11px; margin-right: 2px; float: right;"><button style="background: none; border: none;" onclick="clickCategory(<?php echo $data['category_id'];?>)"><?php echo $data['Category'];?></button></div>

	<?php } ?>

</div> </div>

<!-- col end -->

<!--Sidebar-->

<!--Sidebar End-->

</div>



</div>
<!-- container end -->
</section>
<!-- section end -->



</section>
<!-- section end -->


<br><br>
<?php include("../index_parts/footer.php") ?>


</div>
<!-- Page End -->
<style>
#image-content:hover {
	color: none !important;
	text-decoration: underline;
}
.har_page_title_great {
	padding-bottom: 95px;
	padding-top: 200px;
}

</style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="../js/jquery-1.12.3.min.js"></script>
<!-- Library JS -->
<script src="../js/harmony_library_min.js"></script>

<!-- Theme JS -->
<script src="../js/harmony_min_script.js"></script>


</body>

<!-- Mirrored from verothemes.com/harmony/html/02_2_blog_sidebar_ls_1col.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 03:50:52 GMT -->
</html>
