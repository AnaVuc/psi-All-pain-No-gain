<html lang="en">
    <!--Emilija Nikic, Emilija Radovanovic-->

<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <title>Take Me Out! </title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/android-icon-36x36.png"> 
    
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/themify-icons.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/set1.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/swiper.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900'); ?>"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"/>
    <script src="<?= base_url('js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?= base_url('js/popper.min.js'); ?>""></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>""></script>
    <script src="<?= base_url('js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?= base_url('js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
    <!-- Magnific popup JS -->
    <script src="<?= base_url('js/jquery.magnific-popup.js'); ?>"></script>
    <!-- Swipper Slider JS -->
    <script src="<?= base_url('js/swiper.min.js'); ?>"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

</head>

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