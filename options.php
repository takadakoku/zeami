<?php
require_once 'database.php';

class Hoge extends DB_connect{

	public $dbh;

	public function __construct(){
		$this->dbh = $this->db_connect();
	}


	public function get_options($product_id){
		$sql = 'SELECT * FROM product_option INNER JOIN options ON product_option.option_id = options.option_id  WHERE product_option.product_id = '.$product_id. ' ORDER BY step';
		$stmt = $this->dbh->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}

$hoge = new Hoge();
$options = $hoge->get_options($_GET['product_id']);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body style="padding: 10%;">
	<form action="index.php" method="get">
		<?php
			$flg = 0;
			foreach ($options as $option) {
				if($option['step'] == 1){
					if($flg == 0){
						echo '<p>STEP'. $option['step'] .'</p>';
					}
					if($option['option_id'] == 1){
						echo '<button type="button"><input onclick="remove_id22()" type="radio" name="step1" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].', remove_option_id:22）</button>';
					}else if($option['option_id'] == 2){
						echo '<button type="button"><input onclick="remove_step2()" type="radio" name="step1" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'remove_option_id:10,11）</button>';
					}else{
						echo '<button type="button"><input type="radio" name="step1" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'）</button>';
					}
					$flg = 1;
				}
			}
			$flg = 0;
			echo '<br />';
		?>
	<div id="step2">
		<?php
			$flg = 0;
			foreach ($options as $option) {
				if($option['step'] == 2){
					if($flg == 0){
						echo '<p class="step2">STEP'. $option['step'] .'</p>';
					}
					echo '<button class="step2" type="button"><input type="radio" name="step2" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'）</button>';
					$flg = 1;
				}
			}
			$flg = 0;
			echo '<br />';
		?>
		</div>
		<?php
			$flg = 0;
			foreach ($options as $option) {
				if($option['step'] == 3){
					if($flg == 0){
						echo '<p>STEP'. $option['step'] .'</p>';
					}
					echo '<button type="button"><input type="radio" name="step3" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'）</button>';
					$flg = 1;
				}
			}
			$flg = 0;
			echo '<br />';
		?>
		<?php
			$flg = 0;
			foreach ($options as $option) {
				if($option['step'] == 4){
					if($flg == 0){
						echo '<p>STEP'. $option['step'] .'</p>';
					}
					if($option['option_id'] == 22){
						echo '<button id="id22" type="button"><input type="radio" name="step4" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'）</button>';
					}else{
						echo '<button type="button"><input type="radio" name="step4" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'）</button>';
					}
					$flg = 1;
				}
			}
			$flg = 0;
			echo '<br />';
		?>
		<?php
			$flg = 0;
			foreach ($options as $option) {
				if($option['step'] == 5){
					if($flg == 0){
						echo '<p>STEP'. $option['step'] .'</p>';
					}
					echo '<button type="button"><input type="radio" name="step5" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'）</button>';
					$flg = 1;
				}
			}
			$flg = 0;
			echo '<br />';
		?>
		<?php
			$flg = 0;
			foreach ($options as $option) {
				if($option['step'] == 6){
					if($flg == 0){
						echo '<p>STEP'. $option['step'] .'</p>';
					}
					echo '<button type="button"><input type="radio" name="step6" value="'.$option['option_id'].'">'.$option['text'].'（id:'.$option['option_id'].'）</button>';
					$flg = 1;
				}
			}
			$flg = 0;
			echo '<br />';
		?>

		
		<button type="submit">OK</button>
	</form>
<script>
	function remove_id22(){
		document.getElementById('id22').remove();
	}

	function remove_step2(){
		document.getElementById('step2').remove();
	}
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
