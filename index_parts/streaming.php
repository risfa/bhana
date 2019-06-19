		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
  include("../conn.php");
?>
<video id="myVideo" width="1" height="1">
  <source src="http://103.16.199.177:8102/" type="video/mp4">
</video>


<script>

var vid = document.getElementById("myVideo");
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



function playVid() {

	// var e = document.getElementById("stationlist");
	/*var strstationlist = e.options[e.selectedIndex].value;*/
	// var vid = document.getElementById(strstationlist);
    vid.play();
    /*document.getElementById('buttonPause').style.display="inline";
    document.getElementById('buttonPlay').style.display="none";*/
    // alert("Radionya : "+strstationlist);
}

/*window.SetVolume = function(val){
	var e = document.getElementById("stationlist");
	var strstationlist = e.options[e.selectedIndex].value;
	var vid = document.getElementById(strstationlist);
	var player = document.getElementById(strstationlist);
	console.log('Before: ' + player.volume);
	player.volume = val / 100;
	console.log('After: ' + player.volume);
}*/

function pauseVid() {
	/*var e = document.getElementById("stationlist");
	var strstationlist = e.options[e.selectedIndex].value;
	var vid = document.getElementById(strstationlist); */
    vid.pause();
   /* document.getElementById('buttonPause').style.display="none";
    document.getElementById('buttonPlay').style.display="inline";*/
}
</script>
