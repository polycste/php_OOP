<?php
function addFunction($num1, $num2)
{
  $sum = $num1 + $num2;
  return $sum;
}
$returnvalue = addFunction(50, 40);
echo "Returned value from the function : $returnvalue";
?>