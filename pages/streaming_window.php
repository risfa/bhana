<!doctype html>
<html lang="en">
<head>
	<?php include('../conn.php'); ?>
	<script id="domain" data-name="1125284" type="text/javascript" src="http://xeniel.5dapps.com/webanalytic/js/analytics_js/client.js"></script>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<title>BAHANAFM</title>
</head>
 <center>
<body >

<div class="container" style="display: inline-block;">
  <center>
    
  </center>
	<div class="row" style="">
		<div class="col-sm-0 col-xs-0 col-lg-3 col-xl-3 "></div>
					<div class="col-sm-12 col-xs-12 col-lg-6 col-xl-6 ">
            <!-- <img style="opacity: 0.5; position: absolute;" src="../images/prambors_asset/"> -->
		             <div class="a con" style=" margin-top:150px;width: 300px; align-content: center; border-radius: 0px; height: 330px; background-color: rgba(255,255, 255, 0.4);">
		             <!--   <div class="a" style=" border-top-right-radius: 0px; border-top-left-radius: 0px;"><font style="text-align: center; color:#ffc925; margin-top: 35px; "> <marquee class="GeneratedMarquee" direction="left" scrollamount="10" behavior="scroll">test</marquee> </font></div> -->
							<img src="assets/bahana.png" id="img-src" style="width: 150px; margin-top: 50px;">
						<div style="margin-top: 10px;">
					<!-- 	<select class="form-control" style="  margin-right: 3px; background:rgba(0,0,0,0.25); color: #ffc925; border: #ffc925 1px solid; text-transform: capitalize; width:151px;" onchange="matikan_semua()" id="stationlist">
						</select> -->
						</div>
						<div style="margin-top: 10px;">
							<input style="color:#2b3990; margin-top: 1px; width: 151px; position: absolute; margin-left:-77px;" id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"></input>
						</div>
						<div class="a" style="margin-top: 35px; padding-bottom: 15px; padding-top: 15px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">

						<button  onclick="playVid()" type="button" id="buttonPlay" class="btn" style="background: none; border: #2b3990 solid 1px; border-radius: 50px;  "><font style="color:#2b3990" class="fa fa-play"></font></button>

						<button onclick="pauseVid()" id="buttonPause" type="button" class="btn" style="background: none; border: #2b3990 solid 1px; display: none;  border-radius: 50px; "><font style="color:white" class="fa fa-pause" ></font></button>
						</div>
					</div>


	</div>
</div>
<audio id="stream" controls="" preload="none" src="http://103.16.199.177:8102/;" type="audio/mpeg" style="width: 400px; display: none;"></audio>
<script> 
var vid = document.getElementById("stream");

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

function pauseVid() { 
 
    vid.pause(); 
    document.getElementById('buttonPause').style.display="none";
    document.getElementById('buttonPlay').style.display="inline";
} 
</script> 
<script type="text/javascript">

// setInterval("getKota()",1000);// 5000


 /*$.ajax({
  url: "https://crossorigin.me/http://103.16.199.177:8102/",
  type: "GET",
  success: function (data) {

    console.log(data);
    if (data == null||data=='') {
      $('#list-lagu').html("BahanaFM");
      $('#img-src').attr("src","images/prambors_asset/disc.png");

    }else{

      $.each(data, function( index, value ) {
        if (index == 0) {
                // console.log(value.song.track);
                $('#list-lagu').html(value.song.artist+'-'+value.song.track);
                $('#img-src').attr("src",value.song.coverUrl);



              }



            });
    }
  });
}*/

</script>

</body>
</center>
<style >
.con
{
  background-image: url("../images/prambors_asset/bg50.svg");
  background-size: 50%;

}
body
{
	background-image: url("../assets/Web_banner.png");
	background-repeat: no-repeat;
  background-size: 100%,100%;
  background-color: #fcbd28;
  
select { width: 400px; text-align-last:center; }
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
  margin: 3.3px 0;
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


.a
{
	background-color: rgba(0, 0, 0, 0.4);
}

select > option
{
	background-color: rgba(0,0,0,0.75);
}

 /*html 
 {
  background-image: url(../assets/Web_banner.png);
  background-repeat: repeat;
  
 }*/
 @media (min-width: 320px) and (max-width: 480px)
  {
    body
    {
      background-image: url("../assets/Web_banner.png");
  background-repeat: no-repeat;
  background-size: 100%,100%;
    background-position: bottom !important; 
    }
</style>
<script type="text/javascript">



 /*getKota();
setInterval("getKota()",60000);// 5000

function getKota(value){

 $.ajax({
  url: "https://crossorigin.me/http://103.16.199.177:8102/",
  type: "GET",
  success: function (data) {

    console.log(data);
    if (data == null||data=='') {
      $('#list-lagu').html("BahanaFM");
      $('#img-src').attr("src","images/prambors_asset/disc.png");

    }else{

      $.each(data, function( index, value ) {
        if (index == 0) {
                // console.log(value.song.track);
                $('#list-lagu').html(value.song.artist+'-'+value.song.track);
                $('#img-src').attr("src",value.song.coverUrl);



              }



            });
    }
  },
  xhrFields: {
    withCredentials: false
  }
});

}*/




</script>
</html>
