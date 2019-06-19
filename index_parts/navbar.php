<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/regular.css" integrity="sha384-RGDxJbFQcd3/Rei8rYb+3xO3YREd0abxm8WfLkYj7j4HHo5ZVuNUGVx8H8GbpFTQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/fontawesome.css" integrity="sha384-rnr8fdrJ6oj4zli02To2U/e6t1qG8dvJ8yNZZPsKHcU7wFK3MGilejY5R/cUc5kf" crossorigin="anonymous">

<header>

  <nav class="har_light_nav har_transp_nav" style="height: 70px; background: linear-gradient(to right, rgba(255,152,41,1) 0%, rgba(253,187,21,1) 86%, rgba(250,201,5,1) 100%); box-shadow:  0 0 25px rgba(0,0,0,0.5);">
    <div class="container menubar" style="padding-top: 10px;">
      <div class="logo" style="display: none;"><a href="#djs"> <img class="logoo" style="width: 220px; margin-left: 20px; margin-top: -4px; " src="assets/bahana.png"></a></div>

      <div class="har_top_menu_mobile_link" style="z-index: 9999; background-color: black; height: 53px;">
        <i style="color: lightgray;" class="fas fa-bars"></i>
      </div>
      <!-- Top Menu -->
      <div class="har_top_menu_cont hidden-md hidden-lg hidden-xl" style="color: black;">
        <ul class="har_top_menu">
          <li class="logomenu" style="z-index: -1;"><a href="index.php"><img src="assets/bahana.png" style="width: 205px; z-index: -1; margin-top: -20px; margin-left: -30vw; "></a></li>
          <li><a class=" navtrigge" href="#djs">Broadcasters</a>
          </li>
          <li><a class=" navtrigger" href="#news">News</a>
          </li>
          <li><a class=" navtrigger" href="#eventpromo">Event & Promo</a>
          </li>
          <li><a class=" navtrigger" href="#videos">Videos</a>
          </li>
          <li>
            <a class=" navtrigger" href="#podcast">Podcast</a>
          </li>
          <li><a class=" navtrigger" href="#contactus">Contact Us</a>
          </li>
        </ul>
      </div>

       <div class="har_top_menu_cont hidden-xs hidden-sm" style="color: black;">
        <ul class="har_top_menu">
          <li class="logomenu" style="z-index: -1;"><a href="index.php"><img src="assets/bahana.png" style="width: 205px; z-index: -1; margin-top: -20px; margin-left: -30vw; "></a></li>
          <li><a class=" navtrigge" href="#djs">Broadcasters</a>
          </li>
          <li><a class=" navtrigge" href="#news">News</a>
          </li>
          <li><a class=" navtrigge" href="#eventpromo">Event & Promo</a>
          </li>
          <li><a class=" navtrigge" href="#videos">Videos</a>
          </li>
          <li>
            <a class=" navtrigge" href="#podcast">Podcast</a>
          </li>
          <li><a class=" navtrigge" href="#contactus">Contact Us</a>
          </li>
        </ul>
      </div>
      <!-- Top Menu End -->



    </div>
    <!-- container end -->
  </nav>

  <style>
  header nav.har_transp_nav a {
    color: #212529;
    font-size: 16px;
  }
  .har_transp_nav .har_top_menu a:hover
  {
    color: black;
  }


  @media all and (min-width:320px) and (max-width: 480px)
  {
    .har_top_menu_mobile_link, .active .har_top_menu_mobile_link {
      display: block;
      right: 0;
      color: white;
    }

    .logomenu
    {
      display: none;
    }

    .logoo
    {
      width: 70px !important;
    }

    .logo
    {display: block !important;
     }

    .har_first_step header nav.har_transp_nav
    {
      background-color: white;
      height: 65px;
      padding-top: 6px;
    }
    .menubar
    {
      margin-left:0px !important;
    }
  }

  @media (min-width: 481px) and (max-width: 1023px)
  {
    .menubar
    {
      margin-left: 5vh !important;
    }
    .logomenu
    {
      display: none;
    }
  }
  </style>
</header>

<script type="text/javascript">
  $('.navtrigger').click(function(){
    $('.har_top_menu_mobile_link').click();
  })


</script>
