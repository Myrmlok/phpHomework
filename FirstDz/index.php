<?php
require("function.php");
//zd1
$arRand=array();
for($i=0;$i<10; $i++){
    $arRand[$i] = random_int(0,100);
}
//zd2
$arAdress=array(
    0=>array(
        "Town"=>"Rostov",
        "Street"=>"Cats",
        "NumHome"=>5,
    ),
    1=>array(
        "Town"=>"Moscow",
        "Street"=>"Red ",
        "NumHome"=>4,
    ),
    2=>array(
        "Town"=>"Roston on don",
        "Street"=>"Saratovskaya ",
        "NumHome"=>17,
    ),
    3=>array(
        "Town"=>"Rostov",
        "Street"=>"White",
        "NumHome"=>6,
    ),
);
for( $i=3;$i<10;$i++){
    $arAdress[$i] = array(
        "Town"=>"Rostov",
        "Street"=>"Cats",
        "NumHome"=>$i,
    );
}
//zd3
$array3=array_combine($arRand,$arAdress);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?= _p($arRand) ?>
        <?= _p($arAdress)?>
        <?= _p($array3) ?>
    </div>
</body>
</html>