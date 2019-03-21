  
    <?php
    $data=file('cau-tra-loi.txt');
    $allcautraloi=array();
    array_shift($data);
    foreach ($data as $key => $value) {
        $timid2=explode('/',$value);
        $cauhoiid=$timid2[0];
        $luachonid=$timid2[1];
        $cautraloi=$timid2[2];
        $diem=$timid2[3];
        $allcautraloi[$cauhoiid][$luachonid]['option']=$cautraloi;
        $allcautraloi[$cauhoiid][$luachonid]['point']=$diem;
    }
    ?>