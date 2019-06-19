<?php
	include("conn.php");
   include('streaming.php');
 ?>
 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class=" player_top" style="margin-top: -15px;">
  <div class="container" style="padding: 0px;">
    <div class=" col-xs-12 col-md-6" style="padding: 0px;">
      <div style="margin-left: 10px;">
        <div class="player_wrapper"></div>
        <video id="myVideo" width="1" height="1">
        <source src="https://www.w3schools.com/tags/mov_bbb.mp4" type="video/mp4">
        </video>
          <div class="info_list">
          <h3><marquee scrollamount="5" style="color:white;">Rossa - Malam Pertama (new Album of the year)</marquee><br><font id="text-program" style="color: #ef4136;"></font></h3>
        </div>
        <div class="button_group">
          <button onclick="playVid()" type="button" id="buttonPlay" class=" tombol_play fa fa-play " style="background: none; border: #2b3990 solid 1px;width: 30px; height: 30px; cursor: pointer; color: #2b3990;"></button>

        <button onclick="pauseVid()" id="buttonPause" type="button" class="tombol_play fa fa-pause" style="background: none; border: #2b3990 solid 1px;width: 30px; height: 30px; cursor: pointer; color: #2b3990; display: none;"></button>

          <!-- <button onclick="PopUp()"  type="button" id="buttonPause" class="fas fa-volume-up" style="background: none; border: #2b3990 solid 1px;width: 30px; height: 30px; cursor: pointer; color: #2b3990;">
          <div class="popuptext show" id="myPopup"><input style="color:#2b3990; margin-top: 1px; width: 151px; margin-left: 4px; z-index: 99999999999px;" id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"></div></button> -->

          <!-- <button class="popup" onclick="PopUp()" style="background: none; border: #2b3990 solid 1px;width: 30px; height: 30px; cursor: pointer; color: #2b3990;"><i style="color:#2b3990; " class="fas fa-volume-up"></i>

              </button> -->
                <button onclick="openWin()"  type="button" class="tombol_play fas fa-external-link-alt" style="background: none; border: #2b3990 solid 1px;width: 30px; height: 30px; cursor: pointer; color: #2b3990;"></button>

             <input class="volcontrol" style="color:#2b3990; margin-top: -20px; width: 151px; margin-left: 70px; z-index: 99999999999px; color: #2b3990; background-color: #2b3990; " id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)">


        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 visible-lg visible-md visible-xl">
      <img src="images/GIF-BAHANA.gif" style="float: right; height: 110px;">
    </div>

    <div class="col-xs-12 col-sm-6 visible-sm visible-xs" style="background-color: black;">
      <center>
        <img src="images/GIF-BAHANA.gif" style="height: 110px;">
      </center>
    </div>

  </div>
</div>
 <audio id="stream" controls="" preload="none" src="http://103.16.199.177:8102/" type="audio/mpeg" style="width: 400px; display: none;"></audio>
<script>
// When the user clicks on div, open the popup
function PopUp() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
<script >
  var myWindow;
function openWin() {
    myWindow = window.open("http://joker.5dapps.com/masimanetwork/bahanafm/pages/streaming_window.php", "", "width=400, height=600");
}
</script>
<script>
var vid = document.getElementById("stream");

/*function matikan_semua(){
  <?php
    $sqlstream2 = mysql_query("SELECT * FROM listing_streaming");
    while($data2 = mysql_fetch_array($sqlstream2)){
  ?>
  var vid<?php echo $data2[0] ?> = document.getElementById("");
    vid<?php echo  $data2[0] ?>.pause();
  <?php } ?>

    document.getElementById("buttonPlay").style.display="inline";
    // document.getElementById("stationlist").style.display="inline";
    document.getElementById("buttonPause").style.display="none";

}*/

window.SetVolume = function(val) {

  var vid = document.getElementById("stream");
  var player = document.getElementById("stream");

  console.log('Before:' + player.volume);
  player.volume = val / 100;
  console.log('After:' + player.volume);
}

function playVid() {

    vid.play();
    document.getElementById('buttonPause').style.display="inline";
    document.getElementById('buttonPlay').style.display="none";

}

/*window.SetVolume = function(val){
  console.log('Before: ' + player.volume);
  player.volume = val / 100;
  console.log('After: ' + player.volume);
}*/

