  
    <?php
    $data=file('cau-hoi.txt');
    array_shift($data);
    $arrayallquestion=array();
    foreach ($data as $key => $value) {
    $tach=explode('/',$value);
    $id=$tach['0'];
    $question=$tach['1'];
    $arrayallquestion[$id]=$question;
    }
