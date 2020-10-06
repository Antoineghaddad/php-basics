<?php



$num ='54321';
$sum = sum($num);

function sum($num){
    for ($i=0; $i < strlen($num);  $i++){
    $sum += $num[$i];


}
return $sum;
}
echo $sum;


