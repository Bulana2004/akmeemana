<?php
include '../config/config.php';

$id = $_POST['id'];

$sql = $bdd -> prepare('select * from tenders where id = :id');
$sql -> execute([
    ":id" => $id
]);
$data = $sql -> fetch();

$filePath = "../controllers/assets/files/tenders/" . $data[1];
// echo $filePath;

    // Delete the image file from the folder
    if (file_exists($filePath)) {
        unlink($filePath); // Delete the file from the folder
    }

$sql = $bdd -> prepare("delete from tenders where id = :id");
$sql -> execute([
    ":id" => $id
]);
$sql = $bdd -> prepare("delete from sin_tenders where id = :id");
$sql -> execute([
    ":id" => $id
]);
$sql = $bdd -> prepare("delete from tam_tenders where id = :id");
$sql -> execute([
    ":id" => $id
]);

?>