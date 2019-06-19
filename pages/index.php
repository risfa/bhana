<?php 
  include('../conn.php');
  if(empty($_GET['details'])){
    echo "<script> window.location.href='../index.php'</script>";
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
<title>Bahana 101.8 FM</title>

 <link rel="shortcut icon" href="http://joker.5dapps.com/masimanetwork/bahanafm/assets/bahana.png">
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


</head>


<?php include("navbar_page.php"); ?>


<body class="har_middle_titles">

<!-- Page -->
<div class="har_page" id="har_page">
    
    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-arrow-up har_go "> <i style="font-size: 20px;" class="fas fa-arrow-up"></i></a>
    
   
    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" data-color="#333">

      <!-- Over -->
      <div class="har_over" style="background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);"></div>

      <div class="container text-left">
 <?php 
        $data_news_1 = mysql_fetch_array(mysql_query("SELECT * FROM pages  WHERE idPages = '$_GET[details]'")); 
        ?>
          
          <div class="col-md-4">
          </div>
          <div class="col-md-8" style="color:black;">
        <h1 class="har_h1_title" ><?php echo $data_news_1['PagesTitle']?></h1>
          
        </div>
      </div>
    </div>

    <!-- Content -->
    <section id="har_content" class="har_content">


        <!-- section -->
        <section class="har_section">
            <div class="container">

          
                            <div class="col-md-2  hidden-xs hidden-sm" style="height: 300px; background-color: orange; margin-top: 35px;">
                    		ads

                </div>
                <div class="col-md-9 col-xs-12">
                    
                    <!-- Post Item -->
            
                    <div class="har_post_item" style="margin-top: 5px;">
                        <div class="har_post_img">
                          <!-- <a href="../bahana_images_assets/news/<?php echo $data_news_1[0] ?>.jpg" class="lightbox">
                              <img src="../bahana_images_assets/news/<?php echo $data_news_1[0] ?>.jpg" alt=""> -->
                          </a>
                        </div>
                          
                       
                          
                        <div class="har_post_info">
                            <?php echo $data_news_1[2]?>
                            
                        </div>

                      
                        <p style="font-size:15px;"><?php echo $data_news_1[3]?>
                        
                        </p>
                    
                    </div>
                    <!-- item end -->
                    
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