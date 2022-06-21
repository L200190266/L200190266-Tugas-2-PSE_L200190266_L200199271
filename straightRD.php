<!DOCTYPE html>
<html>
<head>
	<title>Straight Line</title>
</head>
<body>
	<h1>Menghitung Nilai Straight</h1>
	<form method="POST" action="straightRD.php">
		<p>Menghitung Nilai Straight Line (Jika yang diketahui Rate Of Depreciation)</p>
		<p>Nilai Cost = <input type="text" name="nilaiCost" size="10"></p>
		<p>Residual Value =<input type="text" name="nilaiRV" size="10"></p>
		<p>Rate of Depreciation =<input type="text" name="nilaiRD" size="10"></p>
		<p><input type="submit" value="Depreciaton Per Annum" name="submit">
		<a href="index.php"><input type="button" value="Back" /></a></p>
	</form>
	<p><a href="strightline.php"><u>Jika yang diketahui adalah Useful Value</u></a></p>

	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$nilaiCost = $_POST["nilaiCost"];
	$nilaiRV = $_POST["nilaiRV"];
	$nilaiRD = $_POST["nilaiRD"];
	$submit = $_POST["submit"];
	$jumlah = ($_POST["nilaiCost"] - $_POST["nilaiRV"]) * $_POST["nilaiRD"];
	if($submit){
		echo "</br>Nilai Cost adalah $nilaiCost";
		echo "</br>Nilai Residual Value adalah $nilaiRV";
		echo "</br>Nilai Rate Of Depreciation adalah $nilaiRD";
		echo "</br>Jadi Nilai Depreciaton Per Annum adalah $jumlah";
	}  
	?>
</body>
</html>