<?php
    require_once "connect.php";
    $sql = "UPDATE hocsinh SET name = :name, age = :age WHERE id = :id";
    //Data
    $name = 'Vương';
    $age = 15;
    $id = 6;
    try{
        $sttm = $conn -> prepare($sql);
        // $sttm->bindParam(':name',$name);
        // $sttm->bindParam(':age',$age);
        // $sttm->bindParam(':id',$id);
        $data = [
            'name' => $name,
            'age' => $age,
            'id' => $id
        ];
        $update = $sttm->execute($data);
        if($update){
            echo 'Update thành công';
        }
    }catch(Exception $exp){
        echo $exp->getMessage() . '<br>';
        echo 'File: ' . $exp->getFile() . '<br>';
        echo 'Line: ' . $exp->getLine() . '<br>';
    }
?>
