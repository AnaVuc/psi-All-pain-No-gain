<br>
<br>
<br>
<br>

<div class="container">
            <div class="row">
                <div class="col-md-6 responsive-wrap ">
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>Moderatori</h5>
                        <hr>
                        <?php 
                        $moderatorModel=new App\Models\ModeratorModel();
                        $moderatori=$moderatorModel->findAll();
                        foreach($moderatori as $moderator){
                            echo '
                        <div class="row">
                        <div class="col-md-6"><h6>'.$moderator->Korisnicko_ime.'</h6></div>
                        <div class="col-md-6">
                        <form name="uklanjanjeClana" action="'. site_url("Admin/ukloniModeratora/{$moderator->Korisnicko_ime}").'"method="post">
                            <input type="submit"  value="Ukloni moderatora" class="btn btn-primary py-2 px-4">
                            </form></div>
                          </div>
                        <hr>';
                        }
                        ?>
                       
                    
                    </div>
                </div>
            </div>
        </div>
