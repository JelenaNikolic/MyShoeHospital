<?php


echo '<!DOCTYPE html>
	<link rel="stylesheet" href="products_list.css">

	<div id="content" style="width: 600px;">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="text-center">
              <div class="row">
				<div class="col-lg-6">
					<div class="box">
						<div class="body">
							<div class="form-group">					
								<h3 style="margin-left: 30px;"><b>Lista svih modela cipela</b></h3>';
									
									foreach($shoes as $shoe){
										echo "<h4 style='float: left; margin-left: 30px;'>Model: ".$shoe->product_title."</h4><br /><a href='".base_url()."admin/shoes/edit/".$shoe->product_id."' style='text-decoration: none; float: left; margin-left: 80px; margin-right: 30px;'>Edit</a><a href='".base_url()."admin/shoes/delete/".$shoe->product_id."' style='text-decoration: none; float: left;'>Delete</a>";
										echo "<div style='clear: both;'></div>";
										echo "<div style='margin-left: 30px;'>";
										echo "Sifra: ".$shoe->product_code."<br />";
										echo "Kategorija: ".$shoe->category."<br />";
										echo "Opis: ".$shoe->product_description."<br />";
										echo "Cena: ".$shoe->product_price."<br />
										</div>";
									}
									
							
						echo '</div>
						</div>
					</div>
				</div>
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->';