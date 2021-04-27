<?php

require_once('storeclass.php');
$mystore = new Mystore();

$users = $mystore->getUsers();

print_r($users);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roselle's Store | My store</title>
</head>
<body>
    
</body>
</html>