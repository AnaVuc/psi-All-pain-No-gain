<html lang="en">
    <!--Emilija Nikic, Emilija Radovanovic-->

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Take Me Out! </title>
    
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/themify-icons.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('font-awesome.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/set1.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/swiper.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900'); ?>"> 
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"/>
   <script src="<?= base_url('js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?= base_url('js/popper.min.js'); ?>""></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>""></script>
    <i class="fas fa-tachometer-alt"></i>

</head>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    //document.getElementById("livesearch").style.background-color=white;
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      //document.getElementById("livesearch").style.background-color=white;
    }
  }
  xmlhttp.open("GET","<?php echo site_url("BaseController/ajax");?>?q="+str,true);
  xmlhttp.send();
}
</script>

<body>
<div class="nav-menu">
    <div class="bg transition">
        <div class="container-fluid fixed">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo site_url("Gost"); ?>"> Take Me Out! </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-menu"></span>
          </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                
                                <li><a href="<?php echo site_url("Gost/UlogujSe"); ?>" class="btn btn-outline-light top-btn">Uloguj se</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Pronadjite restoran za Vas u Beogradu</h1>
                                    <h5></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="offset-6 col-md-8 " class="align-items-center">
                                
                                <div class="slider-link ">
                                </div>
                            </div>
                        </div>
                        <div class="btn-row d-flex justify-content-center">
                            <form class="form-wrap mt-6 ">
                                <input type="text" placeholder="Ime restorana" class="btn-group1" size="40" onkeyup="showResult(this.value)">
                                <div id="livesearch" class="ajaxRezultati"></div>
                            </form>
                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
     <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>