function pauseVid() {

    vid.pause();
    document.getElementById('buttonPause').style.display="none";
    document.getElementById('buttonPlay').style.display="inline";
}
</script>

<script type="text/javascript">


// 06.00 - 10.00 Tika Udjo on Bahana FM
// 10.00 - 16.00 News Update
// 16.00 - 20.00 Sensasi
// 20.00 - 22.00 Indonesia Top 20
// 22.00 - 06.00 (just music)
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Minggu";
    weekday[1] = "Senin";
    weekday[2] = "Selasa";
    weekday[3] = "Rabu";
    weekday[4] = "Kamis";
    weekday[5] = "Jumat";
    weekday[6] = "Sabtu";
    var n = weekday[d.getDay()];

    var hours = d.getHours();
    if (n == 'Sabtu' || n == 'Minggu') {
      n = '(weekend tunes)';
    }else{
      if (hours > 6 && hours <= 10 ) {
        n='Tika Udjo on Bahana FM';
      }else if (hours > 10 && hours <= 16) {
         n='News Update';
      }else if (hours > 16 && hours <= 20) {
         n='Sensasi';
      }else if (hours > 20 && hours <= 22) {
         n='Indonesia Top 20';
      }else if (hours > 22 && hours <= 6) {
         n='(just music)';
      }
    }


    $('#text-program').text(n);

</script>
<style>
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
  margin: 13.8px 0;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -14px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #367ebd;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #2a6495;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-fill-upper {
  background: #3071a9;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  height: 8.4px;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #367ebd;
}


.hover_font:hover{
  color: #fff !important;
}
.tombol_play:hover{
  background: #2b3990 !important;
   border: #2b3990 solid 1px !important;
  color: white !important;
}
.player_wrapper{
  background: url('images/album_art_streaming.jpg');
  background-size: 100% 100%;
  height: 110px;
  width: 110px;
  float: left;
}
.info_list{
  padding: 10px;
  text-align: right;
  background: #2b3990;
  height: 60px;
  width: 64%;
  float: left;
}
.button_group{
  height: 30px;
  width: 50%;
  float: left;
  padding: 10px;
}
.player_top{
  background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%);
}
#name
{
 width: 70%;
 height: 12vh;
 float: right;
 padding: 1vh;
 padding-top: 2vh;
}
input[type=range] {
  -webkit-appearance: none;
     margin-top: -24px;
    margin-left: 18px;
    -webkit-appearance: none;
    width: 90%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 0px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
  background: #ffc925;
  border-radius: 0px;
  border: 0px solid #ffc925;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
  border: 0.px solid #000000;
  height: 15px;
  width: 15px;
  border-radius: 50px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -3.3px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #ffcf3f;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 0px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
  background: #ffc925;
  border-radius: 0px;
  border: 0px solid #ffc925;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
  border: 0.px solid #000000;
  height: 15px;
  width: 15px;
  border-radius: 50px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #ffc30b;
  border: 0px solid #ffc925;
  border-radius: 0px;
  box-shadow: 1px 1px 0px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
}
input[type=range]::-ms-fill-upper {
  background: #ffc925;
  border: 0px solid #ffc925;
  border-radius: 0px;
  box-shadow: 1px 1px 0px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
}
input[type=range]::-ms-thumb {
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0), 0px 0px 1px rgba(13, 13, 13, 0);
  border: 0.px solid #000000;
  height: 15px;
  width: 15px;
  border-radius: 50px;
  background: #ffffff;
  cursor: pointer;
  height: 8.4px;
}
input[type=range]:focus::-ms-fill-lower {
  background: #ffc925;
}
input[type=range]:focus::-ms-fill-upper {
  background: #ffcf3f;
}
@media all and (min-width:320px) and (max-width: 480px)
{
  .b
  {
   margin-top: 0vh !important;
 }
 .volcon
 {
   padding-top: 2vh !important;
   padding-bottom: 2vh !important;
 }
 #gambar
 {
  width: 110px !important;
  height: 110px !important;
  margin-top: 3px;

}
}



@media (min-width: 767px) and (max-width: 1024px)
{

  #name {
    width: 65% !important;
    height: 12vh !important;
    float: right !important;
    padding: 1vh !important;
    padding-top: 2vh !important;
  }

 

}

 @media all and (min-width:320px) and (max-width: 480px)
 {
  .volcontrol
  {
    width: 33vw !important;
  }
 }
</style>
