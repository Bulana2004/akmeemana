<?php 

try{

    $db = "mysql:dbname=akmeemana;host=localhost";
    $user = 'root';
    $passwor = '';

    $bdd = new PDO($db , $user , $passwor);
    $bdd->exec("SET NAMES 'utf8'");

}catch (Exception $e){
    echo "Can't connect database mysql_error()";
}

