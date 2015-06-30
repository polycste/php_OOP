<?php
$numbers=array(3,7,5,12,2);
for ($i=0; $i<count($numbers); $i++) {
    for ($j=0; $j<count($numbers); $j++) {
      // Compare two elements of array
      if ($numbers[$j] > $numbers[$i]){
        $tmp = $numbers[$i];
        $numbers[$i] = $numbers[$j];
        $numbers[$j] = $tmp;
      }
    }
 }
//Print an array after sorting
 for($i=0;$i<count($numbers);$i++){
   echo $numbers[$i].",";
 }



?>