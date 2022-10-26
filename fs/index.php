<?php

//magic constants
echo __DIR__ . '<br>'; //current directory
echo __FILE__ .'<br>'; //current file

//create directory
//mkdir('test');

//rename directory
//rename('test', 'my_folder');

// delete directory
//rmdir('my_folder');

//read files and folders inside directory
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

//file_get_contents, file_put_contents
//echo file_get_contents('lorem.txt') . '<br><br>';
//file_put_contents('test.txt', "Hello World!!");
//echo file_get_contents('test.txt') . '<br>';

$content = file_get_contents('lorem.txt');
file_put_contents('lorem.txt', 'My Text' . PHP_EOL . $content);