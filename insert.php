<?php
    require_once "connect.php";
    $sql = "INSERT INTO hocsinh(name,age) VALUES(:name,:age)";
try {
    $statement = $conn->prepare($sql);
    $name = 'Thiên';
    $age = '50';
    // $statement->bindParam(':name', $name);
    // $statement->bindParam(':age', $age);
    $data = [
        'name' => $name,
        'age' => $age
    ];
    $insert =  $statement->execute($data);
    var_dump($insert);
} catch (Exception $exp) {
    echo $exp->getMessage() . '<br>';
    echo 'File: ' . $exp->getFile() . '<br>';
    echo 'Line: ' . $exp->getLine() . '<br>';
}
