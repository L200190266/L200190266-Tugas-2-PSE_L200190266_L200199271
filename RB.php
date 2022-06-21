<!DOCTYPE html>
<html>
<head>
	<title>Reducing Balance</title>
</head>
<body>
	<h1>Reducing Balance</h1>
	<form method="POST" action="RB.php">
		<p>Net Book Value = <input type="text" name="NBV" size="10"></p>
		<p>Residual Value = <input type="text" name="RV" size="10"></p>
		<p>Nilai Rate of Depreciation = <input type="text" name="rate" size="10"> *tanpa tanda %</p>
		<p><input type="submit" value="Depreciation per annum" name="submit">
		<a href="index.php"><input type="button" value="Back" /></a></p>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$NBV = $_POST["NBV"];
	$RV = $_POST["RV"];
	$rate = $_POST["rate"];
	$submit = $_POST["submit"];
	$DPA = ($_POST["NBV"] - $_POST["RV"]) * $_POST["rate"]/100;
	if($submit){
		echo "<hr>";
		echo "<b> Hasil : </b>";
		echo "</br>Net Book Value adalah $NBV";
		echo "</br>Residual Value adalah $RV";
		echo "</br>Nilai Rate of Depreciation adalah $rate";
		echo "</br>Jadi Depreciation per annum yang dihasilkan adalah <b> $DPA </b>.";
	}  
	?>

</body>
</html>