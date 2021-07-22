<?php

require_once('Components/ScButton.php');

use Components\ScButton;

?>

<!doctype html>
<html lang="en">
<head>

    <title>PHP Components Testing</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--<link rel="stylesheet" href="css/style.css">-->

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
</head>
<body>

    <?php

        $api_url = 'https://random-data-api.com/api/food/random_food/';

        $button = new ScButton;

        $ids = [1, 2, 3];

        $rawData = file_get_contents($api_url);
        $data = json_decode($rawData);
        ScButton::render('filled', 'fastfood', $data->dish);

    ?>

</body>
</html>