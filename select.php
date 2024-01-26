<?php
    require_once "connect.php";
    //Truy vấn tất cả dữ liệu
    $sql = "SELECT * FROM hocsinh WHERE id =?";
    $id = 1;
    try{
        $statement = $conn -> prepare($sql);
        $arr = [$id];
        $statement -> execute($arr);
        $data = $statement -> fetchAll(PDO::FETCH_ASSOC);
        echo '<pre>';
        print_r($data);
        echo  '</pre>';
    }catch(Exception $exp){
        echo $exp->getMessage() . '<br>';
        echo 'File: ' . $exp->getFile() . '<br>';
        echo 'Line: ' . $exp->getLine() . '<br>';
    }
    //truy vấn
?>
