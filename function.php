<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
    <h1>function</h1>
    <?php
    $str="Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Dolorum veniam reiciendis 
    tempora consequuntur id, 
    autem nostrum magni eius, 
    incidunt laboriosam, 
    expedita 
    ex suscipit illum ratione 
    quas rem iusto cum! Expedita!";
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