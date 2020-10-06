<?php


$grocery = array("Eggs", "Milk", "Cheese", "Water-Pack", "Tissues", "Watermelon");

echo "Hello Sir, do you have $grocery[0], $grocery[1], and $grocery[2]? Also if you sell fruits can I find a $grocery[5]?";


$grocery1 = array(
    "Eggs" => array('balade', 'mazare3'),
    "Milk" => array('Fresh', 'Taanayel'),
    "Water-Pack" => array('Tanoureen', 'Reem')
);
echo "<br>Hey Sir, Please I need 1 pack of " . $grocery1['Eggs'][0] . " eggs and 3 ".$grocery1['Water-Pack'][1] . " Water Pack<br>";
echo "Hey Sir, Please I need 1 pack of " . $grocery1[$grocery[0]][0] . " eggs and 3 ".$grocery1[$grocery[3]][1] . " Water Pack<br>";


