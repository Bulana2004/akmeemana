<?php
include '../config/config.php';
$vals = $_POST['vals'];

$user = $vals[0];
$password = $vals[1];

$stmt = $bdd -> prepare('select * from users where userName = :user and password = :password');
$stmt->execute([
    ":user" => $user,
    ":password" => $password
]);
$rowcount = $stmt -> rowCount();

if($rowcount > 0){
    setcookie("login" , "1" , 0 , "/");
    echo "<script>window.location.href='./controllers/dashboard.php';</script>";
}else{
    echo "<script>$('#output').removeAttr('hidden');</script>";
    echo "Username or Password is incorrect! - Plz try again";
}
