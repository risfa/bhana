<?php
 include('conn.php');
    $uri = $_SERVER['REQUEST_URI'];
    $urlnya = preg_match("/pages/",$uri);
    $datanya = mysql_fetch_array(mysql_query("SELECT * FROM ads WHERE category = 'HOME_TOP' ORDER BY id DESC"));
    if($datanya[0]!=''){
        $data_gambarnya = $datanya[0];
    }else{
        $data_gambarnya = 'nonimg';
    }

    if($urlnya < 1){

 ?>

<div class="row" id="headads" style=" width: 100%;" >
  <button onclick="myFunction()" style="margin-left: 15px;">X</button>
  <div class="container">
    <a target="_blank" href="<?php echo $datanya[1] ?>"></a>
  </div>
</div>



<style>
  #headads {
    background-image:url("bahana_images_assets/ads_slot_assets/<?php echo $data_gambarnya ?>.gif");
    background-repeat:no-repeat;
    background-size: auto 100px;
    height: 100px;
    background-position: center;
    z-index: 999999;
    display: inline-block;
    margin-left: 0vh;
  }
  @media all and (min-width:320px) and (max-width: 480px)
    {
        #headads
        {
            bottom: 0;
            position: fixed;
        }
    }
  }
</style>
<?php }else if($urlnya > 1){ ?>

<?php } ?>
<script>
  function myFunction() {
      var x = document.getElementById("headads");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }
  }
</script>
