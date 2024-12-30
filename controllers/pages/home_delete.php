<?php
include '../config/config.php';

$id = $_POST['id'];

$sql = $bdd -> prepare('select * from slider where id = :id');
$sql -> execute([
    ":id" => $id
]);
$data = $sql -> fetch();

$filePath = "../assets/img/slider/" . $data[1];
// echo $filePath;

    // Delete the image file from the folder
    if (file_exists($filePath)) {
        unlink($filePath); // Delete the file from the folder
    }

$sql = $bdd -> prepare("delete from slider where id = :id");
$sql -> execute([
    ":id" => $id
]);

?>