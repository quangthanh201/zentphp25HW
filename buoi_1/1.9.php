<?php 
for ($i=0; $i < 5; $i++) { 
	for ($j=0; $j <= 5; $j++) { 
		if ($j >= 5 - $i) {
			echo "#";
		} else {
			echo "&nbsp ";
		}
	}
	echo "<br>";
}
 ?>