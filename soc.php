<!DOCTYPE html>
<html>
<head>
	<title>Stage of Completion</title>
</head>
<body>
	<h1>Menghitung Nilai Units od Activity Depreciation</h1>
	<form method="POST" action="soc.php">
		<p>Menghitung Nilai Stage of Completion %</p>
		<p>Value of work certivied as complete = <input type="text" name="value" size="10"></p>
		<p>Total ecpected production or usage =<input type="text" name="total" size="10"></p>
		<p><input type="submit" value="Stage of Completion %" name="submit">
		<a href="index.php"><input type="button" value="Back" /></a></p>
	</form>
	<p><a href="unit.php"><u>Menghitung Depreciation per annum</u></a></p>

	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$value = $_POST["value"];
	$total = $_POST["total"];
	$submit = $_POST["submit"];
	$jumlah = ($_POST["value"] - $_POST["total"]) * 100;
	if($submit){
		echo "</br>Value of work certivied as complete adalah $value";
		echo "</br>Total ecpected production or usage adalah $total";
		echo "</br>Jadi Nilai Stage of Completion % adalah $jumlah";
	}  
	?>
</body>
</html>