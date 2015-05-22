<?php 


$file = "results.json";
$json = json_decode(file_get_contents($file), true);
foreach($json as $c) {
	foreach($c as $c2) {
		echo $c2 . "  " ;
	}
   echo "\n";
}

?>