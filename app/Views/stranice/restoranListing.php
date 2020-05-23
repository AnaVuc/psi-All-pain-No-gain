<div class="row">

        &nbsp;
    </div>
    <div class="row">

        &nbsp;
    </div>
    <div class="row">

        &nbsp;
    </div>
<section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <p>34 restorana</p>
                            </div>
                        </div>
                        <?php if ($korisnik){ ?>
                        <div class="col-md-8 featured-responsive">
                            <div class="detail-filter">
                                <p>Sortiraj </p>
                                <form class="filter-dropdown">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                        <option selected>Sortiranje</option>
                                        <option value="Cena">Cena</option>
                                        <option value="Udaljenost">Udaljenost</option>
                                        <option value="Popularnost">Popularnost</option>
                                        <option value="Ocena">Ocena</option>
                                    </select>
                                    

                                </form>
                                <form class="filter-dropdown">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                        <option selected>Redosled</option>
                                        <option value="Rastuce">Rastuce</option>
                                        <option value="Opadajuce">Opadajuce</option>

                                    </select>
                                </form>
                                <div class="map-responsive-wrap">
                                    <a class="map-icon" href="#"><span class="icon-location-pin"></span></a>
                                </div>
                            </div>
                        </div>
                        
                     
                    </div>
                    <div class="row detail-checkbox-wrap">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <p>Vrsta hrane:</p>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta" value="italijanska" <?php echo set_checkbox('vrsta', 'italijanska'); ?> >&nbsp;Italijanska</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta" value="grčka" <?php echo set_checkbox('vrsta', 'grčka'); ?> >&nbsp;Grčka</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta" value="meksička"  <?php echo set_checkbox('vrsta', 'meksička'); ?> >&nbsp;Meksička</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta" value="azijska" <?php echo set_checkbox('vrsta', 'azijska'); ?> >&nbsp;Azijska</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta" value="srpska" <?php echo set_checkbox('vrsta', 'srpska'); ?> >&nbsp;Srpska</p>
                            </div>
                        </div>
                        <?php
                            if (isset($_POST['vrsta'])){
                                echo $_POST['vrsta']; // Displays value of checked checkbox.
                            }
                            ?>
                    
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <p>Cena:</p>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena" value="$">&nbsp;$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena" value="$$">&nbsp;$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena" value="$$$">&nbsp;$$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena" value="$$$$">&nbsp;$$$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena" value="$$$$$">&nbsp;$$$$$</p>
                            </div>
                            </div>  
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <p>Ocena:</p>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena">&nbsp;0-1</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena">&nbsp;1-2</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena">&nbsp;2-3</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena">&nbsp;3-4</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena">&nbsp;4-5</p>
                                </div>
                                
                                </div>                   
                        </div>
                      <?php } ?>
                     <div class="row light-bg detail-options-wrap">
                    <?php 
                // ikonice se ne ucitavaju kako treba ali su ubacene u headeru
               // echo ($pager);
                    if($data['niz']):
                       
                    foreach ($data['niz'] as $res){
                        ?>
                   
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="<?php echo site_url("BaseController/ispisJednogRestorana/{$res->idR}"); ?>" >
                                    <img src="<?= base_url('images/madera_image3.jpg'); ?>" class="img-fluid" alt="#">
                                    <span class="featured-rating-green "><?php echo $res->Prosecna_ocena;?></span>
                                    <div class="featured-title-box">
                                        <h6><?php echo $res->Ime;?></h6>
                                        <p><?php echo $res->brojRecenzija;?> recenzija</p></p> <span> </span>
                                        <p><span><?php echo $res->Cenovni_rang;?></span></p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p><?php echo $res->Adresa?></p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p><?php echo $res->Broj_telefona;?></p>
                                            </li>
                                            <li><span class="icon-link"></span>
                                                <p><?php echo $res->Sajt;?></p>
                                            </li>

                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php  }
                        endif; ?>
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- data-toggle="affix" -->
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
                    </div>
                </div>
              <?= $data['pager']->links() ?>
                        <?php //$data['pager']->setSurroundCount(2) ?> 

            
            </div>
        </div>
     </div>
  </div>
</section>