<!DOCTYPE html>
<html lang="en">

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


</head>


<?php

include("../conn.php");
include("navbar_page.php");

?>
<body class="har_middle_titles">

  <!-- Page -->
  <div class="har_page" id="har_page">

    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-arrow-up har_go "> <i style="font-size: 20px;" class="fas fa-arrow-up"></i></a>


    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2"  style="background:white;">


      <!-- Over -->
      <div class="har_over" style="background:linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%); height:80%;"></div>

      <div class="container text-left">
        <div class="row">
          <div class="col-md-3">

          </div>
          <div class="col-md-6" style="color:black; text-align:center;">
            <h1 class="har_h1_title" >Podcast</h1>
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
        <div class="container text-center">

          <br>

            <div class="col-md-2 hidden-xs hidden-sm">
            	<div style="height: 700px; background-color: rgba(0,0,0,0.2)"> <h1>ADS SLOT</h1></div>
            </div>
            <div class="col-md-8 col-xs-12">
            	<?php
              $sql = mysql_query("SELECT * FROM podcast_detail where ID ='$_GET[details]'");
              while($sql1 = mysql_fetch_array($sql)){
             ?>
             <div class="col-md-4 hidden-xs hidden-sm" style="text-align: left;">

            </div>
            <div class="col-md-4 hidden-xs hidden-sm" style="text-align: left;">
            	<center>
              <img src="../bahana_images_assets/podcast/<?php echo $sql1[0] ?>.jpg" style="width: 100%;"><br><p style="font-size: 17px;margin-left: -200px;width:600px;"><?php echo $sql1[2] ?></p>
              </center>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm" style="text-align: left;">
            </div>
            <div class="col-xs-12 hidden-lg hidden-md hidden-xl" style="text-align: center;">
              <img src="../bahana_images_assets/podcast/<?php echo $sql1[0] ?>.jpg" style="width: 50%;"><br><p style="font-size: 17px"><?php echo $sql1[2] ?></p>
            </div>
            <?php } ?>
              <div id="<?php echo $value ?>" style="margin-top: -35px">
                <div data-animation="fadeInDown" data-animation-delay="300">
                  <table id="music-chart" style="width: 100%; "  >
                    <br><br>
                    <tr style="color: #8c8989; font-size: 20px; text-align: center;">

                      <td style="font-size: 3vh; font-weight: bolder;width: 15%;">Title</td>
                      <!-- <td style="font-size: 3vh; font-weight: bolder;width: 15%;">Artist</td> -->

                      <td style="font-size: 3vh; font-weight: bolder;width: 15%;"><center>Play!</center></td>
                    </tr>
                    <tr>
                      <td colspan="2"><br><br></td>
                    </tr>

                    <?php
                    $query = mysql_query("SELECT * FROM Podcast WHERE category ='$_GET[details]' ");
                    $i = 0;
                    $array = array();
                    while ($data = mysql_fetch_array($query)) {
                      $array[] = $data['ID'];
                      ?>

                      <tr style="text-align: center; color: black; margin-bottom: 1vh;">
                        <td style="font-size: 2vh; font-weight: bolder;width: 15%;"><?php echo $data['judul']; ?></td>
                        <!-- <td style="font-size: 2vh; font-weight: bolder;width: 15%;"><?php echo $data['artist']; ?></td> -->

                        <td style="font-size: 2vh; font-weight: bolder;width: 15%;">
                          <center>
                            <a id="play_audio<?php echo $data['ID']; ?>" data-id="<?php echo $data['ID']; ?>" data-category = "<?php echo $data['category'];?>" class="heart" style="text-decoration:none; color: grey"><i style="font-size: 20px;" class="fas fa-play"></i></a>

                            <a id="pause-click<?php echo $data['ID']; ?>" data-id="<?php echo $data['ID']; ?>" class="heart" style="display :none; text-decoration:none; color: grey"><i style="font-size: 20px;" class="fas fa-pause"></i></a>
                          </center>
                        </td>
                      </tr>
                      <tr><td colspan="6"><hr></td></tr>
                      <br>

                      <?php
                      $i++;
                    }
                    ?>


                  </table>
                </div>
                <br><br>
       </div>
     </div>
     <div class="col-md-2 hidden-sm hidden-xs">
     	<div style="height: 100%; background-color: rgba(0,0,0,0.2)"> <h1>ADS SLOT</h1></div>
     </div>

   <br>	<br>

 </div>
 <!-- container end -->
</section>
<!-- section end -->

</section>
<!-- section end -->

<?php include("../index_parts/footer.php") ?>

</div>
<!-- Page End -->
<style type="text/css">
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

  @media all and (min-width:320px) and (max-width: 480px)
  {

  }

@media (min-width: 768px)
{
 .music-web
 {
  display: block;
}
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

<script type="text/javascript">
    // var iteration = <?php echo($i); ?>;
    var array = <?php echo json_encode($array);?>;
    console.log(array);
    console.log(array.length);
    var audio = '';
    var data = '';
    for (var i = 0 ; i <= array.length; i++) {

      $('#play_audio'+array[i]).click(function(){
        data = $(this).data('id');
        // var category = $(this).data('category');
        console.log(data);
        // console.log(category);
        audio = new Audio('../assets/mp3/'+data+'.mp3');
        audio.play();
        $(this).css('display','none');
    $('#pause-click'+data).css('display','block');
    // $(this).html('<i style="font-size: 20px;"  class="fas fa-pause"></i>')
    // $(this).attr('id','pause-click');
  });

    $('#pause-click'+array[i]).click(function(){
    // alert('click');
    audio.pause();
    $(this).css('display','none');
    $('#play_audio'+data).css('display','block');
  });
    }

</script>

</body>

<!-- Mirrored from verothemes.com/harmony/html/02_2_blog_sidebar_ls_1col.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 03:50:52 GMT -->
</html>
