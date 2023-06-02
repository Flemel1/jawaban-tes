<?php
$count = 1;
while ($count <= 50) {
	if($count % 3 == 0 && $count % 5 == 0){
    	echo "FooBar <br>";
    } else if ($count % 3 == 0) {
    	echo "Foo <br>";
    } else if ($count % 5 == 0) {
    	echo "Bar <br>";
    }
    $count++;
}
