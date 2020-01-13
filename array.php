<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
    <h1>array</h1>

    <?php
    $coworkers = array('egoing','babo','duru');
    
    echo $coworkers[2].'<br>';

    echo var_dump(count($coworkers));

    array_push($coworkers,'vivid');
    echo var_dump($coworkers);

    ?>

</body>
</html>