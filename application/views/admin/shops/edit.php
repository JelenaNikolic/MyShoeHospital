<?php

foreach($shops as $shop){
echo '<div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="text-center">
              <div class="row">
              <div class="col-lg-6">
                <div class="box">
                  <div class="body">
                    <form class="form-horizontal" action="'.base_url().'admin/shops/update" method="post">
                      <div class="form-group"><br/>
						<h3 style="margin-left: 30px"><b>Izmena informacija o prodavnici '.$shop->shop_name.'</b></h3><br/>	
						<input type="hidden" name="id" value="'.$shop->shop_id.'">						
                        <label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Naziv prodavnice: </label>
                        <div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
                          <input type="text" id="text1" placeholder="Naziv prodavnice" name="shop_name" class="form-control" value="'.$shop->shop_name.'">
                        </div>
						<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Grad: </label>
						<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
                          <input type="text" id="text1" placeholder="Grad" name="city" class="form-control"value="'.$shop->city.'">
                        </div>
						<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Adresa: </label>
						<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
                          <input type="text" id="text1" placeholder="Adresa" name="address" class="form-control" value="'.$shop->address.'">
                        </div>
						<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Telefon: </label>
						<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
                          <input type="text" id="text1" placeholder="Telefon" name="phone" class="form-control" value="'.$shop->phone.'">
                        </div>
						<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Opis: </label>
						<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
                          <input type="text" id="text1" placeholder="Opis" name="shop_description" class="form-control" value="'.$shop->shop_description.'">
                        </div>
						<label for="text1" class="control-label col-lg-4" style="margin-bottom: 10px; margin-left: 30px">Lager: </label>';
						
						foreach ( $products as $p ){
							echo '<div class="col-lg-8" style="margin-bottom: 10px; margin-left: 30px">
									<input type="checkbox" name="products_models" value="'.$p->product_code.'">'.$p->product_title.'
							     </div>';
						}
						echo '
						<div style="clear: both"></div>
						<div class="form-actions no-margin-bottom">
							<input type="submit" value="Izmeni" class="btn btn-primary" style="float: left; margin-left: 60px">
						</div>
                      </div>
                    </form>
				  </div>
                </div>
              </div>
            </div>
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->';
	  }
?>