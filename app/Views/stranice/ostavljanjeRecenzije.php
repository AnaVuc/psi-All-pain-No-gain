
   <link rel="stylesheet" href="<?= base_url('css/swiper.min.css'); ?>"> 
   
     <script src="<?= base_url('js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?= base_url('js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
    <!-- Magnific popup JS -->
    <script src="<?= base_url('js/jquery.magnific-popup.js'); ?>"></script>
    <!-- Swipper Slider JS -->
    <script src="<?= base_url('js/swiper.min.js'); ?>"></script>
    

<div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        
   <?php  foreach ($restoran as $res){ 
   
?>     
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $slikaModel=new App\Models\SlikaModel();
                $slike=$slikaModel->where("idR", $res->idR)->where("idRec")->findAll();
                foreach ($slike as $slika){
                    echo ' <div class="swiper-slide">
                   
                        <img src="'. base_url('images/'.$slika->Opis) .'" class="img-fluid1" alt="#">
                    
                </div>';
                }
                ?>

                <div class="swiper-slide">
                   
                        <img src="<?= base_url('images/frans_image5.JPG'); ?>" class="img-fluid1" alt="#">
                    
                </div>
                <div class="swiper-slide">
                   
                        <img src="<?= base_url('images/ambar_image1.jpg'); ?>" class="img-fluid1" alt="#">
                    
                </div>
                <div class="swiper-slide">
                   
                        <img src="<?= base_url('images/slider.jpg'); ?>" class="img-fluid1" alt="#">
                    
                </div>
                
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><?php echo $res->Ime;?></h5>
                    <p><span><?php echo $res->Cenovni_rang;?></span></p>
                    &nbsp;
                    <p class="reserve-description">
                       Vrsta hrane: <?php echo $res->Vrsta_hrane;?></p>
                    
                </div>
                
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span><?php echo number_format($res->Prosecna_ocena, 1)?></span>
                        </div>
                        <?php if ($korisnik){ ?>
                        <div class="review-btn">
                            <a href="#" class="btn btn-outline-danger">OSTAVI RECENZIJU</a>
                            <span><?php echo $res->brojRecenzija;?> ostavljenih recenzija</span>
                        </div>
                        <div class="reserve-btn">
                             <?php 
                        $poseceniRestoraniModel=new App\Models\PoseceniRestoraniModel();
                        
                        if($poseceniRestoraniModel->where('Korisnicko_ime',$korisnik->Korisnicko_ime)->where('idR',$res->idR)->findAll()!=null){?>
                            
                            <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="" id="dugmePosecen" class="btn btn-danger">POSEĆEN</a>
                            </div>
                            </div>
                       <?php }
                        else{?>
                            <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="<?php echo site_url("BaseController/posetiRestoran/{$res->idR}"); ?>" id="dugmePosecen" class="btn btn-danger">POSETI</a>
                            </div>
                            </div>
                       <?php }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php } ?>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p><?php echo $res->Opis;?></p>
                            
                            <hr>
                        </div>
                        
                    </div>
                    <div class="booking-checkbox_wrap mt-4" id="target1">
                        <br>
                       <form name='ostavljanjeRecenzije' action="<?= site_url("BaseController/ostavljanjeRecenzije/{$res->idR}") ?>" method="post">
                       <div class="star-rating">
                        <h12>Ocenite restoran:</h12>
                        <div class="rating-wrapper" > 
                         <input type="radio" name="rating[]" value="5" id="star1">
                         <label for="star1"></label>
                         <input type="radio" name="rating[]" value="4" id="star2">
                         <label for="star2"></label>
                         <input type="radio" name="rating[]" value="3" id="star3">
                         <label for="star3"></label>
                         <input type="radio" name="rating[]" value="2" id="star4">
                         <label for="star4"></label>
                         <input type="radio" name="rating[]" value="1" id="star5">
                         <label for="star5"></label>
                         
                        </div>
                        <br>
                       
                       

                    </div>
                           <textarea class="form-control rounded-0" id="tekstRecenzije"  name="tekstRecenzije" rows="6" placeholder="Ovde ostavite recenziju"></textarea>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="file" name="slike[]" id="slike" multiple>
                            </div>
                            <div class="offset-sm-4 col-sm-2" id="">
                                <div class="reserve-btn">
                                    <div class="featured-btn-wrap">
                                        <input type="submit"  value="Pošalji" class="btn btn-danger py-3 px-5">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        </form>
                        <br>
                        
                        
                        <h5><?php echo $res->brojRecenzija;?> recenzija</h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <?php 
                        $recenzijaModel=new App\Models\RecenzijaModel();
                        $recenzije=$recenzijaModel->where('Korisnicko_ime !=', null)->where('idR',$res->idR)->findAll();
                        $ostavljenaZaModel=new \App\Models\OstavljenaZaModel();
                        $restoranModel=new App\Models\RestoranModel();
                        foreach($recenzije as $recenzija){
                            $ostavljenaZa=$ostavljenaZaModel->where('idRec', $recenzija->idRec)->first();
                            $restoran=$restoranModel->find($recenzija->idR);
                            echo '<div class="customer-review_wrap">
                            <div class="customer-img">
                                <p>'.$ostavljenaZa->Korisnicko_ime.'</p>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        ';
                            if($recenzija->Ocena!=null){
                            if($recenzija->Ocena>=1){
                                echo '<span></span>';
                            }
                            else {
                                 echo '<span class="round-icon-blank"></span>';
                            }
                            if($recenzija->Ocena>=2){
                                echo '<span></span>';
                            }
                            else {
                                echo '<span class="round-icon-blank"></span>';
                            }
                            if($recenzija->Ocena>=3){
                                echo '<span></span>';
                            }
                            else {
                                echo '<span class="round-icon-blank"></span>';
                            }
                            if($recenzija->Ocena>=4){
                                echo '<span></span>';
                            }
                            else {
                                echo '<span class="round-icon-blank"></span>';
                            }
                            if($recenzija->Ocena>=5){
                                echo '<span></span>';
                            }
                            else {
                                echo '<span class="round-icon-blank"></span>';
                            }}
                                    echo'</div>';
                            
                            if($recenzija->Ocena!=null){
                                echo '<div class="customer-rating">'.$recenzija->Ocena.'</div><br><br>';
                            }
                               echo'
                                </div>
                                <p class="customer-text">'.$recenzija->Tekst.'</p>';
                                    $slikaModel=new App\Models\SlikaModel();
                                    $slike=$slikaModel->where("idRec",$recenzija->idRec)->findAll();
                                    foreach($slike as $slika){
                                        echo '<img src="'.base_url('images/'.$slika->Opis).'" class="img-fluid2" alt="#"> &nbsp;';
                                    }
                                    echo'
                            </div>
                        </div>
                        <hr>';
                        }
                        ?>
                          <!-- <div class="customer-img">
                                <img src="images/customer-img1.jpg" class="img-fluid" alt="#">
                                <p>Ljiljana F</p>
                                <span>12 recenzija</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>Najbolji restoran u gradu</h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                    </div>
                                    <div class="customer-rating">4.0</div>
                                </div>
                                <p class="customer-text">Savršen enterijer, odlična hrana veoma ljubazni zaposleni
                                </p>
                                <p class="customer-text">Preko leta možete uživati u lepoj bašti.
                                </p>
                                <ul>
                                    <li><img src="images/review-img1.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img2.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img3.jpg" class="img-fluid" alt="#"></li>
                                </ul>
                            </div>-->
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <div id="map1"></div>
                        <div class="address">
                            <span class="fab fa icon-location-pin"></span>
                            <p><?php echo $res->Adresa;?></p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p><?php echo $res->Broj_telefona;?></p>
                        </div>
                        <div class="address">
                            <span class="icon-link"></span>
                            <p><?php echo $res->Sajt;?></p>
                        </div>
                        
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
   <?php } ?>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            //slidesPerGroup: 4,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script> 
    
    <script>
        function initMap() {
            var geocoder = new google.maps.Geocoder();
            var address = "<?php echo $res->Adresa; ?>";

            geocoder.geocode( { 'address': address}, function(results, status) {

            if (status == google.maps.GeocoderStatus.OK) {
                var latitude = results[0].geometry.location.lat();
                var longitude = results[0].geometry.location.lng();
                } 
            
            
            var uluru = {lat: latitude, lng: longitude};
            var map = new google.maps.Map(
                document.getElementById('map1'), {zoom: 15, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
            }); 
    }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRbsu4r0eRiOzh5P_aK7UobUwesU6jFoY&callback=initMap">
    </script>



