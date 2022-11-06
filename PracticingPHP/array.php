<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing', 'leezche', 'duru', 'taecho');
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers, 'graphittie');
    var_dump($coworkers);
    ?>
</body>
</html>