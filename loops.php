<?php

//Loop with $counter

$counter = 0;
$loop = true;
while ($loop){
    echo "Counter $counter".'<br>';
    if($counter >= 5){
        $loop = false;
    }
    $counter++;
}

//do - while

$counter = 10;
do{
    echo "Counter $counter";
}while ($counter < 10);
echo '<br>';
// for

for ($i =0; $i < 10; $i++){
    echo "Counter: $i".'<br>';
}

// foreach

$fruits = ["Banana", "Apple", "Orange"];
foreach($fruits as $i => $fruit){
    echo $i . ' ' . $fruit . '<br>';
}

// Iterate Over associative array

$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value){
    if($key === 'hobbies') break;
    echo $value.'<br>';
}

echo '<pre>';
var_dump($person);
echo '</pre>';
