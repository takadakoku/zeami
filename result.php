<?php
require_once 'database.php';

class Hoge extends DB_connect{

	public $dbh;

	public function __construct(){
		$this->dbh = $this->db_connect();
	}


	public function get_table(){
		$sql = 'SELECT * FROM price_and_delivery_date where table_id = 1';
		$stmt = $this->dbh->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}

$hoge = new Hoge();
$data = $hoge->get_table();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body style="padding: 10%;">
<table border="1">
  <tr>
    <th></th>
    <th scope="col">A営業日プラン</th>
    <th scope="col">B営業日プラン</th>
    <th scope="col">C営業日プラン</th>
    <th scope="col">D営業日プラン</th>
    <th scope="col">E営業日プラン</th>
  </tr>

	<tr>
		<td>1</td>
		<td>¥360</td>
		<td>¥468</td>
		<td>¥540</td>
		<td>¥612</td>
		<td>¥720</td>
	</tr>
	<tr>
		<td>2</td>
		<td>¥315</td>
		<td>¥410</td>
		<td>¥473</td>
		<td>¥536</td>
		<td>¥630</td>
	</tr>
	<tr>
		<td>3</td>
		<td>¥270</td>
		<td>¥351</td>
		<td>¥405</td>
		<td>¥459</td>
		<td>¥540</td>
	</tr>
	<tr>
		<td>4</td>
		<td>¥248</td>
		<td>¥322</td>
		<td>¥372</td>
		<td>¥422</td>
		<td>¥496</td>
	</tr>
	<tr>
		<td>5</td>
		<td>¥225</td>
		<td>¥293</td>
		<td>¥338</td>
		<td>¥383</td>
		<td>¥450</td>
	</tr>
	<tr>
		<td>6</td>
		<td>¥203</td>
		<td>¥264</td>
		<td>¥305</td>
		<td>¥345</td>
		<td>¥406</td>
	</tr>
	<tr>
		<td>7</td>
		<td>¥180</td>
		<td>¥234</td>
		<td>¥270</td>
		<td>¥306</td>
		<td>¥360</td>
	</tr>
	<tr>
		<td>8</td>
		<td>¥158</td>
		<td>¥205</td>
		<td>¥237</td>
		<td>¥269</td>
		<td>¥316</td>
	</tr>
	<tr>
		<td>9</td>
		<td>¥135</td>
		<td>¥176</td>
		<td>¥203</td>
		<td>¥230</td>
		<td>¥270</td>
	</tr>
</table>
<style>
th{
  background-color: #047dff;
  color: white;
padding: 15px;
}
td{
  font-weight: bold;
  text-align: center;
  padding: 10px;
}
</style>
</body>
</html>
