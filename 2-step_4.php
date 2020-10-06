
<?php


function isArmstrong($num) {
    $val = $num;
    $sum = 0;
    while($val > 1) {
        $digit = $val % 10;
        $sum = $sum + $digit ** 3;
        $val /= 10;
    }
    return $num == $sum;
}


if(isArmstrong(153)) {
    echo "153 is an armstrong number<br>";
}
else {
    echo "153 isn't an armstrong number<br>";
}
isArmstrong(163);
