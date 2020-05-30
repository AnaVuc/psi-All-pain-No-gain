<div class="container">
            <div class="row">
                <div class="col-md-6 responsive-wrap ">
                    <div class="booking-checkbox_wrap mt-4">
                        <br>
                        <br>
                        <br>
                        <h5>Restorani</h5>
                        <hr>
                        <?php 
                        $restoranModel=new App\Models\RestoranModel();
                        $restorani=$restoranModel->findAll();
                        foreach($restorani as $restoran){
                            echo '
                        <div class="row">
                        <div class="col-md-6"><h6>'.$restoran->Ime.'</h6></div>
                        <div class="col-md-6">
                        <form name="uklanjanjeClana" action="'. site_url("Admin/ukloniRestoran/{$restoran->idR}").'"method="post">
                            <input type="submit"  value="Ukloni restoran" class="btn btn-primary py-2 px-4">
                            </form></div>
                          </div>
                        <hr>';
                        }
                        ?>
                       
                    
                    </div>
                </div>
            </div>
        </div>
