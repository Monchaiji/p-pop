<?php 
	$operator = $_GET['operator'];
	$x = $_GET['x'];
	$y = $_GET['y'];
	$z = "";
	$msg_error = "";
	if($operator && $x && $y){
		switch ($operator) {
			case 'plus':
				$z = $x + $y;
				break;
			case 'minus':
				$z = $x - $y;
				break;
			case 'multiply':
				$z = $x * $y;
				break;
			case 'divine':
				if($x > $y){
					$z = $x / $y;
				}else{
					$msg_error = "x less than y";
				}
				break;
			default:
				if($z){
					"solution : ".$z;
				}
				break;
		}
	}
?>
<h1>Hello Calculator</h1>
<form action="" method="get" method="get">
	<input type="number" placeholder="Enter variable X : " name="x">
	<input type="number" placeholder="Enter variable Y : " name="y">
	<br>
	<br>
	<input type="radio" name="operator" value="plus">+
	<input type="radio" name="operator" value="minus">-
	<input type="radio" name="operator" value="multiply">*
	<input type="radio" name="operator" value="divine">/
	<br>
	<br>
	<button type="submit">Calculate</button>
</form>

<?php echo $z; ?>
<br>
<?php echo $msg_error; ?>

