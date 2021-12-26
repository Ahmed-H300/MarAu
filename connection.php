<?php
try {
    $connection= new PDO("mysql:dbname=MarAu;host=198.46.129.36;port=9906","MarAu","MaAHH;aHy8S#/=sE");
    //$connection= new PDO("mysql:dbname=MarAu;host=198.46.129.36;port=9906","root","m33gLfX4b4vpn3wa");
    //var_dump($connection);
    //echo "Hello World";
}catch (PDOException $exception){
    echo $exception->getMessage();
}