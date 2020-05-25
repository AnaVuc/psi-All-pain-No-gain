
<div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                   
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>Recenzije za odobravanje</h5>
                        <hr>
                        <?php 
                        $recenzijaModel=new App\Models\RecenzijaModel();
                        $recenzije=$recenzijaModel->where('Korisnicko_ime_mod', null)->findAll();
                        $ostavljenaZaModel=new \App\Models\OstavljenaZaModel();
                        $restoranModel=new App\Models\RestoranModel();
                        foreach($recenzije as $recenzija){
                            $ostavljenaZa=$ostavljenaZaModel->find($recenzija->idRec);
                            $restoran=$restoranModel->find($recenzija->idR);
                            echo '<div class="customer-review_wrap">
                            <div class="customer-img">
                                <p>'.$ostavljenaZa->Korisnicko_ime.'</p>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>'.$restoran->Ime.'</h6>
                                    </div>
                                    <div class="customer-rating">'.$recenzija->Ocena.'</div>
                                </div>
                                <p class="customer-text">'.$recenzija->Tekst.'</p>
                            </div>
                        </div>
                        &nbsp;
                        <div class="row justify-content-end">
                        <div class="col-sm-3">
                        <form name="uklanjanjeClana" action="'. site_url("Moderator/odobriRecenziju/{$recenzija->idRec}").'"method="post">
                            <input type="submit"  value="Odobri" class="btn btn-primary py-3 px-5">
                            </form></div>
                          <div class="col-sm-3">  <form name="uklanjanjeClana" action="'. site_url("Moderator/odbijRecenziju/{$recenzija->idRec}").'"method="post">
                            <input type="submit"  value="Odbij" class="btn btn-primary py-3 px-5">
                            </form></div></div>
                        <hr>';
                        }
                        ?>
                       
                    
                    </div>
                </div>
            </div>
        </div>