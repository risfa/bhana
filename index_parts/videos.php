<?php
include ('../conn.php');
?>
<section class="har_section har_image_bck sect"  id="video">
    <div class="container-fluid text-center niws head" style="padding: 70px; ">
       <h1 data-aos="fade-up" data-aos-delay="150" class="aos-init aos-animate"><b>VIDEOS</b></h1>
       <h3 data-aos="fade-down" data-aos-delay="150" class="aos-init aos-animate">Sudah tonton video-video ini, belum?</h3>
   </div>
   <div class="container text-center" style="margin-top: -40px;">

    <div class="container hidden-sm hidden-xs">
    	<div class="col-md-4"><iframe style="width: 100%; height:  300px;" src="https://www.youtube.com/embed/videoseries?list=PL212etGqFQztSF7eN9DkvoG0xYb1m2kA3&t=3s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
      <div class="col-md-4"><iframe style="width: 100%; height:  300px;" src="https://www.youtube.com/embed/videoseries?list=UUjv1fVV4xb_byp-UJGcKk9w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
      <div class="col-md-4"><iframe style="width: 100%; height:  300px;" src="https://www.youtube.com/embed/videoseries?list=PL212etGqFQztgXtxwayJUNxFTx7ZFsPvt" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    </div>
     <div class="container hidden-md hidden-lg hidden-xl">

      <iframe style="width: 80%; height:  300px;" src="https://www.youtube.com/embed/videoseries?list=UUjv1fVV4xb_byp-UJGcKk9w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>


   <!-- <div class="container">
       <div id="videoslide" class="carousel slide pause" data-ride="video">
  <div class="carousel-inner">
    <?php 
      $sql = mysql_query("SELECT * FROM video_galery ORDER BY ID ASC LIMIT 0,2");
      while($sql1 = mysql_fetch_array($sql)){
     ?>
    <div class="carousel-item active">
        <div class="col-md-1"></div>
    <div class="col-md-5"><iframe style="width: 100%; height: 300px;" src="<?php echo $sql1[1] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    
    <div class="col-md-1"></div>
    </div>
    <?php } 

    $query = mysql_query("SELECT * FROM video_galery ORDER BY ID ASC LIMIT 2,1 ");
    while($sql2 = mysql_fetch_array($query)){
    ?>
    <div class="carousel-item">
     <div class="col-md-1"></div>
    <div class="col-md-5"><iframe style="width: 100%; height: 300px;" src="<?php echo $sql2[1] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="col-md-5"><iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/ZWZvDZcztVo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="col-md-1"></div>
    </div>
  <?php } ?>
    <!-- <div class="carousel-item">
       <div class="col-md-1"></div>
    <div class="col-md-5"><iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/ZWZvDZcztVo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="col-md-5"><iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/ZWZvDZcztVo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
    <div class="col-md-1"></div>
    </div> -->
  <!-- </div>
  <a class="carousel-control-prev" href="#videoslide" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#videoslide" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   </div> --> 


    <!-- slider end -->

</div>
<div class="container-fluid text-center niws " style="background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%); padding-bottom: 20px; ">
   <a class="linkhov" href="https://www.youtube.com/channel/UCjv1fVV4xb_byp-UJGcKk9w" style="color: #000; text-decoration: none;"><h2 style="margin-top: 20px;"><b id="load">Lihat video lainnya</b></h2></a>
</div>
<!-- container end -->
</section>





<style>
.sect
{
    background: rgba(255,152,41,1);
    background: -moz-linear-gradient(left, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,152,41,1)), color-stop(86%, rgba(253,187,21,1)), color-stop(100%, rgba(250,201,5,1)));
    background: -webkit-linear-gradient(left, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);
    background: -o-linear-gradient(left, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);
    background: -ms-linear-gradient(left, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);
    background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff9829', endColorstr='#fac905', GradientType=1 );
}

#load:hover
{
    color: white !important;
}

.linkhov:hover
{
  color: red;
}



</style>
