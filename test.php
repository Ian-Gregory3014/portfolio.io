<!DOCTYPE html>
<html>
<head>
	<title>8x8 Grid</title>
	<style>
		.black {
			background-color: black;
			height: 35px;
			width: 30px;
			float: left;
		}
		.white {
			background-color: white;
			height: 35px;
			width: 30px;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php
		for ($i=1; $i<=8; $i++) {
			for ($j=1; $j<=8; $j++) {
				if (($i+$j)%2 == 0) {
					echo "<div class='white'></div>";
				} else {
					echo "<div class='black'></div>";
				}
			}
			echo "<div class='clear'></div>";
		}
	?>
</body>
</html>