<?php
try {
    $connection= new PDO("mysql:dbname=MarAu;host=198.46.129.36;port=9906","MarAu","MaAHH;aHy8S#/=sE");
    var_dump($connection);
    echo "Hello World";
}catch (PDOException $exception){
    echo $exception->getMessage();
}