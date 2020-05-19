

<section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Najpopularniji restorani</h3>
                    </div>
                </div>
            </div>
 <div class="row">
<?php 
// ikonice se ne ucitavaju kako treba ali su ubacene u headeru
    $niz=$output = array_slice($restoran, 0, 3);
    foreach ($niz as $res){
    $suma=$res->brojRecenzija*$res->Prosecna_ocena;?>


                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="<?php echo site_url("BaseController/ispisJednogRestorana/{$res->idR}"); ?>" >
                            <img src="images/featured1.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-green justify-content-center"><?php echo $res->Prosecna_ocena;?></span>
                            <div class="featured-title-box">
                                <h6><?php echo $res->Ime;?></h6>
                                <p><?php echo $res->brojRecenzija;?> recenzija</p> <span> • </span>
                                <p><span><?php echo $res->Cenovni_rang;?></span></p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p><?php echo $res->Adresa;?></p>
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
           
<?php }?>
 </div>
<div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="<?php echo site_url('BaseController/ispisSvihRestorana'); ?>" class="btn btn-danger">VIDI SVE RESTORANE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
