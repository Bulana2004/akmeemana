<?php

include '../config/config.php';

$id = $_POST['id'];
$id_array = explode(",", $id);
$id = $id_array[0];
$year= $id_array[1];
$filename = $id_array[2];
   
$sql_data =[
    ['table' => 'publication'],
    ['table' => 'sin_publication'],
    ['table' => 'tam_publication']
];

$dir = "../assets/files/publication/" . $filename;
if(file_exists($dir)){
    unlink($dir);

    foreach($sql_data as $data){
    $table = $data['table'];

    $sql = $bdd -> prepare("DELETE FROM $table WHERE id = :id AND year = :year");
    $sql -> execute([
        ":id" => $id,
        ":year" => $year
    ]);
    }

    echo "<script>window.location.reload()</script>";
}


