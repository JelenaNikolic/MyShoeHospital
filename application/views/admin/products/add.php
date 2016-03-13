<form class="form-horizontal" action="" method="<?=base_url()?>admin/shoes/create">
    <div class="form-group">
        <h5 style="margin-left: 160px"><b>Unos novog modela cipela</b></h5>
        <label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px">Sifra modela: </label>
        <div class="col-lg-8" style="margin-bottom: 10px">
            <input type="text" id="text1" placeholder="Sifra modela" name="product_code" class="form-control">
        </div>
        <label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px">Naziv: </label>
        <div class="col-lg-8" style="margin-bottom: 10px">
            <input type="text" id="text1" placeholder="Naziv modela" name="product_name" class="form-control">
        </div>
        <label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px">Opis: </label>
        <div class="col-lg-8" style="margin-bottom: 10px">
            <input type="text" id="text1" placeholder="Opis" name="product_description" class="form-control">
        </div>
        <label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px">Cena: </label>
        <div class="col-lg-8" style="margin-bottom: 10px">
            <input type="text" id="text1" placeholder="Cena" name="product_price" class="form-control">
        </div>
        <label class="control-label col-lg-4" style="margin-bottom: 10px">Kategorija: </label>
        <div class="col-lg-8" style="margin-bottom: 10px">
            <select class="form-control">
                <option value="0">Odaberite kategoriju</option>
                <option value="1">Muske cipele</option>
                <option value="2">Zenske cipele</option>
                <option value="3">Decije cipele</option>
            </select>
        </div>
        <br/><br/><br/><br/>
        <div style="clear: both"></div>
        <div class="form-actions no-margin-bottom">
            <input type="submit" value="Unesi" class="btn btn-primary" style="float: left; margin-left: 360px">
        </div>
    </div>
</form>
