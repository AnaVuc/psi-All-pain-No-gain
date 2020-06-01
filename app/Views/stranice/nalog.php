<!-- Mina Lesic-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>"> 
        <link rel="stylesheet" href="<?= base_url('css/themify-icons.css'); ?>"> 
        <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css'); ?>"> 
        <link rel="stylesheet" href="<?= base_url('font-awesome.min.css'); ?>"> 
        <link rel="stylesheet" href="<?= base_url('css/simple-line-icons.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('css/set1.css'); ?>"> 
        <link rel="stylesheet" href="<?= base_url('css/swiper.min.css'); ?>"> 
        <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900'); ?>"> 
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="<?= base_url('js/jquery-3.2.1.min.js'); ?>"></script>
        <script src="<?= base_url('js/popper.min.js'); ?>""></script>
        <script src="<?= base_url('js/bootstrap.min.js'); ?>""></script>
    </head>

    <body >

        <div class="container" >
            <div class="row">
                <div class="col-sm-12">
                    <div class="media">

                        <div class="media-body ">
                            <h3 class="mt-0 " style="padding-top:10px;">Moj nalog</h3>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div  class="col-sm-12">

                    <table class="table table">
                        <tbody>
                            <tr>
                                <td><strong>Ime</strong></td>
                                <td><?php echo $korisnik->Ime; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Prezime</strong></td>
                                <td><?php echo $korisnik->Prezime; ?></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td><strong>Korisničko ime</strong></td>
                                <td><?php echo $korisnik->Korisnicko_ime; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Lozinka</strong></td>
                                <td><?php echo $korisnik->Password; ?></td>
                                <td><a href="<?php echo site_url('BaseController/promena_lozinke'); ?>" class="btn btn-outline-dark top-btn">Promeni lozinku</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 responsive-wrap">
                    <div class="booking-checkbox_wrap mt-4">
                        <?php
                        $restorani = new App\Models\RestoranModel();
                        $ostavljenaZaModel = new \App\Models\OstavljenaZaModel();
                        $ostavljenaZaRestorane = $ostavljenaZaModel->where("Korisnicko_ime", $korisnik->Korisnicko_ime)->findAll();
                        $recenzijeModel = new App\Models\RecenzijaModel();
                        $cntr=0;
                        foreach($ostavljenaZaRestorane as $ostavljenaZa){
                            $recenzija = $recenzijeModel->where("Korisnicko_ime !=",null)->find($ostavljenaZa->idRec);
                            if($recenzija!=null) $cntr++;
                        }
                        ?>
                        
                        <?php
                        if ($cntr!=0) {
                            echo '<h5>Recenzija:'. $cntr.'</h5>
                        <hr>';
                            foreach ($ostavljenaZaRestorane as $ostavljenaZa) {
                                $recenzija = $recenzijeModel->where("Korisnicko_ime!=",null)->find($ostavljenaZa->idRec);
                            if($recenzija!=null){ echo '<div class="customer-review_wrap">
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>' . $restorani->find($recenzija->idR)->Ime . '</h6>
                                        
                                    </div>
                                   ';
                            
                            if($recenzija->Ocena!=null){
                                echo '<div class="customer-rating">'.$recenzija->Ocena.'</div>';
                            }
                               echo'
                                </div>
                                <p class="customer-text">' . $recenzija->Tekst . '</p>
                                   
                                ';
                                    $slikaModel=new App\Models\SlikaModel();
                                    $slike=$slikaModel->where("idRec",$recenzija->idRec)->findAll();
                                    foreach($slike as $slika){
                                        echo '<img src="'.base_url('images/'.$slika->Opis).'" class="img-fluid2" alt="#"> &nbsp;';
                                    }
                                    echo'
                            </div>
                            </div> <hr>';}
                            }
                        }
                        else{
                            echo '<h5>Nema recenzija</h5>';
                        }
                        ?>
                    </div>

                </div>
                <div class="col-md-6 responsive-wrap">
                    <div class="booking-checkbox_wrap mt-4">
                       
                     
                            <?php
                             echo '<h5>Posećeni restorani</h5><hr>';
                            $poseceniRestoraniModel = new \App\Models\PoseceniRestoraniModel();
                            $poseceniRestorani = $poseceniRestoraniModel->where("Korisnicko_ime", $korisnik->Korisnicko_ime)->findAll();
                            $restorani = new App\Models\RestoranModel();
                            foreach ($poseceniRestorani as $posecenRestoran) {
                                $restoran = $restorani->find($posecenRestoran->idR);
                                //echo $restoran->Ime;
                                echo '<div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>' . $restoran->Ime. '</h6>
                                        
                                    </div></div></div><hr>';
                            }
                            ?>
                        </ul
                        



                    </div>
                </div>


            </div>

            <hr>

            <div class="row">

            </div>


        </div> <!-- /container -->

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

