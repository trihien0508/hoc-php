<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tao là robo thần thánh</title>
</head>
<body>
<?php
require_once 'cau-hoi.php';
require_once 'cau-tra-loi.php';
$ketthuc=array();
foreach ($arrayallquestion as $key => $value) {
    $ketthuc[$key]['question']=$value;
    $ketthuc[$key]['sentence']=$allcautraloi[$key];
}
?>
    <form action='ket-qua.php' method="POST">
    <?php
        foreach ($ketthuc as $keyA => $value) {
            echo '<div class="question">'.$value['question'];
            echo '<ul>';
            foreach ($value['sentence'] as $keyC => $valueC) {
            echo '<li><label><input type="radio" name="'.$keyA.'" value="'.$valueC["point"].'">'.$valueC["option"].'</label></li>';}
            echo '</ul></div>';
            //echo '<li><label><input type="radio" name="1" id="1">'
        }
        ?>
        <input type="submit" value="kiểm tra" name="submit">
    </form>
</body>
</html>