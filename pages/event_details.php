<?php 
  include('../conn.php');
  include('../conn.php');
if(empty($_GET['details'])){
echo "<script> window.location.href='../eventpromo.php'</script>";
}
 ?>
 <script>
function myFunction1() {
    var x = document.getElementById("baba");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
}
</script>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from verothemes.com/harmony/html/02_2_blog_sidebar_ls_1col.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 03:50:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BahanaFM</title>


 <!-- Library CSS -->
  <link rel="shortcut icon" href="http://joker.5dapps.com/masimanetwork/bahanafm/assets/bahana.png">
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


</head>


<?php include("navbar_page.php"); ?>


<body class="har_middle_titles">

<!-- Page -->
<div class="har_page" id="har_page">
    
    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-arrow-up har_go "> <i style="font-size: 20px;" class="fas fa-arrow-up"></i></a>
    
   
    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" data-color="#333">

      <?php 
        $data_epa_1 = mysql_fetch_array(mysql_query("SELECT * FROM epa  WHERE ID = '$_GET[details]'")); 
        ?>
      <!-- Over -->
      <div class="har_over" style="background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);"></div>

      <div class="container text-left">
        <div class="row">
          
          <div class="col-md-8" style="color:black;">
            <h1 class="har_h1_title" ><?php echo $data_epa_1[1]?></h1>
            <h3></h3>
          </div>
          
          <div class="col-md-4">
          </div>
          
        </div>
      </div>
    </div>

    <!-- Content -->
    <setion id="har_content" class="har_content">


        <!-- section -->
        <section class="har_section" style="padding-top: 40px;">
            <div class="container">

           
                       <div class="col-md-2  hidden-xs hidden-sm" style="background-color: orange;">
                    
                            ads
                  
                    

                </div>
                <div class="col-md-10 col-xs-12">
                    
                    <!-- Post Item -->
                    <div class="har_post_item" style="font-size: 17px;">

                        <div class="har_post_img">
                          <a href="../bahana_images_assets/epa/<?php echo $data_epa_1[0] ?>.jpg" class="lightbox">
                              <img src="../bahana_images_assets/epa/<?php echo $data_epa_1[0] ?>.jpg" alt="">
                          </a>
                        </div>
                          
                        <div class="har_post_title">
                          <h3><a id="image-content" href="#"><?php echo $data_epa_1[1]?></a></h3>
                        </div>
                          
                        <div class="har_post_info">
                            <?php echo $data_epa_1[4]?>
                            
                        </div>

                      
                        <p style="font-size: 15px;"><?php echo $data_epa_1[2]?>
                         
                        </p>
                      
                
                    </div>
                    <!-- item end -->
                   <!--  <div class="col-md-4" style="text-align: center;">
                <a href="news_page.php" class="btn">  PREVIOUS </a>
              </div>
              <div class="col-md-4" style="text-align: center;">
                <a href="news_page.php" class="btn">NEWS FEED</a>
              </div>
              <div class="col-md-4" style="text-align: center">
                <a href="news_page" class="btn">NEXT</a>
              </div> -->
                <?php
                            $id=$_GET['details'];
                            $currentid = $id;
                            $prevquery= "SELECT * FROM ads WHERE id < $currentid ORDER BY id DESC LIMIT 1";
                            $dataprev = mysql_fetch_array(mysql_query($prevquery));
                            $prevresult = mysql_query($prevquery);
                            $prevcount = mysql_num_rows($prevresult);

                            $nextquery = "SELECT * FROM ads WHERE id > $currentid ORDER BY id ASC LIMIT 1";
                            $datanext = mysql_fetch_array(mysql_query($nextquery));
                            $nextresult = mysql_query($nextquery);
                            $nextcount = mysql_num_rows($nextresult);
                            // echo "PREV".$dataprev;
                        ?>

                        <!-- ITEM -->
                         <?php  if($prevcount>0){ ?>
               <div class="col-xs-4" style="text-align: center;">
                <a href="event_details.php?details=<?php echo $dataprev[0] ?>" class="btn"> PREVIOUS </a>
              </div>
               <?php } ?>
              <div class="col-xs-4" style="text-align: center;">
                <a href="event_page.php" class="btn">EVENTS FEED</a>
              </div>
              <?php if($nextcount>0){ ?>
              <div class="col-xs-4" style="text-align: center">
                <a href="event_details.php?details=<?php echo $datanext[0] ?>" class="btn" >NEXT</a>
              </div>
              <?php } ?>
                    <!-- navigation -->
                  
                    <!-- navigation end -->

                </div>
                <!-- col end -->
                
                <!--Sidebar-->
       
                <!--Sidebar End-->

           
                                
           
                    
            </div>
            <!-- container end -->
        </section>
        <!-- section end -->
        
        

    </section>
    <!-- section end -->


    
        <?php include("footer_page.php") ?>
    

</div>
<!-- Page End -->
<style>
    #image-content:hover {
    color: none !important;
    text-decoration: underline;
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