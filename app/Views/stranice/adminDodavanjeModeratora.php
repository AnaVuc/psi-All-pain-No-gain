<br>
<br>
<br>
<br>

<div class="container">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                   
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>Registrovani korisnici</h5>
                        <hr>
                        <?php 
                        $korisnikModel=new App\Models\KorisnikModel();
                        $korisnici=$korisnikModel->findAll();
                        foreach($korisnici as $korisnik){
                             echo '
                        <div class="row">
                        <div class="col-md-6"><h6>'.$korisnik->Korisnicko_ime.'</h6></div>
                        <div class="col-md-6">
                        <form name="uklanjanjeClana" action="'. site_url("Admin/dodajModeratora/{$korisnik->Korisnicko_ime}").'"method="post">
                            <input type="submit"  value="Postavi za moderatora" class="btn btn-primary py-2 px-4">
                            </form></div>
                          </div>
                        <hr>';
                        }
                        ?>
                       
                    
                    </div>
                </div>
            </div>
        </div>

