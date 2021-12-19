<?php
try {
    $connection= new PDO("mysql:dbname=MarAu;host=localhost;port=3306","root","");
    var_dump($connection);
    echo "Hello World";
}catch (PDOException $exception){
    echo $exception->getMessage();
}