


<html lang="en">
  <!--Emilija Nikic-->



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
                  <input type="password" class="form-control" placeholder="Password" name='Password'  value=''>
                </div>
              </div>
              <div>
                   <?php if(!empty($errors['Password'])) 
                        echo $errors['Password'];
                        ?>
              </div>
             
          </div>
             
                         
               
                  
              
            <div class="col-md-12 mt-3">
              <div class="form-group">
                <input type="submit"  value="Registruj se" class="btn btn-primary py-3 px-5">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
