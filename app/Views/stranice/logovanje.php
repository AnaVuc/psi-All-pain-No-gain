<body>
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
        <?php if(isset($poruka)) echo "<font color='red'>$poruka</font><br>"; ?>
        <form name='loginform' action="<?= site_url("Gost/loginSubmit") ?>" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Korisničko ime</label>
                <input type="text" class="form-control" placeholder="Korisničko ime" name='Korisnicko_ime'  value='<?= set_value("Korisnicko_ime")?>'>
                <font color='red'>
                    <?php if(!empty($errors['Korisnicko_ime'])) 
                    echo $errors['Korisnicko_ime']; ?>
                    </font>
              </div>
            </div>
             
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Lozinka</label>
                <input type="password" class="form-control" name='Password' placeholder="Password" value='<?= set_value("Password")?>'>
                <font color='red'>
                    <?php if(!empty($errors['Password'])) 
                    echo $errors['Password'];
            ?></font>
              </div>
            </div>
              
      
              
            <div class="col-md-12 mt-3">
              <div class="form-group">
                <input type="submit"  value="Uloguj se" class="btn btn-primary py-3 px-5">
              </div>
            </div>
              
          </div>
            
        </form>
      </div>
    </div>
    </div>


