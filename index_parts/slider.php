<?php
  include('conn.php');
 ?>
<div class="hidden-md hidden-lg hidden-md hidden-sm" style="height: 70px;"> </div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">

    <?php
      $datapertama = mysql_fetch_array(mysql_query("SELECT * FROM bannerSlider ORDER BY idBanner ASC LIMIT 0,1 "));
     ?>

    <div class="carousel-item active">
      <a onClick = "click_banner(<?php echo $datapertama[0]; ?>)"  target="_blank" href="<?php echo $datapertama[1] ?>"><img class="test" style="width:100%;" src="bahana_images_assets/slider_assets/<?php echo $datapertama[0] ?>.jpg"></a>
    </div>

    <?php
      $sql2 = mysql_query("SELECT * FROM bannerSlider ORDER BY idBanner ASC LIMIT 9999999 OFFSET 1");
      while($data = mysql_fetch_array($sql2)){
    ?>
    <div class="carousel-item">
    <a onClick = "click_banner(<?php echo $data[0]; ?>)" target="_blank" href="<?php echo $data[1] ?>"><img  class="test" style="width:100%;" src="bahana_images_assets/slider_assets/<?php echo $data[0] ?>.jpg"></a>
    </div>
    <?php } ?>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <style>
 .carousel-inner
 {
  z-index: 100;
 }

 .carousel-control-prev
 {
  background: linear-gradient(to right, rgba(0,0,0,0.40) 0%,rgba(0,0,0,0) 100%);
 }

 .carousel-control-next
 {
  background: linear-gradient(to left, rgba(0,0,0,0.40) 0%,rgba(0,0,0,0) 100%);
 }



 @media(min-width:320px) and (max-width: 1000px)
    {
        .he
        {
          display: block !important;
        }

        .carousel-inner
        {
          z-index: -1000 !important;
        }
    }
 </style>
