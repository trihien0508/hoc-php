<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robo siêu thông minh</title>
</head>
<body>
    <?php
$pointF=0;
$datach=file('cau-hoi.txt');
array_shift($datach);
foreach ($datach as $keyD => $value) {
    $tmp=explode('/',$value);
    $id=$tmp[0];
    $pointF=$pointF + $_POST[$id];
}
$datakq=file('ket-qua.txt') or die('nhap file sai kìa con bò');

foreach ($datakq as $keyE => $value) {
    $tachidkq=explode('/',$value);
    $min=$tachidkq[0];
    $max=$tachidkq[1];
    $content=$tachidkq[2];
    if($pointF>=$min && $pointF<=$max){
        $result=$content;
        break;
    }
}
    ?>
<?php
echo '<H2>'.$result.'</H2>';
    ?>
    <img
</body>
</html>