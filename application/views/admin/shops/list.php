<?php

echo "<h3 style='margin-left: 30px'>Lista prodavnica</h3>";

foreach($shops as $shop){
	echo "<h4 style='float: left; margin-left: 30px'>".$shop->shop_name."</h4><br /><a href='".base_url()."admin/shops/edit/".$shop->shop_id."' style='text-decoration: none; float: left; margin-left: 80px; margin-right: 30px;'>Edit</a><a href='".base_url()."admin/shops/delete/".$shop->shop_id."' style='text-decoration: none; float: left;'>Delete</a>";
	echo "<div style='clear: both;'></div>";
	echo "<div style='margin-left: 30px'";
	echo $shop->city."<br />";
	echo "Adresa: ".$shop->address."<br />";
	echo "Telefon: ".$shop->phone."<br />";
	echo "Opis: ".$shop->shop_description."<br /></div>";
}

?>