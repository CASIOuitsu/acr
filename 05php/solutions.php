<?php
$txt = "some text";
echo $txt . "<br>";
echo strlen($txt) . "<br>";
echo strcmp($txt, 'aaa') . "<br>";
echo strrev($txt) . "<br>";
$toTrim = "ççç some text çç";
echo trim($toTrim, "ç") . "<br>"; // remove das pontas! caso comum mais usado: para remover espaços


function getDay() {

    $dow = date('w');

    if ($dow>5){
        echo 'Boa!';
    }
    else {
        echo 'Nunca mais é fim de semana!';
    }
}

getDay();


$nums = [5,3,1];
sort($nums);
echo '<br>nums sorted: ';
print_r($nums);

?>