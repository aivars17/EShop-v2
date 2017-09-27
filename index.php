<?php

include_once "class/Database.php";


$db = new Database();
$products = $db->select_array("SELECT * FROM products");
$bla = $db->insert("INSERT ")
$dbtable = '';

	foreach ($products as $product) {
		 $dbtable .= "<div class='row cart'>
			<div class='col'>
				<div class='col'><h4 class='cartname text-center'>".$product['name']."</h4></div>
				<div class='col cartimg'><img height='180px' width='260px' src='images/".$product['url']."'></div>
				<div class='col text-center de'><p>".$product['model']."</p></div>
				<div class='row cartprice text-center'>
					<div class='col'><h5>".$product['price']."$</h5></div>
					<div class='col'><a href='#'><i class='bag fa fa-shopping-basket  fa-2x' aria-hidden='true'></i></a></div>
				</div>
			</div>
			</div>";
	}
       
include "view/list.php";
