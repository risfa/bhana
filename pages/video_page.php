<?php 
  include('../conn.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from verothemes.com/harmony/html/03_4_video_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 03:51:41 GMT -->
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
    <script src="https://ajax.googleapis.com/ajax/"></script>

</head>
<body class="har_middle_titles">
  <!-- Page -->
  <div class="har_page" id="har_page">
  
    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-arrow-up har_go "> <i style="font-size: 20px;" class="fas fa-arrow-up"></i></a>


    <!-- Header -->
    <header>       
        <?php include("navbar_page.php"); ?>
      
    </header>
    <!-- Header End -->

    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_wht_txt har_page_title_great har_image_bck har_fixed" style="background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%); box-shadow:  0 0 25px rgba(0,0,0,0.5);">

       <!-- Over -->

      <div class="container text-left">
        <div class="row">
          
          <div class="col-md-8">
            <h1 style="color: black;" class="har_h1_title">Video Gallery</h1>

          </div>
          
          <div class="col-md-4">
            
          </div>
          
        </div>
      </div>
    </div>

    <!-- Content -->
    <section id="har_content" class="har_content">

      <!-- section -->
        <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="images/studio/sl_2.jpg" data-stellar-background-ratio="0.2">
          <!--  Over-->
          <div style="background-color: white; color: black;"></div>
          <div style="color: black;" class="container-fluid  text-center">
                          
            <h2 style="margin-top: 30px;">Video Gallery</h2>
            <h3>Follow us on <a style="color: red; text-decoration: none;" href="https://www.youtube.com/channel/UCjv1fVV4xb_byp-UJGcKk9w" target="_blank">Youtube</a> to view more</h3>

            <div class="row">
             <?php 
                $sql_video= mysql_query("SELECT * FROM video_galery");
                while ($sql_video1 = mysql_fetch_array($sql_video)){
             ?>
                <div class="col-md-4">

                  <!-- item -->
                  <div class="har_video_item">
                    <iframe src="<?php echo $sql_video1[1]?>" allowfullscreen></iframe>          
                  </div>
                </div>
              <?php } ?>


              </div>
             <!-- row end -->

             <!-- row end -->
          </div>
            <!-- container end -->
  
        </section>
        <!-- section end -->

    </section>
    <!-- section end -->


   <?php include("../index_parts/footer.php") ?>

</div>
<!-- Page End -->

<!-- JQuery -->
<script src="js/jquery-1.12.3.min.js"></script> 
<!-- Library JS -->
<script src="js/harmony_library_min.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script> 

<!-- Theme JS -->
<script src="js/harmony_min_script.js"></script>


</body>

<!-- Mirrored from verothemes.com/harmony/html/03_4_video_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 03:51:41 GMT -->
</html>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="../js/jquery-1.12.3.min.js"></script> 
<!-- Library JS -->
<script src="../js/harmony_library_min.js"></script>

<!-- Theme JS -->
<script src="../js/harmony_min_script.js"></script>