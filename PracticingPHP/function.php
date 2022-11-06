<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>function</h1>
    <?php
        $str = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit recusandae possimus?
        
        Eius quae cum sunt voluptatem enim non assumenda alias accusamus sapiente delectus! Dicta, fuga. Incidunt a reprehenderit tempore!";
        echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
        echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
        echo nl2br($str);
    ?>
</body>
</html>