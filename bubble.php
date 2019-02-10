<?php

$data = [1, 3, 2, 5, 2, -3, 44, 433, -7];

function bubbleSort($data) 
{
	$arraySize = count($data);

	for ( $i=0; $i < $arraySize; $i++) { 
		
 		for ( $j = $arraySize-1; $j > $i; $j--) { 

 			if ($data[$j-1] > $data[$j]) {
 				
 				$temp = $data[$j-1];

 		 		$data[$j-1] = $data[$j];

 		  		$data[$j]= $temp;
 			}
 		}

	}

	return $data;
}

$numbers = bubbleSort($data);

for ($i = 0, $countData = count($data); $i < $countData; $i++) {
	echo $numbers[$i] .' ';
}