<!DOCTYPE html>
<html>
<head>
	<title>Straight Line</title>
</head>
<body>
	<h1>Menghitung Nilai Straight</h1>
	<form method="POST" action="strightline.php">
		<p>Menghitung Nilai Straight Line (Jika yang diketahui Useful Value)</p>
		<p>Nilai Cost = <input type="text" name="nilaiCost" size="10"></p>
		<p>Residual Value =<input type="text" name="nilaiRV" size="10"></p>
		<p>Useful Value =<input type="text" name="nilaiUV" size="10"></p>
		<p><input type="submit" value="Depreciaton Per Annum" name="submit">
		<a href="index.php"><input type="button" value="Back" /></a></p>
	</form>
	<p><a href="straightRD.php"><u>Jika yang diketahui adalah Rate of Depreciaton</u></a></p>

	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$nilaiCost = $_POST["nilaiCost"];
	$nilaiRV = $_POST["nilaiRV"];
	$nilaiUV = $_POST["nilaiUV"];
	$submit = $_POST["submit"];
	$jumlah = ($_POST["nilaiCost"] - $_POST["nilaiRV"]) / $_POST["nilaiUV"];
	if($submit){
		echo "</br>Nilai Cost adalah $nilaiCost";
		echo "</br>Nilai Residual Value adalah $nilaiRV";
		echo "</br>Nilai Useful Value adalah $nilaiUV";
		echo "</br>Jadi Nilai Depreciaton Per Annum adalah $jumlah";
	}  
	?>
</body>
</html>