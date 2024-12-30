<?php
include '../config/config.php';

$password = $_POST['vals'];
$sql = $bdd -> prepare('SELECT * FROM users WHERE password = :password');
$sql -> execute([
    ':password' => $password
]);
$count = $sql -> rowCount();

if($count > 0){
    setcookie('login', '1', 0, '/');
    echo "<script>window.location.href='./dashboard.php'</script>";
}