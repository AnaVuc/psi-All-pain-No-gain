<br>
<br>
<br>
<br>
<div class="container">
            <div class="row">
                <div class="col-md-6 text-left responsive-wrap ">
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>Dodavanje novog restorana</h5><hr><br>
                        <form name="dodavanjeRestorana" action="<?= site_url("Admin/dodavanjeRestorana") ?>" method="post">
                            <input type="text" placeholder="Ime restorana" name="ime" class="input-group-sm"><br><br>
                            <input type="text" placeholder="Adresa" name="adresa" class="input-group-sm"><br><br>
                            <input type="text" placeholder="Broj telefona" name="telefon" class="input-group-sm"><br><br>
                            <input type="text" placeholder="Sajt" name="sajt" class="input-group-sm"><br><br>
                                Vrsta hrane
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="vrstaHrane">
                                        <option value="italijanska">Italijanska</option>
                                        <option value="grcka">Grčka</option>
                                        <option value="meksicka">Meksička</option>
                                        <option value="azijska">Azijska</option>
                                        <option value="srpska">Srpska</option>
                                </select>&nbsp;&nbsp;
                                Cenovni rang
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="cenovniRang">
                                        <option value="$">$</option>
                                        <option value="$$">$$</option>
                                        <option value="$$$">$$$</option>
                                        <option value="$$$$">$$$$</option>
                                        <option value="$$$$$">$$$$$</option>
                                </select>
                                <br><br>  
                           <textarea class="form-control rounded-0" id="opisRestorana"  name="opisRestorana" rows="6" placeholder="Opis restorana"></textarea>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="file" name="slike[]" id="slike" multiple>
                            </div>
                            <div class="offset-sm-4 col-sm-2" id="">
                                <div class="reserve-btn">
                                    <div class="featured-btn-wrap">
                                        <input type="submit"  value="Dodaj restoran" class="btn btn-danger py-3 px-5">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                       </form>
                    </div>
                    </div>
                </div>
            </div>
</div>
<div>
   
</div>
<br>
<br>
<br>

