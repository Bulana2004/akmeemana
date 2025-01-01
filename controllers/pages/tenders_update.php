<?php

include '../config/config.php';
$id = $_POST['id'];

$sql = $bdd -> prepare('select * from tenders where id = :id');
$sql -> execute([
    ":id" => $id
]);

// Get Sinhala table in tenders
$data = $sql -> fetch();
$sql = $bdd -> prepare('select * from sin_tenders where id = :id');
$sql -> execute([
    ":id" => $id
]);
$sin_data = $sql -> fetch();

// Get tamil table in tenders
$sql = $bdd -> prepare('select * from tam_tenders where id = :id');
$sql -> execute([
    ":id" => $id
]);
$tam_data = $sql -> fetch();

echo "<script> 
    $('#title').val('$data[2]');
    $('#sin_title').val('$sin_data[2]');
    $('#tam_title').val('$tam_data[2]');
    $('#date').val('$data[3]');
</script>";