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
    <link rel="stylesheet" href="<?= base_url('font-awesome.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/set1.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('css/swiper.min.css'); ?>"> 
    <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900'); ?>"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="<?= base_url('js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?= base_url('js/popper.min.js'); ?>""></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>""></script>
    <i class="fas fa-tachometer-alt"></i>
</head>


<body>
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="<?php echo site_url("Gost"); ?>">Take Me Out!</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    
                                  
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER -->
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
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <div>
        
   
    </div>
    <div class="col-md-8 ftco-animate makereservation p-5 ">
        <form name='kreirajNalogform' action="<?= site_url("Gost/kreirajNalog") ?>" method='post'>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="Ime">Ime</label>
                <input type="text" class="form-control" placeholder="Ime"  name='Ime' value='<?= set_value("Ime")?>' >
              </div>
            </div>
              <div>
                   <?php if(!empty($errors['Ime'])) 
                        echo $errors['Ime'];
                        ?>
              </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Prezime">Prezime</label>
                <input type="text" class="form-control" placeholder="Prezime" name='Prezime'  value='<?= set_value("Prezime")?>'>
                
                

              </div>
            </div>
              <div>
                   <?php if(!empty($errors['Preime'])) 
                        echo $errors['Preime'];
                        ?>
              </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Korisnicko_ime">Korisničko ime</label>
                <input type="text" class="form-control" placeholder="Korisničko ime" name='Korisnicko_ime' value='<?= set_value("Korisnicko_ime")?>'>
              </div>
            </div>
              <div>
                   <?php if(!empty($errors['Korisnicko_ime'])) 
                        echo $errors['Korisnicko_ime'];
                        ?>
              </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="Password">Lozinka</label>
                  <input type="password" class="form-control" placeholder="Password" name='Password'  value='<?= set_value("Password")?>'>
                </div>
              </div>
              <div>
                   <?php if(!empty($errors['Password'])) 
                        echo $errors['Password'];
                        ?>
              </div>
             
            <div class="col-md-12 mt-3">
              <div class="form-group">
                <input type="submit"  value="Registruj se" class="btn btn-primary py-3 px-5">
              </div>
            </div>
          </div>
        </form>
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
