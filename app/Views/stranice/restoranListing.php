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
            <form name='sort_filt' action="<?= site_url("BaseController/sortiranje_filtriranje") ?>" method="post">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <p><?php $korModel=new App\Models\RestoranModel;
                                echo $korModel->brojRestorana()?>  restorana </p>
                            </div>
                        </div>
                        <?php if ($korisnik){ ?>
                        <div class="col-md-8 featured-responsive">
                            <div class="detail-filter">
                                <p>Sortiraj </p>
                                <form class="filter-dropdown">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="sortiranje">
                                    
                                        <option value="Cena">Cena</option>
                                        <option value="Popularnost" selected>Popularnost</option>
                                        <option value="Ocena">Ocena</option>
                                    </select>
                                    

                                </form>
                               <!--<p>Redosled </p>
                                <form class="filter-dropdown">
                                    <select  class="custom-select mb-2 mr-sm-2 mb-sm-0" id="smer" name="s">
                                        <option value="Rastuce" >Rastuce</option>
                                        <option value="Opadajuce" selected>Opadajuce</option>
                                    </select>
                                </form> -->
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
                                <p><input type="checkbox" name="vrsta[]" value="italijanska"  >&nbsp;Italijanska</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta[]" value="grčka"  >&nbsp;Grčka</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta[]" value="meksička" >&nbsp;Meksička</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta[]" value="azijska"  >&nbsp;Azijska</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="vrsta[]" value="srpska" >&nbsp;Srpska</p>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <p>Cena:</p>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena[]" value="$">&nbsp;$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena[]" value="$$">&nbsp;$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena[]" value="$$$">&nbsp;$$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena[]" value="$$$$">&nbsp;$$$$</p>
                            </div>
                            <div class="checkbox">
                                <p><input type="checkbox" name="cena[]" value="$$$$$">&nbsp;$$$$$</p>
                            </div>
                         </div>  
                            
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <p>Ocena:</p>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena[]" value="0-1">&nbsp;0-1</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena[]" value="1-2">&nbsp;1-2</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena[]" value="2-3">&nbsp;2-3</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena[]" value="3-4">&nbsp;3-4</p>
                                </div>
                                <div class="checkbox">
                                    <p><input type="checkbox" name="ocena[]" value="4-5">&nbsp;4-5</p>
                                </div>
                                
                            </div>                   
                        </div>
                    <div class="col-md-12 mt-3 pull-right">
                    <div class="form-group ">
                      <input type="submit"  value="Potvrdi" class="btn btn-primary py-3 px-5">
                    </div>
                  </div>
               
            </form>
                      <?php } ?>
                     <div class="row light-bg detail-options-wrap">
                    <?php 
        
                    if($data['restorani']):
                       
                    foreach ($data['restorani'] as $res){
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
                         <?php } 
                endif; ?>
                    
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix" data-toggle="affix" >
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" ></div>
                    </div>
                </div>
              
                  
                
            </div>
        </div>
     </div>
  </div>
</section>
<script>
           

        function init() {
                var infowindow = new google.maps.InfoWindow();
                var marker, i;
                
                    var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 13, center: new google.maps.LatLng(44.810754,20.446044)});
             <?php foreach ($data['restorani'] as $res){
                        ?>
                var geocoder = new google.maps.Geocoder();
                var address = "<?php echo $res->Adresa; ?>";

                geocoder.geocode( { 'address': address}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();
                    } 
                 var LatLng=new google.maps.LatLng(latitude,longitude); 
                
                var uluru = {lat: latitude, lng: longitude};
                
                
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: LatLng, map: map,title:'<?php echo $res->Ime; ?>'});
                marker.setMap(map);
            }); 
                

            <?php };
                    ?>
        }google.maps.event.addListener(marker, 'click', (function(marker) {
        return function() {
          infowindow.open(map, marker);
        }
      })(marker));
</script>
        
   
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRbsu4r0eRiOzh5P_aK7UobUwesU6jFoY&callback=init">
    </script>