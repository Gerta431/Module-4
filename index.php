<?php
//phpinfo();
$x = 5;
$name = "Puhiza";
$number = 3.14;

echo gettype($x);
echo "<br>";
echo gettype($name);
echo "<br>";
echo gettype($number);
echo "<br>";

function addnumbers($number1,$number2){
$sum = $number1 + $number2;
echo $sum;
}

addnumbers(5,9);

echo "<br>";

function product($n1,$n2){
    return $n1 + $n2;
}
$sum3 = addNumbers(3,3);

function maxNumber($number1, $number2){
    if($number1>$number2){
        return $number1;}
        else{
            return $number2;}
}

$max = maxNumber(5,7);
echo "max is $max"

?>