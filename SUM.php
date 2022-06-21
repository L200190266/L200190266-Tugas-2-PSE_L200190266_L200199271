<!DOCTYPE html>
<html>
<head>
	<title>Sum of The Year</title>
</head>
<body>
	<h1>Sum of The Year</h1>
	<form method="POST" action="SUM.php">
		<p>Nilai Un-depreciated useful life = <input type="text" name="UNDE" size="10"></p>
		<p>Sum of the years digits = <input type="text" name="sum" size="10"></p>
		<p>Depreciable amount = <input type="text" name="DA" size="10"></p>
		<p><input type="submit" value="Depreciation expense" name="submit">
		<a href="index.php"><input type="button" value="Back" /></a></p>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$UNDE = $_POST["UNDE"];
	$sum = $_POST["sum"];
	$DA = $_POST["DA"];
	$submit = $_POST["submit"];
	$DPA = $_POST["UNDE"] / $_POST["sum"] * $_POST["DA"];
	if($submit){
		echo "<hr>";
		echo "<b> Hasil : </b>";
		echo "</br>Nilai Un-depreciated useful life adalah $UNDE";
		echo "</br>Sum of the years digits adalah $sum";
		echo "</br>Nilai Depreciable amount adalah $DA";
		echo "</br>Jadi Depreciation expense yang dihasilkan adalah <b> $DPA </b>.";
	}  
	?>

</body>
</html>