<?php
  include('conn.php');
 ?>
<section class="pod" style="background: #232020ab;">
  <div style="    width: 100%; height: 100%;position: absolute;"></div>
 <div class="container text-center">
    <br><br>
    <center style="margin-bottom: 50px;"><h1 style="font-size: 4.5rem; color: orange;" data-aos="fade-up" data-aos-delay="150" class="aos-init aos-animate"><b>Listen to our Podcast </b></h1></center>
    <br>

    <?php
      $data = mysql_query("SELECT * FROM podcast_detail");
      while($datapertama = mysql_fetch_array($data)){
     ?>
    <div class="col-md-3 hidden-sm hidden-xs aa hove" style="">
        <a href="pages/podcast_page.php?details=<?php echo $datapertama[0] ?>">
            <img src="bahana_images_assets/podcast/<?php echo $datapertama[0] ?>.jpg" style="width: 100%;">
            <div class="overlay"><div class="text" style="color: black;"> <?php echo $datapertama[1] ?></div></div>
        </a>
    </div>
     <div class="col-xs-6 hidden-md hidden-lg hidden-xl aa hove" style="">
        <a href="pages/podcast_page.php?details=<?php echo $datapertama[0] ?>">
            <img src="bahana_images_assets/podcast/<?php echo $datapertama[0] ?>.jpg" style="width: 100%;">
            <div class="overlay"><div class="text" style="color: black;"> <?php echo $datapertama[1] ?></div></div>
        </a>
    </div>
    <?php } ?>

<br><br><br>

</div>
</section>

<style>

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
}



.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.pod
{
	background-image: url("assets/Web_banner.png");
	background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-bottom: 30px;
    background-size: 100%;
}
.hove
{
	border-radius: 50px;
    position: relative;
}
.hove:hover .overlay
{
	background-color: rgba(252, 193, 32,0.9);
    opacity: 1;
    border-radius: 5px;

}


@media all and (min-width:320px) and (max-width: 1024px)
{
    .aa
    {
        padding-top: 3vh !important;
    }
}

</style>
