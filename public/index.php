<?php
require_once __DIR__ . './../vendor/autoload.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
          rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<?php

use Gaikan\Element;

$myIcon = 'favorite';
$myLabel = 'My Label';

echo Element::render('<SCButton icon="' . $myIcon . '" label="' . $myLabel . '" type="outlined" />');

// Meant to not render and throw an error
echo '<br>';
echo '<pre>';
echo Element::render('
    <SCCard title="My Title" subtitle="Subtitle" />
');
echo '</pre>';
?>

</body>
</html>
