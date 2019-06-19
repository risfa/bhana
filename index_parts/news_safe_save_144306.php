<?php
include('conn.php');
?>
<div class="container-fluid text-center niws head" style="padding: 50px; ">
  <h1><b>Breaking News</b></h1>
  <h3>Cari tahu berita yang lagi <i>happening</i> banget saat ini
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
          <a href="pages/news_details.php?details=<?php echo $sqlEvent1[0] ?>" class="har_new_events_item col-md-3 eve" style="background: url('bahana_images_assets/news/<?php echo $sqlEvent1[0] ?>.jpg'); color: orange;" >
            <div class="har_new_events_item_desc har_image_bck" >

              <div style="position: absolute;background:white;width: 107%;height: 107%; top: 0; left: -3%; background: rgba(165, 92, 92, 0.83);"></div>
              <div style="position:relative;">
                <span style="color: white;"><?php echo $format ?></span>
                <h4 class="h"><?php echo  $sqlEvent1[post_title] ?></h4>
                <h5 style="color: white;"><span></span><?php echo htmlspecialchars_decode(substr($sqlEvent1[2],0,15)); ?> </h5>
              </div>
            </div>

            <span class="har_new_events_item_img har_image_bck" >
              <div data-image="bahana_images_assets/news/<?php echo $sqlEvent1[0] ?>.jpg"></div>
              <div style="background:green; width:100%; height:100%; position: absolute"></div>
              <b style="position: relative;z-index: 9999;width: 100%;height: 100%;background: #ff00004d;">See Inside</b>
            </span>

          </a>

        <?php } ?>
      </div>
      <!-- row end -->
      <div class="container-fluid text-center niws " style="background-color: #000; padding-bottom: 30px;">
        <a href="pages/news_page.php" style="color: #ef4237; text-decoration: none;"><h2><b id="loadm">Baca berita lainnya</b></h2></a>
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

.h{
  color: red;
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
