
    <div class="row">

        &nbsp;
    </div>
    <div class="row">

        &nbsp;
    </div>
    <div class="row">

        &nbsp;
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card border-info" style="width: 100%;">
              <div class="card-header">
                Korisnici
              </div>
              <ul class="list-group list-group-flush">
                <?php
                foreach ($korisnici as $korisnik){
                   echo "<li class='list-group-item' name='Korisnicko_ime'>$korisnik->Korisnicko_ime </li>";
                }
                ?>
              </ul>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="" style="width: 50%;">
                <form name='uklanjanjeClana' action="<?= site_url("Moderator/ukloniKorisnika") ?>" method="post">
                    <label for="">Korisničko ime korisnika koga želite da uklonite:</label>
                    <input type="text" class="form-control" placeholder="Korisničko ime" name='Korisnicko_ime'  value='<?= set_value("Korisnicko_ime")?>'>
                    <br>
                    <input type="submit"  value="Ukloni člana" class="btn btn-primary py-3 px-5">
                    
                </form>    
            </div>

        </div>
  </div>
  <div class="row">

    &nbsp;
</div>
<div class="row">

    &nbsp;
</div>
<div class="row">

    &nbsp;
</div>
  