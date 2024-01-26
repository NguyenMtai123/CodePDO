<?php
    require_once "connect.php";
    $sql = "DELETE FROM hocsinh WHERE id = ?";
    $id = 8;
    try{
        $statement = $conn -> prepare($sql);
        $data = [$id];
        $delete = $statement -> execute($data);
        var_dump($delete);
    }catch(Exception $exp){
        echo $exp->getMessage() . '<br>';
        echo 'File: ' . $exp->getFile() . '<br>';
        echo 'Line: ' . $exp->getLine() . '<br>';
    }
?>
