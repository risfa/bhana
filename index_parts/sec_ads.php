	<?php
 include('conn.php');
    $uri = $_SERVER['REQUEST_URI'];
    $urlnya = preg_match("/pages/",$uri);
    $datanya = mysql_fetch_array(mysql_query("SELECT * FROM ads WHERE category ='SEC_ADS' ORDER BY id DESC"));
    if($datanya[0]!=''){
        $data_gambarnya = $datanya[0];
    }else{
        $data_gambarnya = 'nonimg';
    }

    if($urlnya < 1){

 ?>
<div class="row" id="secads" style="background-color: #b2b2b2; text-align: center;  width: 100%;">
	<div class="container" style="width: 100%; padding: 0px; ">
		<!-- <a target="_blank" href="<?php echo $datanya[1] ?>">
    </a> -->
</div>
</div>
<style>
#secads {
    background-image:url("bahana_images_assets/ads_slot_assets/<?php echo $data_gambarnya ?>.gif");
    background-repeat:no-repeat;
    background-size: auto 100px;
     height: 100px;
		 background-position: center;
    z-index: 999999;
    display: inline-block;
    margin-left: 0vh;
}
}
</style>
<?php }else if($urlnya > 1){ ?>

<?php } ?>
<script>
function closefunc() {
    var x = document.getElementById("secads");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
