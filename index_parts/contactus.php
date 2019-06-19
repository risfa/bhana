<?php
include ('conn.php');

if(isset($_POST['simpan'])){
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Country = $_POST['Country'];
  $Phone = $_POST['Phone'];
  $Message = $_POST['Message'];

  $simpan = mysql_query("INSERT INTO ContactUs(ID,Name,Email,Country,Phone,Message) VALUES(NULL,'$Name','$Email','$Country','$Phone','$Message')");


  if($simpan){
    $message = "Succes Upload";
    echo "<script type='text/javascript'>alert('$message');</script>";
    // echo "<script>document.location.href='index.php';</script>";
    // header("Refresh:0");

  }else{
    $message = "Gagal Upload";
    echo "<script type='text/javascript'>alert('$message');</script>";

    // echo "<script>document.location.href='index.php';</script>";
    // header("Refresh:0");
  }

}
?>
<section style="background-color: black;">
  <div class="container">
    <br><br><br>

    <div class="col-md-6 contus">
      <br>
      <h1 style="font-weight: bolder; color:#feac20"> Contact Us</h1>
      <p style="font-size:20px; color:#feac20; font-weight:100;">A : Jl Adityawarman no. 71, Kebayoran Baru<br> Jakarta Selatan, 12160<br>P : (021) 72799288</p><br>
      <a target="_blank" href="https://www.facebook.com/101.8bahanafm/"><i class="fab fa-facebook" style="color:#feac20; font-size:30px;"></i></a>
      <a target="_blank" href="https://twitter.com/bahanafmjkt"><i class="fab fa-twitter-square" style="color:#feac20; font-size:30px; margin-left:10px;"></i></a>
      <a target="_blank" href="https://www.youtube.com/channel/UCjv1fVV4xb_byp-UJGcKk9w"><i class="fab fa-youtube-square" style="color:#feac20; font-size:30px; margin-left:10px;"></i></a>
      <a target="_blank" href="https://www.instagram.com/bahanafmjkt/"><i class="fab fa-instagram" style="color:#feac20; font-size:30px; margin-left:10px;"></i></a>
    </div>
    <div class="col-md-6 ">

      <form method="post">
        <input  type="hidden" class="form-control" type="text"  value="" name="ID" placeholder="ID" >

        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Name" name="Name" required>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Country" name="Country" required="">
        </div>


        <div class="col-md-6">
          <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" class="form-control" placeholder="Contoh: xyz@something.com" name="Email" required="">
        </div>
        <div class="col-md-6">
          <input type="text" pattern="[0-9]+" title="numeric only" class="form-control" placeholder="Phone" name="Phone" required="">
        </div>


        <div class="col-md-12">
          <textarea class="form-control" placeholder="Message" name="Message"
          required=""></textarea>

          <center> <input type="submit" class="btn" value="Send" name="simpan" style="background: #feac20;font-weight: bolder;width: 100%;"></center>
        </form>
      </div>

    </div>

  </div>
  <br><br><br>
</section>

<style>
  
  @media all and (min-width:320px) and (max-width: 480px)
  {
    .contus
    {
      margin-left: 15px;
      margin-bottom: 15px;
    }
  }
</style>
