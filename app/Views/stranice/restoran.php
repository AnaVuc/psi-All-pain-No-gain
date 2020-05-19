
   <link rel="stylesheet" href="<?= base_url('css/swiper.min.css.css'); ?>"> 

<div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        
   <?php  foreach ($restoran as $res){ 
   
?>     
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="images/madera_image1.jpg" class="grid image-link">
                        <img src="images/madera_image2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/madera_image3.jpg" class="grid image-link">
                        <img src="images/madera_image4.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/madera_image5.jpg" class="grid image-link">
                        <img src="images/madera_image6.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/madera_instagram1JPG.jpg" class="grid image-link">
                        <img src="images/rsz_madera2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/madera_instagram3JPG.jpg" class="grid image-link">
                        <img src="images/rsz_madera4.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/madera_instagram5JPG.jpg" class="grid image-link">
                        <img src="images/rsz_madera.jpg" class="img-fluid" alt="#">
                    </a>
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
                            <span><?php echo $res->Prosecna_ocena;?></span>
                        </div>
                        <div class="review-btn">
                            <a href="#" class="btn btn-outline-danger">OSTAVI RECENZIJU</a>
                            <span><?php echo $res->brojRecenzija;?> ostavljenih recenzija</span>
                        </div>
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="posecen.html" class="btn btn-danger">POSETI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="booking-checkbox_wrap mt-4">
                        <h5><?php echo $res->brojRecenzija;?> recenzija</h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
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
                                        <p>Napisano pre 2 dana</p>
                                    </div>
                                    <div class="customer-rating">8.0</div>
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
                                <span>28 ljudi označilo ovu recenziju kao korisnu</span>
                                <a href="#"><span class="icon-like"></span>Korisno?</a>
                            </div>
                        </div>
                        <hr>
                    
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="images/mapa.png" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
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
                        <div class="address">
                            <span class="icon-clock"></span>
                            <p>Pon - Ned 12:00  - 00:00 am <br>
                                <span class="open-now">TRENUTNO OTVORENO</span></p>
                        </div>
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
   <?php } ?>