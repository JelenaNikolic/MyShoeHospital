<?php
foreach($shoes as $model){
	echo '<form class="form-horizontal" action="'.base_url().'admin/shoes/update" method="post">
			<div class="form-group">
				<h3 style="margin-left: 30px"><b>Edit modela '.$model->product_code.'</b></h3>
				<input type="hidden" name="id" value="'.$model->product_id.'">
				<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Sifra modela: </label>
				<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
					<input type="text" id="text1" placeholder="Sifra modela" name="product_code" class="form-control" value="'.$model->product_code.'">
				</div>
				<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Naziv: </label>
				<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
					<input type="text" id="text1" placeholder="Naziv modela" name="product_title" class="form-control" value="'.$model->product_title.'">
				</div>
				<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Opis: </label>
				<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
					<input type="text" id="text1" placeholder="Opis" name="product_description" class="form-control" value="'.$model->product_description.'">
				</div>
				<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Cena: </label>
				<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
					<input type="text" id="text1" placeholder="Cena" name="product_price" class="form-control" value="'.$model->product_price.'">
				</div>
				<label class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Kategorija: </label>
				<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
					<select name="product_category" class="form-control">
						<option value="0">Odaberite kategoriju</option>
						<option value="1"';
						if ($model->product_category == 1) echo ' selected ';
						echo '>Muske cipele</option>
						<option value="2"';
						if ($model->product_category == 2) echo ' selected ';
						echo '>Zenske cipele</option>
						<option value="3"';
						if ($model->product_category == 3) echo ' selected ';
						echo '>Decije cipele</option>
					</select>
				</div><br/>
				<div style="clear: both"></div>
				<div class="form-actions no-margin-bottom">
					<input type="submit" value="Unesi" class="btn btn-primary" style="float: left; margin-left: 60px">
				</div>
			</div>
		</form>';
}

?>