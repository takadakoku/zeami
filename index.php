<?php

require_once 'database.php';

class Hoge extends DB_connect{

	public $dbh;

	public function __construct(){
		$this->dbh = $this->db_connect();
	}

	public function get_products_by_category_id($category_id){
		$sql = 'SELECT * FROM product_category INNER JOIN product ON product_category.product_id = product.product_id WHERE category_id = '.$category_id;
		$stmt = $this->dbh->query($sql);
		$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $products;
	}

	public function get_category(){
		$sql = 'SELECT * FROM category';
		$stmt = $dbh->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function get_options($category_id){
		$sql = 'SELECT * FROM options WHERE category_id = '.$category_id. ' ORDER BY step';
		$stmt = $dbh->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function get_product($category_id){
		$sql = 'select * from product_category INNER JOIN product on product_category.product_id = product.product_id where category_id = 1;';
		$stmt = $dbh->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

}

	$hoge = new Hoge();

	if (isset($_GET['category_id'])) {

		$products = $hoge->get_options($_GET['category_id']);
	}elseif(isset($_GET['product_id'])){
		$options = $hoge->get_options($_GET['product_id']);

	}else{

		$stickers = $hoge->get_products_by_category_id(1);
		$kanbjjis = $hoge->get_products_by_category_id(2);
		$others = $hoge->get_products_by_category_id(3);
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body style="padding: 10%;">
	<h1>・ステッカー</h1>
<?php
	foreach($stickers as $sticker){
		echo '<a style="padding:3%;" href="options.php?product_id='.$sticker['product_id'].'">'.$sticker['product_name'].'</a><br />';
	}
;?>
	<h1>・缶バッチ</h1>
<?php
	foreach($kanbjjis as $kanbjji){
		echo '<a style="padding:3%;" href="options.php?product_id='.$kanbjji['product_id'].'">'.$kanbjji['product_name'].'</a><br />';
	}
;?>
	<h1>・その他</h1>
<?php
	foreach($others as $other){
		echo '<a style="padding:3%;" href="options.php?product_id='.$other['product_id'].'">'.$other['product_name'].'</a><br />';
	}
;?>
<script>
</script>
</body>
<style>
	p{
		font-weight: bold;
	}
	
	button{
		margin: 10px;
	}
</style>
