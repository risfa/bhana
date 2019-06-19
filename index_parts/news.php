<?php
include('conn.php');
?>
<div class="container-fluid text-center niws head" style="padding: 50px; ">
  <h1 data-aos="fade-up" data-aos-delay="150" class="aos-init aos-animate"><b>BAHANA NEWS</b></h1>
  <h3 data-aos="fade-down" data-aos-delay="150" class="aos-init aos-animate">Cari tahu berita yang lagi <i>happening</i> banget saat ini
  </h3>
</div>

</div>
<br>
<div class="container-fluid niws" style="margin-top: -15px;">
  <section class="har_section har_image_bck">


    <div class="container-fluid har_wht_txt text-center">

      <!-- item -->

      <div class="row har_new_events">
        <?php
        $sqlEvent = mysql_query("SELECT * FROM news ORDER BY id DESC LIMIT 8 ");
        while($sqlEvent1 = mysql_fetch_array($sqlEvent)){
          $tanggal = $sqlEvent1['post_date'];
          $format = date('d F Y',strtotime($tanggal));
          ?>
          <div class="har_new_events_item col-md-3 eve" style="margin-left: -1px; background: #ef4237; background-size:100% 100%;" >
            <div class="har_new_events_item_desc har_image_bck">

              <div style="position: absolute;width: 110%;height: 115%; top: 0; left: 0; margin-left: -5%; background: rgba(0, 0, 0, 0.50);"></div>
              <div style="position:relative;">
                <span style="color: white;"><?php echo $format ?></span>
                <h4 class="h234"><?php echo  $sqlEvent1[post_title] ?></h4>
                <h5 style="color: white;"><span></span><?php echo htmlspecialchars_decode(substr($sqlEvent1[2],0,15)); ?> </h5>
              </div>
            </div>

            <span class="har_new_events_item_img har_image_bck" >
            <a style="color:white; text-decoration: none;" href="pages/news_details.php?details=<?php echo $sqlEvent1[0] ?>">
              <div style="background: url('bahana_images_assets/news/<?php echo $sqlEvent1[0] ?>.jpg'); filter: blur(6px); background-size:100% 100%; width:100%; height:100%; position: absolute"></div>
              <div style="position: relative;z-index: 9999;width: 100%;height: 100%;background: rgba(0, 0, 0, 0.50); color:white; font-weight: bolder; padding-top:25%; font-size: 12px; padding-left:10%; padding-right:10%; text-align:justify;"><?php echo  strip_tags(substr($sqlEvent1[post_content],0,300)) ?><a style="color:#fead1f" href="pages/news_details.php?details=<?php echo $sqlEvent1[0] ?>"> Click Here </a> </div>
              </a>

            </span>

          </div>

        <?php } ?>
      </div>
      <!-- row end -->
      <div class="container-fluid text-center niws " style="background-color: #000; padding-bottom: 20px; padding-top: 20px;">
        <a href="pages/news_page.php" style="color: #fead1f; text-decoration: none;"><h2><b id="loadm">Baca berita lainnya</b></h2></a>
      </div>
    </div>
    <!-- container end -->

  </section>
</div>

<style>
#loadmore:hover
{
  color: orange;
}

.container-fluid {

  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;

}

.har_new_events_item_img:after {
  border:none;
}

.h234{
  color: #fead1f;
}
.niws
{
  padding: 0px;
  padding-left: 0px !important;
  padding-right: 0px !important;
}
.head
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
</style>
