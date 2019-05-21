<!DOCTYPE html>
<html>
<head>
	<title>Min-Max-PHP</title>
	<meta charset="utf-8">
	<meta name="Sophal Taingon" content="LAB 0">
	<meta name="NIPTICT" content="Web Application">
</head>
<body>
	<h2>Find MIN number and MAX number using <u style="color: red;">PHP</u></h2>
	<?php

		$number = array(9,5,2,3,1,6,10,4,8,7);

		echo("Max number of array ".max($number));

		echo "<br>";

		echo "hello world";

		echo "<br>";

		$max = $number[0];
		$min = $number[0];


		for ($i=0; $i < 10 ; $i++) { 
			
			if ($max < $number[$i]) {
				$max = $number[$i];
			}

			if ($min > $number[$i]) {
				$min = $number[$i];
			}
		}

		echo "Max Number : ".$max;
		echo "<br>";
		echo "Min Number : ".$min;

	?>

</body>
</html>