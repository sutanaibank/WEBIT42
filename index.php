<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	define("vat",0.07);
	$spice = 500;
	$tax = $spice*vat;
	echo "ราคาสินค้า $spice บาท  มีภาษีมูลค่าเพิ่มเท่ากับ $tax บาท ";
?>

</body>
</html>