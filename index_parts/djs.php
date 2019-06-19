<?php
include('conn.php');
?>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div class="container-fluid text-center niws head" style="padding: 50px; background: #d7dce6" id="djs">
  <h1 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate"><b>Meet The Broadcasters</b></h1>
  <h3 data-aos="fade-down" data-aos-delay="150" class="aos-init aos-animate">Menemani hari-hari kamu saat senang, suntuk dan ngantuk</h3>
</div>

<section class="har_section har_image_bck " >
  <div class="container text-center">

    <!-- boxes -->
    <div class="har_icon_boxes row text-center">


      <!-- slider -->
      <div class="har_team_slider">

        <!-- item -->
        <?php
        $sql = mysql_query("SELECT * FROM wadyabala LIMIT 20");
        while($data = mysql_fetch_array($sql)){
          ?>
          <div class="har_icon_box har_team_box">
            <div class="har_icon_box_photo">
                <img src="bahana_images_assets/wadyabala_assets/<?php echo $data[0]?>.jpg" alt="">
            </div>
             <div class="overlay1" style="font-size: 12px; ">
                  <div class="text ket" style="font-size: 17px;"><?php echo $data[3] ?></div>
                </div>
            <h4><b><?php echo $data['nama'] ?></b></h4>
          </div>


         <?php
           }
        ?>

      </div>
      <!-- boxes end -->


    </div>
          <style type="text/css">
              .overlay1 {
              position: absolute;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;
              opacity: 0;
              transition: .5s ease;
              background-color: orange;
            }

            .overlay1:hover {
              opacity: 1;
            }
          </style>
    <!-- container end -->

  </section>

  <style>
  .ket
  {
    font-family: 'Roboto', sans-serif;
  }
  .owl-prev{
    background: #fe9729;
    border-radius: 10px;
    background-image: url('https://www.materialui.co/materialIcons/image/navigate_before_white_192x192.png');
    background-size: 100% 100%;
    border-radius: 10px;
    margin-left: -25px;
  }
  .owl-next{
    background: #fe9729;
    background-image: url('https://www.materialui.co/materialIcons/image/navigate_next_white_192x192.png');
    background-size: 100% 100%;
    border-radius: 10px;
    margin-right: -25px;
    
  }
  .para
  {
    background-image: url("assets/mic.png");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  @media all and (min-width:320px) and (max-width: 480px)
  {
    .owl-next
    {
      margin-top: 23vh;
      margin-right: 50px;
    }
    .owl-prev
    {
      margin-top: 23vh;
      margin-left: 50px;
    }
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
</style>
