<?php
    //add array per directions
    $numbers = array(7,9,8,9,8,8,6);

    function printer($array)
    {
        for ($i = 0; $i< sizeof($array) ; $i++)
        {
            echo $array[$i] .", ";
        }
    }


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>

    <?php
        printer($numbers);
    ?>

</body>
</html>