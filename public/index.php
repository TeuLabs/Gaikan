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

<style>
    a {
        text-decoration: none !important;
    }
</style>

<?php

use Gaikan\Element;

$rawUrl = 'https://randomuser.me/api/';
$data = json_decode(file_get_contents($rawUrl));

$myIcon = 'favorite';
$myLabel = $data->results[0]->name->last;

// Dynamic rendering
echo Element::render('<SCButton icon="fastfood" label="' . $myLabel . '" type="outlined" link="./" />');
// Static rendering
echo Element::render('<SCCard title="My Title" subtitle="Subtitle" />');
?>

</body>
</html>
