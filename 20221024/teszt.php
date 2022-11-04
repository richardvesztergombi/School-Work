<?php
    echo "ok";
    $a=1;
    echo "<br>", 'a változó értéke:'.$a;
    $arr=array('e','f','aaa');
    echo "<br>";
    print_r($tomb);
    echo "<br>";
    echo gettype($tomb);

    function paritas($v){
        return $v%2==0 ? "paros" : "páratlan";
    }



    //tömb bejárása:
    echo "<br> tömb bejárása";
    foreach($tomb as $ertek){
        echo $ertek,' ';
    }
    echo "<br>tömb hossza: {count{$tomb}}";

    $diakok=["Gyula"=>5,"Anna"=>3,"Peti"=>4];
    echo "<br> kulcs érték párok kiiratása: <br>";
    foreach($diakok as $kulcs=>$ertek){
        echo "{$kulcs} jegy: {$ertek} <br>";
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tesztelés</h1>
    <p>HTML-ben írt php változó: <?=$a?></p>
    <div>HTML-ből hívott PHP függvény-paritás használat: <?=paritas($a) ?></div>

</body>
</html>