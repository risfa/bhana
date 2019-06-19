<!-- <?php 
 include('conn.php');
    $uri = $_SERVER['REQUEST_URI'];
    $urlnya = preg_match( "/pages/",$uri);
    $datanya = mysql_fetch_array(mysql_query("SELECT * FROM ads WHERE category = 'LEFT' ORDER BY id DESC"));
    if($datanya[0]!=''){
        $data_gambarnya = $datanya[0];
    }else{
        $data_gambarnya = 'nonimg';
    }
    // echo $urlnya;
    // echo $uri;
    if($urlnya < 1){

 ?>
<div  class="leftads" style="">
  <button onclick="closefunc1()" style="float: right;">X</button>
  <center><h1> ADS SLOT LEFT</h1></center>
  <a target="_blank" href="<?php echo $datanya[1] ?>">
       
    </a>
</div>
<style>
.leftads {
  background:red; height: 200px; width:200px; position:fixed;margin-top: 25vh; z-index: 99;
  background-image: url("bahana_images_assets/ads_slot_assets/<?php echo $data_gambarnya ?>.gif");
}
@media (min-width: 320px) and (max-width: 480px)

{
  .leftads
  {
    display: none !important;
  }
}
</style>
<?php }else if($urlnya > 1){ ?>

<?php } ?>
<script>
function closefunc1() {
  var x = document.getElementById("leftads");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
 -->