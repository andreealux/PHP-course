<?php

$age = 38;
$salary = 600000;
$name = 'Alex';

//// 1. if condition
//if ($age < 22) {       // 1.1 Without curly braces { }
//    echo 'You are young man!!<br>';
//}

//if($age === 20){
//    echo "You are 20" . '<br>';
//}


// 2. if condition - else
//if ($age < 25) {
//    echo 'You are young man!!<br>';
//} else {
//    echo 'You are not young man!!<br>';
//}

// 3. if condition1 AND condition2
//if ($age < 22 && $salary > 500000) {
//    echo 'You are young AND rich<br>';
//}

// 4. if condition1 OR condition2
//if ($age < 22 || $salary > 500000) {
//    echo 'You are young OR rich<br>';
//}

// 5. if condition1 - elseif condition2 - else
//if ($age < 22) {
//    echo 'Young!!<br>';
//} elseif ($age < 30) {
//    echo 'You are not young but not old <br>';
//} elseif ($age < 60) {
//    echo "You are old but not too old<br>";
//} else {
//    echo 'You are too old'.'<br>';
//}

// 6. if condition1 and condition2 - elseif condition1 and condition2 - else
//if ($age < 22 && $salary >= 500000) {
//    echo 'You are young man AND rich!!<br>';
//} elseif ($age < 22 && $salary < 500000) {
//    echo "You are young, and not so rich<br>";
//} elseif ($age > 60 && $salary >= 500000) {
//    echo 'You are old, but rich<br>';
//} elseif ($age > 60 && $salary < 500000) {
//    echo 'You are old and NOT rich also<br>';
//} else {
//    echo 'You are between 22 and 60<br>';
//}

// 7. Ternary if
//echo $age < 22 ? 'Young' : ($age < 30 ? 'Not young but not old' : 'old');
//echo '<br>';
//
//echo $salary < 500000 ? 'Not Rich' : 'Rich';
//echo '<br>';
//
//// 7.1 Nested ternary
//echo $age < 22 ? ($age < 16 ? 'Too young' : 'Young') : 'Old';
//echo '<br>';

// 7.2 Short ternary
//$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"
$myAge = $age ? $age : 18;
echo $myAge .'<br>';

// 8. Null coalescing operator
$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent of above
echo $var.'<br>';

// 9. Null coalescing assignment operator. Since PHP 7.4
$person = [
//    'name' => 'John',
//    'address' => 'XXX',
];
//if (!isset($person['name'])){
//    $person['name'] = 'Anonymous';
//}

$person['name'] ??= 'Anonymous';
echo $person['name'].'<br>';

if (!isset($person['address'])){
    $person['address'] = 'Current location';
}

$person['address'] ??= 'Current location';
echo $person['address'].'<br>';

// 10. switch
$userRole = 'user2';

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    case 'user2':
        echo 'You can only view posts<br>';
        break;
    default:
        echo 'Unknown role<br>';
}
