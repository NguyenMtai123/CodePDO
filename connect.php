<?php
/*
try{
    $_Host = '127.0.0.1';
    $_DB = 'webcompany';// database
    $_User = 'root';
    $_Pass = 'mysql';
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
    ];
    $conn = new PDO('mysql:dbname='.$_DB.';host='._HOST,$_USER,$_PASS,$options);
    }catch (Exception $e){
        $eer = $e->getMessage();
        die();
    }
}
*/

//Thông tin kết nối
const _HOST = 'locallhost';
const _DB = 'myweb';
const _USER = 'root';
const _PASS = '';
try{
    if(class_exists('PDO')){
        $dsn = 'mysql:dbname='._DB.';host'._HOST;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
        ];
        $conn = new PDO($dsn,_USER,_PASS,$options);
        if($conn){
            echo 'Kết nối thành công ';
        }
    }

}catch (Exception $e){
    echo '<div style="color:red; padding: 5px 15px; border: 1px solid red;">';
    echo $e->getMessage().'<br>';
    echo '</div>';
    die();
}
?>
