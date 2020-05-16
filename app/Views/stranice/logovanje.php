<!DOCTYPE html>
<html lang="en">
  <!--Emilija Radovanovic-->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Take Me Out! </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">Take Me Out!</a>
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
    <div class="col-md-8 ftco-animate makereservation p-5 ">
        <?php if(session()->get('success')): ?>
        <div class='alert alert-success' role='alert'>
            <?=session()->get('success') ?>
        </div>
        <?php endif; ?>
        <form action="logovanje.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Korisničko ime</label>
                <input type="text" class="form-control" placeholder="Korisničko ime" id='Korisnicko_ime' value="<?= set_value("Korisnicko_ime")?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Lozinka</label>
                <input type="password" class="form-control" placeholder="Lozinka" id='Password' value=''>
              </div>
            </div>
          
              
            <div class="col-md-12 mt-3">
              <div class="form-group">
                <a href="ulogovani.html" class="btn btn-outline-dark top-btn">Uloguj se</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

