<?php
	include('header.php');
	include('functions.php');

?>


	<form action="#" method="post">
		<table>
			<tr>
				<td>Enter THe First Number</td>
				<td>
					<label>
						<input type="number" name="num1">
					</label>
				</td>
			</tr>
			<tr>
				<td>Enter THe Second Number</td>
				<td>
					<label>
						<input type="number" name="num2">
					</label>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="calculation" value="Calculate"></td>
			</tr>
		</table>
	</form>



<?php
if(isset($_POST['calculation'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	if(empty($num1) or empty($num2)){
		echo "<span style='color: #ff1142;'>Field not be epty</span>";
	}else{
		echo 'First value is '. $num1 . ' Second value is ' .$num2 . '</br>';
		$cal = new Calculation;
		$cal->add($num1, $num2);
		$cal->sub($num1, $num2);
		$cal->mult($num1, $num2);
		$cal->div($num1, $num2);

	}

}

?>





<?php include('footer.php'); ?>