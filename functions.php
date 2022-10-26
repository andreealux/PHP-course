<?php


function hello($name){
    echo 'Hello I am '.$name.'<br>';
}

hello('A');
hello('B');
hello('C');

// Create sum of two numbers
//function sum($a, $b){
//    return $a +$b;
//}
//
//$sum = sum(4,5);
//echo $sum.'<br>';

// Create function to sum all numbers using ...$nums
function sum(...$numbers){
//    echo '<pre>';
//    var_dump($numbers);
//    echo '</pre>';

//    $sum = 0;
//    foreach ($numbers as $num){
//        $sum += $num;
//    }
//    return $sum;

    return array_reduce($numbers, fn($carry, $n) => $carry + $n);
}

echo sum(1,2,3,4,5, 6, 7);

