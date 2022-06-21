<!DOCTYPE html>
<html>
<head>
	<title>Unit of Activity</title>
</head>
<body>
	<h1>Unit of Activity Depreciation</h1>
	<form method="POST" action="Unit.php">
		<p>Nilai Cost = <input type="text" name="cost" size="10"></p>
		<p>Residual Value = <input type="text" name="RV" size="10"></p>
		<p>Useful Life = <input type="text" name="UL" size="10"></p>
		<p><input type="submit" value="Depreciation expense" name="submit">
		<a href="index.php"><input type="button" value="Back" /></a></p>
	</form>
	<p><a href="soc.php"><u>Untuk menghitung presentase Stage of Completion</u></a></p>

	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$cost = $_POST["cost"];
	$RV = $_POST["RV"];
	$UL = $_POST["UL"];
	$submit = $_POST["submit"];
	$DPA = ($_POST["cost"] - $_POST["RV"]) / $_POST["UL"];
	if($submit){
		echo "<hr>";
		echo "<b> Hasil : </b>";
		echo "</br>Nilai Cost adalah $cost";
		echo "</br>Residual Value adalah $RV";
		echo "</br>Nilai Useful Life adalah $UL";
		echo "</br>Jadi Depreciation expense yang dihasilkan adalah <b> $DPA </b>.";
	}  
	?>

</body>
</html>