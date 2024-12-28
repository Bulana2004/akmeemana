<?php

include '../config/config.php';

$id = $_POST['id'];

$sql = $bdd -> prepare('select * from news where id = :id');
$sql -> execute([
    ':id' => $id
]);
$row = $sql -> fetch();
$img = explode(',' , $row[1]);

$dr = '../controllers/assets/img/news/';

for ($i = 0; $i < count($img); $i++){

    $filepath = $dr . $img[$i];

    if(file_exists($filepath)){
        unlink($filepath);
    }

}

$delete = $bdd -> prepare("delete from news where id = :id");
$delete -> execute([
    ":id" => $id
]);
$delete = $bdd -> prepare("delete from sin_news where id = :id");
$delete -> execute([
    ":id" => $id
]);
$delete = $bdd -> prepare("delete from tam_news where id = :id");
$delete -> execute([
    ":id" => $id
]);