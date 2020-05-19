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
                                
                            
                 </form>
                                <div class="map-responsive-wrap">
                                    <a class="map-icon" href="#"><span class="icon-location-pin"></span></a>
                                </div>
                            </div>
                        </div>
                        
                     
                    </div>
                    <div class="row detail-checkbox-wrap">
                        
                    
                       
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
                                    <img src="images/featured1.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating-green "><?php echo $res->Prosecna_ocena;?></span>
                                    <div class="featured-title-box">
                                        <h6><?php echo $res->Ime;?></h6>
                                        <p><?php echo $res->brojRecenzija;?> recenzija</p></p> <span> â€˘ </span>
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