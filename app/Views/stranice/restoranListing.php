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
                        <div class="col-md-8 featured-responsive">
                            <div class="detail-filter">
                                <p>Sortiraj </p>
                                <form class="filter-dropdown">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                  <option selected>Sortiranje</option>
                  <option value="1">Cena</option>
                  <option value="2">Udaljenost</option>
                  <option value="3">Popularnost</option>
                  <option value="4">Ocena</option>
                 </select>

                                </form>
                                <form class="filter-dropdown">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                  <option selected>Redosled</option>
                  <option value="1">Rastuce</option>
                  <option value="2">Opadajuce</option>

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
                                <p><input type="checkbox" name="vrsta">&nbsp;Italijanska</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta">&nbsp;Grčka</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta">&nbsp;Meksička</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta">&nbsp;Azijska</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta">&nbsp;Srpska</p>
                            </div>
                        </div>
                    
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <p>Cena:</p>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena" un>&nbsp;$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena">&nbsp;$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena">&nbsp;$$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena">&nbsp;$$$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena">&nbsp;$$$$$</p>
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
                     <div class="row light-bg detail-options-wrap">
                    <?php 
                // ikonice se ne ucitavaju kako treba ali su ubacene u headeru
               // echo ($pager);
                    if($data['niz']):
                        $i=0;
                    foreach ($data['niz'] as $res){
                        ?>
                   
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="detail.html">
                                    <img src="images/featured1.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating-green "><?php echo $res->Prosecna_ocena;?></span>
                                    <div class="featured-title-box">
                                        <h6><?php echo $res->Ime;?></h6>
                                        <p><?php echo $res->brojRecenzija;?> recenzija</p></p> <span> • </span>
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
                                        <div class="bottom-icons">
                                            <div class="closed-now">ZATVORENO</div>
                                            <span class="ti-heart"></span>
                                            <span class="ti-bookmark"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php $i++; }
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