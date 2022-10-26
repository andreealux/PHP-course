<?php

session_start();
echo session_id().'<br>';

//if (isset($_SESSION['counter'])){
//    $_SESSION['counter']++;
//}else{
//    $_SESSION['counter'] = 1;
//}

$_SESSION['counter'] ??=0;
$_SESSION['counter']++;

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>You have visited page: <?php echo $_SESSION['counter'] ?> times </h1>

</body>
</html>